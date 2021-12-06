<?php
class Model_Product extends Zend_Db_Table{
    protected $_name = 'actor';
    protected $_primary = 'actor_id';

    public function test(){
        echo '<br>'.__METHOD__;
        echo '<br> Model';
    }

    public function listItem(){
        $where = 'actor_id > 180';
        $order = ' actor_id DESC';
        $list_result = $this->fetchAll($where, $order)->toArray();
        return $list_result;
    }

    public function getItemDetail($arrParam){
        $where = 'actor_id = '.$arrParam['id'];
        $detail = $this->fetchRow($where);
        return $detail;
    }

    public function addItem($arrParam){
        $row = $this->fetchNew();
        $row->first_name = $arrParam['first_name'];
        $row->last_name = $arrParam['last_name'];
        $row->last_update = "2021-12-06 11:00:30";
        $row->save();
    }

    public function editItem($arrParam){
        $where = 'actor_id = '.$arrParam['id'];
        $row = $this->fetchRow($where);
        $row->first_name = $arrParam['first_name'];
        $row->last_name = $arrParam['last_name'];
        $row->last_update = "2021-12-06 11:00:30";
        $row->save();
    }

    public function deleteItem($arrParam){
        $where = 'actor_id = '.$arrParam['id'];
        $this->delete($where);
    }
}