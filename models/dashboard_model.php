<?php

class Dashboard_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function pageList() {
        return $this->db->select('SELECT id, titel, text, pagina FROM data');
    }

    public function pageSingleList($id) {
        $sth = $this->db->prepare('SELECT id, titel, text, pagina FROM data WHERE id = :id');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }

    public function editSave($data) {
        $postData = array(
            'titel' => $data['titel'],
            'text' => $data['text'],
            'pagina' => $data['pagina']
        );

        $this->db->update('data', $postData, "`id` = {$data['id']}");
    }

    public function create($data) {
        $this->db->insert('data', array(
            'titel' => $data['titel'],
            'text' => $data['text'],
            'pagina' => $data['pagina']
        ));
    }

    public function delete($id) {
        $this->db->delete('data', "id = '$id'");
    }

}