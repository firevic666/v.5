<?php

class Index extends Controller {

    /**
     *   construct will load information from parent Controller
     *   Also the custom Js will be included so that we can make JS each page different 
     */
    function __construct() {
        parent::__construct();
                //$this->view->js = array('index/js/default.js');
    }

    function index() {
        $this->view->homeList = $this->model->homeList();
        $this->view->render('index/index');
    }

//    function getHome() {
//        $this->model->getHome();
//    }

}