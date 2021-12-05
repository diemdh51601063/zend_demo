<?php
class Model_Product extends Zend_Db_Table{
    protected $_name = 'product';
    protected $_primary = 'id';

    public function test(){
        echo '<br>'.__METHOD__;
    }
}