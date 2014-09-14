<?php

namespace TmpJr\BeerConsumerBundle\Api;

use GuzzleHttp\Client as HttpClient;

abstract class Client
{
    protected $baseUrl;

    private $apiKey;

    private $httpClient;

    private $parameters;

    public function __construct($baseUrl, $apiKey)
    {
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;

        $this->parameters['key'] = $apiKey;
        $this->httpClient = new HttpClient();
    }

    /**
     * @param string $path
     * @param array $parameters
     * @return string JSON response
     */
    protected function get($path, array $parameters = array())
    {
        $url = $this->baseUrl . $path;
        array_push($this->parameters, $parameters);
        $response = $this->httpClient->get($url, ['query' => $this->parameters]);

        return $response->json();
    }

}
