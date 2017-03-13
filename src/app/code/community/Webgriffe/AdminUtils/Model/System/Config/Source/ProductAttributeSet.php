<?php


class Webgriffe_AdminUtils_Model_System_Config_Source_ProductAttributeSet
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->getCollection()->toOptionArray();
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return $this->getCollection()->toArray();
    }

    /**
     * @return Mage_Eav_Model_Entity_Collection_Abstract|Mage_Eav_Model_Resource_Entity_Attribute_Set_Collection
     */
    private function getCollection()
    {
        return Mage::getModel('eav/entity_attribute_set')
            ->getCollection()
            ->setEntityTypeFilter(
                Mage::getSingleton('eav/config')->getEntityType(Mage_Catalog_Model_Product::ENTITY)->getId()
            );
    }
}
