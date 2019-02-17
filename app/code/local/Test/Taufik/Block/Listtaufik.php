<?php
class Test_Taufik_Block_Listtaufik extends Mage_Core_Block_Template
{
    public function getItems()
    {
        $params = Mage::app()->getRequest()->getParams();
        $sort = (isset($params['sort']))?$params['sort']:'asc';
        $collection = Mage::getResourceModel('taufik/taufik_collection');
        // echo $collection->getSelect()->__toString();        

        return $collection;
    }

    public function getStatusText($status)
    {
        $data = '<span style="color:red">'.$this->__('Not Active').'</span>';
        if($status){
            $data = '<span style="color:green">'.$this->__('Active').'</span>';
        }

        return $data;
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