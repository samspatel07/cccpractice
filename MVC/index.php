<?php

include "Lib/autoload.php";


class Ccc{
	public static function init(){
		// echo "123";
		$frontobj = new Controller_Front();
		$frontobj->init();
	}
}
// $obj = new Model_Request();
// echo $obj->getRequestURI();
Ccc::init();

// $request = new Model_Request();

// if(!$request->isPost()) {
// 	$product = new View_Product();
// 	echo $product->toHtml();
// } else {
// 	$product = new Model_Product();
// 	$product->save($request->getParams('pdata'));
// 	// print_r(); 
// }

?>