<?php

class Category_model extends CI_Model
{


    public function cat()
    {
        $query = $this->db->get('kategoria');
        return $query->result();


    }

}