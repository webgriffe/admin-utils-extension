<?php

abstract class Webgriffe_AdminUtils_Block_Adminhtml_System_Config_Form_Field_TableWithSelectFields extends
    Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    /**
     * @return Mage_Core_Block_Html_Select[] An associative array having the select fields names as keys and their
     *                                       Mage_Core_Block_Html_Select renderers as values
     */
    abstract protected function getSelectFieldsMap();

    protected function _prepareArrayRow(Varien_Object $row)
    {
        foreach ($this->getSelectFieldsMap() as $fieldName => $renderer) {
            $row->setData(
                'option_extra_attr_'.$renderer->calcOptionHash($row->getData($fieldName)),
                'selected="selected"'
            );
        }
    }
}
