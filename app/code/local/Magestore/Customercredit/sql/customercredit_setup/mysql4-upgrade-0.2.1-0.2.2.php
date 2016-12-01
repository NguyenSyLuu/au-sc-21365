<?php

/**
 * Magestore
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Magestore
 * @package     Magestore_Storecredit
 * @module      Storecredit
 * @author      Magestore Developer
 *
 * @copyright   Copyright (c) 2016 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 *
 */
/** @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

/**
 * create customercredit table
 */
$installer->run("
DROP TABLE IF EXISTS {$this->getTable('credit_bonus')};

CREATE TABLE {$this->getTable('credit_bonus')} (
  `bonus_id` int(10) unsigned NOT NULL auto_increment,
  `customer_id` int(10) unsigned NOT NULL ,
  `type_transaction_id` int(11) NULL,
  `bonus_credit` decimal(12,4) default '0',
  `bonus_time` datetime NULL,
  `status` varchar(20) default '',
  PRIMARY KEY (`bonus_id`),
  INDEX (`customer_id`),
  FOREIGN KEY (`customer_id`)
  REFERENCES {$this->getTable('customer_entity')} (`entity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();

