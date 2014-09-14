<?php

namespace TmpJr\BeerConsumerBundle\Api\Clients;

use TmpJr\BeerConsumerBundle\Api\Client;

class Beer extends Client
{
    public function getBeer($beerId, array $parameters = array())
    {
        return $this->get('/beer/' . $beerId, $parameters);
    }
}