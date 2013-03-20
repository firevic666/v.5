<?php

class Index_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function homeList() {
        return $this->db->select('SELECT id, titel, text, pagina FROM data');
    }

//    function getHome() {
//        $result = $this->db->select("SELECT * FROM data WHERE pagina='home'");
//        echo json_encode($result);
//    }
}