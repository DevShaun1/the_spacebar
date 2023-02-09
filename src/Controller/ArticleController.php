<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController {
    /**
     * @Route("/")
     */
    public function homepage() {
        return New Response("I'm alive!");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug) 
    {
        $comments = [
            'The world is so awesome',
            'Nothing is handed to you on a silver platter',
            'Someday the sun will shine brighter than your ego'
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}