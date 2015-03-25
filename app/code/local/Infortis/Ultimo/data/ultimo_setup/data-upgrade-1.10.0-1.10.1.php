<?php

$installer = $this;
$installer->startSetup();


//Update the field with new default value
$sidePadding = Mage::getStoreConfig('ultimo_design/page/content_padding_side');
if ($sidePadding)
{
	Mage::getConfig()->saveConfig('ultimo_design/page/content_padding_side', '12');
}


Mage::getSingleton('ultimo/cssgen_generator')->generateCss('grid',   NULL, NULL);
Mage::getSingleton('ultimo/cssgen_generator')->generateCss('layout', NULL, NULL);
Mage::getSingleton('ultimo/cssgen_generator')->generateCss('design', NULL, NULL);


$installer->endSetup();
