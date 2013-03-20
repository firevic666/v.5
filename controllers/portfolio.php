<?php
/**
 *  Portfolio Controller
 */
class Portfolio extends Controller {
        
        /**
         *   construct will load information from parent Controller
         *   Also the custom Js will be included so that we can make JS each page different 
         */
	function __construct() {
		parent::__construct();
		
                $this->view->js = array('portfolio/js/default.js');
	}
	
	function index() 
	{	
		$this->view->render('portfolio/index');
	}
        
        function getPortfolio()
        {
            $this->model->getPortfolio();
        }
}