<?php


namespace Filler\Controller;


use Filler\Service\PageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /** @var PageService $pageService */
    private $pageService;

    public function __construct(PageService $dataService)
    {
        $this->pageService = $dataService;
    }

    /**
     * @Route("/{slug1}/{slug2}")
     * @param $slug1
     * @param $slug2
     * @return Response
     */
    public function page($slug1 = "root", $slug2 = "")
    {
        return $this->render('page.html.twig', [
            'data' => $this->pageService->getPageData($slug1, $slug2),
        ]);
    }
}