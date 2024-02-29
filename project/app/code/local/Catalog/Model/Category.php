<?php

class Catalog_Model_Category extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Catalog_Model_Resource_Category';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Category';
    }
    public function getStatus()
    {
        $embeddings = [
            '1' => 'Enabled',
            '0' => 'Disabled',
        ];
        return isset($this->_data['status']) ? $embeddings[$this->_data['status']] : '';
    }
}