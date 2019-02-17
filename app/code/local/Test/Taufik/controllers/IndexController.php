<?php  

class Test_Taufik_IndexController extends Mage_Core_Controller_Front_Action
{

    public function IndexAction()
    {
      $this->loadLayout();
      $this->getLayout()->getBlock("head")->setTitle($this->__("List"));
            $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("List Product with order"),
                "title" => $this->__("List Product with order"),
                "link"  => Mage::getBaseUrl()
           ));

      $breadcrumbs->addCrumb("demo", array(
                "label" => $this->__("list"),
                "title" => $this->__("List")
           ));

      $this->renderLayout();
    }

    public function TaufikAction()
    {
        $this->loadLayout();
        $this->getLayout()->getBlock("head")->setTitle($this->__("List"));
              $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
        $breadcrumbs->addCrumb("home", array(
                  "label" => $this->__("List"),
                  "title" => $this->__("List"),
                  "link"  => Mage::getBaseUrl()
             ));
  
        $breadcrumbs->addCrumb("demo", array(
                  "label" => $this->__("list Taufik"),
                  "title" => $this->__("List Taufik")
             ));
  
        $this->renderLayout();
    }
}