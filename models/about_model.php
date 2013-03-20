<?php

class About_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function getAbout() {
        $result = $this->db->select("SELECT * FROM data WHERE titel='over mij'");
        echo json_encode($result);
    }

}