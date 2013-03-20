<?php

class User_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function userList() {
        return $this->db->select('SELECT id, login, role FROM users');
    }

    public function userSingleList($id) {
        $sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id = :id');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }

    public function create($data) {
        $this->db->insert('users', array(
            'login' => $data['login'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        ));
    }

    public function editSave($data) {
        $postData = array(
            'login' => $data['login'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        );

        $this->db->update('users', $postData, "`id` = {$data['id']}");
    }

    public function delete($id) {
        $result = $this->db->select('SELECT role FROM users WHERE id = :id', array(':id' => $id));

        if ($result[0]['role'] == 'owner')
            return false;

        $this->db->delete('users', "id = '$id'");
    }

}