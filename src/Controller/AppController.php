<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 2/18/18
 * Time: 2:55 PM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AppController
 * @package App\Controller
 *
 */
class AppController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/", name="home")
     */
    public function homeAction(){
        return $this->render('base.html.twig');
    }
}