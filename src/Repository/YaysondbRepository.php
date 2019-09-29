<?php


namespace Filler\Repository;


use hanneskod\yaysondb\Engine\FlysystemEngine;
use hanneskod\yaysondb\Yaysondb;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

abstract class YaysondbRepository
{
    /* @var Yaysondb $db */
    private $db;
    /* @var string $collection */
    private $collection;

    /**
     * YaysondbDataService constructor.
     * @param string $collection
     */
    public function __construct($collection)
    {
        $this->collection = $collection;
        $this->db = new Yaysondb([
            $this->collection => new FlysystemEngine(
                "$this->collection.json",
                new Filesystem(new Local(ROOT . 'data/'))
            )
        ]);
    }

    public function getDocumentById($id)
    {
        return $this->db->{$this->collection}->read($id);
    }
}