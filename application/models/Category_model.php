<?php

class Category_model extends CI_Model
{


    public function get_kategoria()
    {
        $this->load->database('ogloszenia');
        $query = $this->db->get('kategoria');
        return $query->result();
    }

}