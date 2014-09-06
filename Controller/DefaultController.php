<?php

namespace TmpJr\BeerConsumerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TmpJrBeerConsumerBundle:Default:index.html.twig', array('name' => $name));
    }
}
