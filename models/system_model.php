<?php

/**
 * 
 * Configuration Functies that are Chooseable in backend!
 * These system settings will only be available for the administrator for now.
 * 
 */
class System_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function xhrInsert() {
        $text = $_POST['text'];

        $this->db->insert('data', array('text' => $text));
        $data = array('text' => $text, 'id' => $this->db->lastInsertId());
        echo json_encode($data);
    }

    function xhrGetListings() {
        $result = $this->db->select("SELECT * FROM data");
        echo json_encode($result);
    }

    function xhrDeleteListing() {
        $id = (int) $_POST['id'];
        $this->db->delete('data', "id = '$id'");
    }

    public function pageList() {
        return $this->db->select('SELECT id, heading1, heading2, heading3, heading4, heading5 FROM system');
    }

    public function pageSingleList($id) {
        $sth = $this->db->prepare('SELECT id, heading1, heading2, heading3, heading4, heading5 FROM system WHERE id=' . $id . '');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }

    public function editSave($data) {
        $postData = array(
            'id' => $data['id'],
            'heading1' => $data['heading1'],
            'heading1' => $data['heading2'],
            'heading1' => $data['heading3'],
            'heading1' => $data['heading4'],
            'heading1' => $data['heading5']
        );

        $this->db->update('data', $postData, "`id` = {$data['id']}");
    }

}