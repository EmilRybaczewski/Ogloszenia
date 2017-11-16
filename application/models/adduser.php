<?php


class Adduser extends CI_Model
{
    public function add($data)
    {



        $count = $this->db->insert('usery', $data);
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