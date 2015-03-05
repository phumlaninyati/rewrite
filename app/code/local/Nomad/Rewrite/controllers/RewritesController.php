<?php

class Nomad_Rewrite_RewritesController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        
        $this->_title($this->__('Catalog'))->_title($this->__('Url Rewrites'));
    	// "Fetch" display
        $this->loadLayout();
        
        //menu item to be highlited
        $this->_setActiveMenu('catalog/catalog');
        
        // "Inject" into display
        // THe below example will not actualy show anything since the core/template is empty
        $this->_addContent($this->getLayout()->createBlock('core/template'));
        
        // echo "Hello developer...";
                
        // "Output" display
        $this->renderLayout();
    }
    
    
     public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('nomad_rewrite/adminhtml_catalog_rewrite_grid')->toHtml()
        );
    }
    
    
}