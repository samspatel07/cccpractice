<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $this->includeCss();
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_product');
        Mage::getModel('catalog/product')
            ->setData($data)
            ->save();
    }
    public function deleteAction()
    {
        echo "<pre>";
        $productId = $this->getRequest()->getParams('product_id');
        Mage::getModel('catalog/product')
            ->load($productId)->delete();
    }

    public function includeCss()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('footer.css')
            ->addCss('product/list.css')
            ->addCss('product/form.css');
    }
    public function listAction()
    {
        $this->includeCss();
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $productlist = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productlist);
        $layout->toHtml();
    }
}