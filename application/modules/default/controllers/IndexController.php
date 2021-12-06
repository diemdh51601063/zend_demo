<?php
class IndexController extends Zend_Controller_Action{

    protected $_arrParam;
    protected $_currentController;
    protected $_actionMain;

    public function init(){
        $this->_arrParam = $this->_request->getParams();
        $this->_currentController = '/'.$this->_arrParam['module'].'/'.$this->_arrParam['controller'];
        $this->_actionMain = '/'.$this->_arrParam['module'].'/'.$this->_arrParam['controller'].'/index';

        $this->view->arrParam = $this->_arrParam;
        $this->view->currentController = $this->_currentController;
        $this->view->actionMain = $this->_actionMain;
    }

    public function indexAction(){
        $model = new Model_Product();
        $this->view->ListItems = $model->listItem();
    }

    public function detailAction(){
        $model = new Model_Product();
        $this->view->item = $model->getItemDetail($this->_arrParam);
    }

    public function addAction(){
        if($this->_request->isPost()){
            $model = new Model_Product();
            $model->addItem($this->_arrParam);
            $this->redirect($this->_actionMain);
        }
    }

    public function editAction(){
        $model = new Model_Product();
        $this->view->item = $model->getItemDetail($this->_arrParam);
        if($this->_request->isPost()) {
            $model->editItem($this->_arrParam);
            $this->redirect($this->_actionMain);
        }
    }

    public function deleteAction(){
        $model = new Model_Product();
        try{
            $model->deleteItem($this->_arrParam);
        }catch (Exception $e) {

        }
        $this->redirect($this->_actionMain);
    }
}