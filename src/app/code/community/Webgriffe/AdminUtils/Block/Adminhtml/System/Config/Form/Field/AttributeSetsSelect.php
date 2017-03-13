<?php


class Webgriffe_AdminUtils_Block_Adminhtml_System_Config_Form_Field_AttributeSetsSelect extends
    Mage_Core_Block_Html_Select
{
    public function _toHtml()
    {
        $options = Mage::getModel('webgriffe_adminutils/system_config_source_productAttributeSet')->toOptionArray();
        foreach ($options as $option) {
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
