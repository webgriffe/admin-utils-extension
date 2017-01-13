<?php


class Webgriffe_AdminUtils_Block_Adminhtml_System_Config_Form_Field_ShippingMethodsSelect extends
    Mage_Core_Block_Html_Select
{
    public function _toHtml()
    {
        foreach (Mage::getSingleton('adminhtml/system_config_source_shipping_allmethods')->toOptionArray() as $option) {
            $this->addOption($option['value'], $option['label']);
        }

        return parent::_toHtml();
    }

    public function setInputName($value)
    {
        return $this->setName($value);
    }

    public function getClass()
    {
        $column = $this->getData('column');
        return $column['class'];
    }

    public function getTitle()
    {
        $column = $this->getData('column');
        return $column['label'];
    }
}
