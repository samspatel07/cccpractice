<?php

class Controller_Front{
    public function init(){
        $obj = new Model_Request();
        $URI = $obj->getRequestURI();
        str_replace("/","_",$URI);

        
    }
}

?>