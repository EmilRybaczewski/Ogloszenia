<?php

class Loggin_model extends CI_Model
{

    public $Imie;
    public $haslo;

    public function get_user()
    {
        $query = $this->db->get('usery');
        return $query->result();


    }

    public function login($username, $password)
    {
        $this->db->where('Imie', $username);
        $this->db->where('Haslo', $password);
        $query = $this->db->get('usery');
        return $query;
    }

}