<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 2/18/18
 * Time: 2:55 PM
 */

namespace App\Controller;


use App\Entity\Post;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
     * @Route("/", name="addPost")
     */
    public function addPostAction(Request $request){
        //Create object
        $post = new Post();

        //Create form
        $form = $this->createForm(PostType::class, $post);

        //Link object to request
        $form->handleRequest($request);

        //
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return new Response('Post Created');
        }

        //Generate form
        $createView = $form->createView();

        return $this->render('views/home.html.twig', [
            'form' => $createView
        ]);
    }
}