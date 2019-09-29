<?php


namespace Filler\Repository;


class PageRepository extends YaysondbRepository
{
    /**
     * PageRepository constructor.
     */
    public function __construct()
    {
        parent::__construct('page');
    }
}