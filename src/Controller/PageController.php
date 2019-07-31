<?php


namespace Filler\Controller;


use Exception;
use Filler\Service\DataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /** @var DataService $dataService */
    private $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    /**
     * @Route("/")
     * @return Response
     */
    public function root()
    {
        return $this->page("root");
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
            'data' => $this->dataService->getData($slug1 . $slug2),
        ]);
    }
}