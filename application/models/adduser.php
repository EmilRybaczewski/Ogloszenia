<?php


class Adduser extends CI_Model
{
    public function add($data)
    {
        $this->load->databse();

        $count = $this->db->insert($data);
        if($count>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}