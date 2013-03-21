<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../v.5/login');
            exit;
        }

        $this->view->css = array('public/css/admin.css');
        $this->view->js = array('dashboard/js/default.js');
    }

    function index() {
        $this->view->pageList = $this->model->pageList();
        $this->view->render('dashboard/index');
    }

    function logout() {
        Session::destroy();
        header('location: ../login');
        exit;
    }
    
    public function input() {
        $this->view->render('dashboard/input');
    }

    public function create() {
        $data = array();
        $data['titel'] = $_POST['titel'];
        $data['text'] = $_POST['text'];
        $data['pagina'] = $_POST['pagina'];

        $this->model->create($data);
        header('location: ' . URL . 'dashboard');
    }

    public function edit($id) {
        $this->view->page = $this->model->pageSingleList($id);
        $this->view->render('dashboard/edit');
    }

    public function editSave($id) {
        $data = array();
        $data['id'] = $id;
        $data['titel'] = $_POST['titel'];
        $data['text'] = $_POST['text'];
        $data['pagina'] = $_POST['pagina'];

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        header('location: ' . URL . 'dashboard');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('location: ' . URL . 'dashboard');
    }

}