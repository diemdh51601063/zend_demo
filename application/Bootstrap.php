<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap{
    protected function _initAutoload(){
        echo '<br>'.__METHOD__;
        $arrConfig = array(
            'namespace' => '',
            'basePath' => APPLICATION_PATH.'/modules/default',
        );
        
            $autoload = new Zend_Application_Module_Autoloader($arrConfig);
            return $autoload;
        
            //print_r($autoload);
            //die;
        
       
    }
}