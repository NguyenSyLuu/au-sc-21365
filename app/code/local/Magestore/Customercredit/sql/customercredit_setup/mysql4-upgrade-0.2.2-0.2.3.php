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
/* Add bonus credit value attribute */
$data = array(
    'type' => 'decimal',
    'input' => 'text',
    'label' => 'Bonus Credit Balance',
    'backend' => '',
    'frontend' => '',
    'source' => '',
    'is_visible' => 0,
    'is_visible_on_front' => 0,
    'required' => 0,
    'user_defined' => 0,
    'is_searchable' => 1,
    'is_filterable' => 0,
    'is_comparable' => 0,
    'position' => 2,
    'unique' => 0,
    'default' => 0.00,
    'is_global' => ''
);
$setup->addAttribute('customer', 'credit_bonus', $data);
$attribute = Mage::getSingleton('eav/config')->getAttribute('customer', 'credit_bonus');
$attribute->setDefaultValue('0.00');
$attribute->save();
$installer->endSetup();

