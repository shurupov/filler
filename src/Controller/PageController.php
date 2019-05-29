<?php


namespace Filler\Controller;


use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function root()
    {
        return $this->page("Root");
    }

    /**
     * @Route("/{slug1}/{slug2}")
     * @param $slug1
     * @param $slug2
     * @return Response
     */
    public function page($slug1, $slug2 = "")
    {
        return $this->render('page.html.twig', [
            'data' => $slug1 . $slug2,
        ]);
    }
}