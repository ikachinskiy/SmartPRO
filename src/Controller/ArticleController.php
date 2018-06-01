<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 03.03.18
 * Time: 1:53
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
    /**
     * @Route("/")
     */
    public function homepage() {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/news")
     */
    public function show() {
        return new Response(
            "<html><body>".
            'Show = '.$_SERVER['APP_ENV'].
            "</body></html>"
        );
    }
}