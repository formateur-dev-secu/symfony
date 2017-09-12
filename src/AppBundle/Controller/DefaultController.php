<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('AppBundle:Post')->findByPublic(true);

        return $this->render('default/index.html.twig', [
            'posts' => $posts
        ]);
    }

    /**
     * @param String $slug
     * @Route("article/{slug}", name="article_display")
     */
    public function articleAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("AppBundle:Post")->findOneBy(
            [
            'slug' => $slug,
            'public' => true
            ]
        );

        return $this->render('default/post.html.twig', [
            "post" => $post
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        $test = "toto";

        return $this->render('contact/index.html.twig', [
            "variable" => $test
        ]);
    }
}
