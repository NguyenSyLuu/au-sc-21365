<?php
$installer = $this;

$installer->startSetup();

$installer->run("

    ALTER TABLE {$this->getTable('auction_product')}
	ADD `type_credit_use` tinyint(1) NOT NULL DEFAULT '1'
	;

 ");
$installer->endSetup(); 