<?php


namespace Filler\Service;


use Filler\Repository\PageRepository;

class PageService
{
    /* @var PageRepository $pageRepository */
    private $pageRepository;

    /**
     * PageService constructor.
     * @param PageRepository $pageRepository
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function get($id) {
        //return $this->aaService->get($id);
        return $this->pageRepository->getDocumentById($id);
    }
}