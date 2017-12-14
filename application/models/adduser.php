<?php


class Adduser extends CI_Model
{
    public function add($data)
    {
        $count = $this->db->insert('usery', $data);
        return $count;
    }


    public function potw($id)
    {
        $this->db->set('Potwierdzenie',  TRUE);
        $this->db->where('Id_usera', $id);
        $potwierdzone = $this->db->update('usery');
        return $potwierdzone;
    }
}