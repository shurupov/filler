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
        return $this->level1("Root");
    }
    /**
     * @Route("/{slug}")
     * @param $slug
     * @return Response
     */
    public function level1($slug)
    {
        return $this->render('page.html.twig', [
            'data' => $slug,
        ]);
    }

    /**
     * @Route("/{slug1}/{slug2}")
     * @param $slug1
     * @param $slug2
     * @return Response
     */
    public function level2($slug1, $slug2)
    {
        return $this->render('page.html.twig', [
            'data' => $slug1 . $slug2,
        ]);
    }
}