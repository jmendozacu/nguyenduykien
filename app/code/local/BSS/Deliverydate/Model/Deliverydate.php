<?php
 /**
 * BssCommerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento COMMUNITY edition
 * BssCommerce does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * BssCommerce does not provide extension support in case of
 * incorrect edition usage.
 * =================================================================
 *
 * @category   BSS
 * @package    BSS_Deliverydate
 * @author     Extensions Team
 * @copyright  Copyright (c) 2014-2105 BssCommerce Co. (http://bsscommerce.com)
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
 
    class BSS_Deliverydate_Model_Deliverydate extends Mage_Core_Model_Abstract
    {
        const TYPE_SHIPPING_METHOD    = 1;
        const TYPE_REVIEW_PAGE    = 2;
        public function _construct()
        {
            parent::_construct();
            $this->_init('deliverydate/deliverydate');
        }

        public function toOptionArray()
        {
            return array(
                self::TYPE_SHIPPING_METHOD => Mage::helper('adminhtml')->__('Shipping Method'),
                self::TYPE_REVIEW_PAGE => Mage::helper('adminhtml')->__('Order Review Page')
            );
        }
}