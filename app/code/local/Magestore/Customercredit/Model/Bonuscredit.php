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

/**
 * Customercredit Model
 *
 * @category    Magestore
 * @package     Magestore_Customercredit
 * @author      Magestore Developer
 */
class Magestore_Customercredit_Model_Bonuscredit extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('customercredit/bonuscredit');
    }

    public function checkbonuscredit()
    {
        Mage::log("WORKS!");
        /*
        $lifeTimeConfig = Mage::helper('customercredit')->getGeneralConfig('lifetime_bonuscredit');
        $now = time();
        $lifeTime = $lifeTimeConfig * 24 * 60 * 60;
        $customerCollection = Mage::getModel("customer/customer")->getCollection();
        $items = $customerCollection->getItems();
        $customercredit = Mage::getModel("customercredit/bonuscredit");
        foreach ($items as $item) {  //$item =  customer

            $customer = Mage::getModel('customer/customer')->load($item->getId());
            $customerBonusCredit = $customer->getCreditBonus();
            $credit = $customercredit->getCollection()->addFieldToFilter('customer_id', $item->getId())->addFieldToFilter('status', "1");
            $subBonus = 0;

            foreach ($credit as $bonus) { //$bonus =  bonus credit
                $bonusTime = strtotime($bonus->getBonusTime());
//                $bonusTotal += $bonus->getBonusCredit();
                if (($now - $bonusTime) < $lifeTime) {

                } else {
                    $subBonus += $bonus->getBonusCredit();
                    $bonus->setStatus(0)->save();
                }
            }
            if ($customerBonusCredit > $subBonus) {
                $customer->setCreditBonus($customerBonusCredit - $subBonus);
//                $customer->setCreditValue($customerBonusCredit-$subBonus);
            } else {
                $customer->setCreditBonus(0);
            }
            $customer->save();
        }
        */
    }
}
