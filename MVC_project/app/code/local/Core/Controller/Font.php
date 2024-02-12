<?php
class Core_Controller_Font{
    public function init(){
        $obj = new Core_Model_Request();
        $this->getModuleName();
        $this->getControllerName();
        $this->getActionName();
}
}
?>