<?php
$installer = $this;

$installer->startSetup();

$installer->run("

    ALTER TABLE {$this->getTable('auction_product')}
	ADD `allow_winner` tinyint(1) NOT NULL DEFAULT '2'
	;

 ");
$installer->endSetup(); 