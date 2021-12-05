<?php
class IndexController extends Zend_Controller_Action{

    public function init(){

    }

    public function indexAction(){
        echo '<br>'.__METHOD__;
        $model = new Model_Product();
      
    }
}