<?php
/**
 * Created by PhpStorm.
 * User: fredrsf
 * Date: 21.05.16
 * Time: 20:20
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}