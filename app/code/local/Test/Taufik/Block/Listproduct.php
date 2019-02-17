<?php
class Test_Taufik_Block_Listproduct extends Mage_Catalog_Block_Product_Abstract
{
    public function getItems()
    {
        $params = Mage::app()->getRequest()->getParams();
        $sort = (isset($params['sort']))?$params['sort']:'asc';
        $collection = Mage::getResourceModel('catalog/product_collection')->distinct(true)
        ->setStoreId(Mage::app()->getStore()->getId())
        ->addMinimalPrice()->addAttributeToSelect('name')->addAttributeToSelect('sort_order')
        ->addFieldToFilter('sort_order',array('nin'=>'null'))
        ->addAttributeToSort('sort_order', $sort);
        // echo $collection->getSelect()->__toString();        

        return $collection;
    }

    public function showDescBtn()
    {
        $params = Mage::app()->getRequest()->getParams();
        $show = false;
        if(isset($params['sort'])){
            if($params['sort'] === 'desc')
                $show = true;
        }

        return $show;
    }
}