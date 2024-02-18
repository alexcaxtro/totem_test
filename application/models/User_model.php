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
// funcion para actualizar los usuarios no se ha realizado pruebas pero la de arriba tambien pudiera funcionar
    public function getUsers() {
        $query = $this->db->get("users");
        return $query->result();
    }


}