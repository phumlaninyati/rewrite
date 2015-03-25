<?php

class Nomad_Rewrite_RewritesController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
    
        //echo "Hello tuts+ World";exit;
    
        $this->loadLayout();
        $this->_setActiveMenu('Nomad');
        //$this->_addContent($this->getLayout()->createBlock('nomad/adminhtml_rewrite_index'));
        $this->renderLayout();
        //var_dump(Mage::getSingleton('core/layout')->getUpdate()->getHandles());
//die();
    }

    
    
//     public function gridAction()
//    {
//        $this->loadLayout();
//        $this->getResponse()->setBody(
//            $this->getLayout()->createBlock('nomad_rewrite/adminhtml_rewrite_grid')->toHtml()
//        );
//    }
    
    
}