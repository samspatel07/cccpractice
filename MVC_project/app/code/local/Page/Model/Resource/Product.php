<?php
class Product_Model_Resource_Product{
    protected $_tablename = "";
    protected $_primarykey = "";

    public function init($tablename,$primarykey){
        $this->_tablename = $tablename;
        $this->_primarykey = $primarykey;

    }

    //above part is abstract
    public function __construct(){
        $this->init('ccc_product','product_id');
    }
}
?>