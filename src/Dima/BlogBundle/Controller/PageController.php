<?php

namespace Dima\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('@DimaBlog/Page/index.html.twig');
    }

}