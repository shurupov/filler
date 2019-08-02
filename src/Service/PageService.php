<?php


namespace Filler\Service;


class PageService
{
    private const PAGE_COLLECTION_NAME = "page";

    /** @var DataService $dataService */
    private $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function getPageData($slug1, $slug2) {
        $slug = $slug1 . (empty($slug2) ? "" : "/$slug2");
        return $this->dataService->getDocumentByField(self::PAGE_COLLECTION_NAME, "slug", $slug);
    }

}