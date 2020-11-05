<?php

namespace Acme\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="index")
     */
    public function indexAction()
    {
        return $this->render('AcmePruebaBundle:Default:index.html.twig');
    }
}
