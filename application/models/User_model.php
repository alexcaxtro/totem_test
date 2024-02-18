<?php

class User_model extends CI_Model { 
    function insertUser($data) {
        $this->db->insert("users", $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
                return false;
        }
        
    }
    
    function listUsers() {
        $query = $this->db->get("users");
        return $query->result();        
    }

    //function listUpdateUsers() {
    //    $query = $this->db->get('users');
    //    return $query->result_array();
    //}
    public function getUsers() {
        $query = $this->db->get("users");
        return $query->result();
    }


}