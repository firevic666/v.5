<?php

class System extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../v.5/login');
            exit;
        }


        $this->view->js = array('system/js/default.js');
    }

    function index() {
        $this->view->pageList = $this->model->pageList();
        $this->view->render('system/index');
    }

    function logout() {
        Session::destroy();
        header('location: ../login');
        exit;
    }

    function xhrInsert() {
        $this->model->xhrInsert();
    }

    function xhrGetListings() {
        $this->model->xhrGetListings();
    }

    function xhrDeleteListing() {
        $this->model->xhrDeleteListing();
    }

    public function edit($id) {
        $this->view->page = $this->model->pageSingleList($id);
        $this->view->render('system/edit');
    }

    public function editSave($id) {
        $data = array();
        $data['id'] = $id;
        $data['heading1'] = $_POST['heading1'];
        $data['heading2'] = $_POST['heading2'];
        $data['heading3'] = $_POST['heading3'];
        $data['heading4'] = $_POST['heading4'];
        $data['heading5'] = $_POST['heading5'];

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        header('location: ' . URL . 'system');
    }

}