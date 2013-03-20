<?php

class Error extends Controller{

    function __construct() {
        parent::__construct();
    }
    function index(){
                echo "EROR 404";
        
        $this->view->msg = "This is not a page";
        $this->view->render('error/index');
    }

}