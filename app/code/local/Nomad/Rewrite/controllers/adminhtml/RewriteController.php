<?php

class Nomad_Rewrite_Adminhtml_RewriteController extends Mage_Adminhtml_Controller_Action {

    public function indexAction(){
                $this->loadLayout()
                ->_addContent(
                $this->getLayout()
                ->createBlock('nomad_rewrite/adminhtml_rewrite')
                ->setTemplate('nomad/rewrite.phtml'))
                ->renderLayout();
    }
}
