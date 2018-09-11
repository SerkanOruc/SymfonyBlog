<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Post;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/pop", name="somename")
     */
    public function createAction()
    {
        $post = new Post();
        $post->setTitle('Automatically Generated Blogpost');
        $post->setContent('Generic body of an automatically generated blog post.');
        $post->setPostedAt();

        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        return new Response('a new blog post was created with ID: ' . $post->getId());
    }
}
