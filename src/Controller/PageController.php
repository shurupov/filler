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
     * @Route("/{slug}")
     * @param $slug
     * @return Response
     */
    public function page($slug = "root")
    {
        return $this->render('page.html.twig', [
            'data' => $this->pageService->get($slug),
        ]);
    }
}