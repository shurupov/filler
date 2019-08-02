<?php


namespace Filler\Service;


class DataService
{
    public function getData($name) {
        return $name . " text";
    }

    public function getDocumentById($collectionName, $id) {
        return $collectionName . " " . $id;
    }

    public function getDocumentByField($collectionName, $fieldName, $fieldValue) {
        return "collection=$collectionName; $fieldName=$fieldValue";
    }
}