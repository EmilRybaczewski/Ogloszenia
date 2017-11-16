<?php

class loggin_model extends CI_Model
{
    public function get_user()
    {
        $query = $this->db->get('usery');
        return $query->result();
    }
}