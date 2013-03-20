<?php

class Portfolio_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function getPortfolio() {
        $result = $this->db->select("SELECT * FROM data WHERE pagina='portfolio'");
        echo json_encode($result);
    }

}