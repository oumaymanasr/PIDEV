<?php

namespace Allforkids\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@AllforkidsTemplate/layout.html.twig');
    }
    public function index2Action()
    {
        return $this->render('@AllforkidsTemplate/frontlayout.twig');
    }
}
