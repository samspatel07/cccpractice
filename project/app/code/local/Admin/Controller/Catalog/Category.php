<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')
            ->addCss('header.css')
            ->addCss('footer.css')
            ->addCss('category.css');
        $child = $layout->getChild('content');

        $categoryForm = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $categoryForm);
        echo $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_category');
        Mage::getModel('catalog/category')
            ->setData($data)
            ->save();
    }
    public function deleteAction()
    {
        $categoryId = $this->getRequest()->getParams('category_id');
        Mage::getModel('catalog/category')
            ->setId($categoryId)
            ->delete();
    }
    public function listAction()
    {
        // $this->includeCss();
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $productlist = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $productlist);
        $layout->toHtml();
    }
}