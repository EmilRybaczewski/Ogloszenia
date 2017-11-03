<?php


class Dupsko_model extends CI_Model
{
    public $ID;
    public $Imie;

    function __construct()
    {
        parent::__construct();
    }

    public function get_dupsko()
    {
        $query = $this->db->get('Dupsko');
        return $query->result();
    }

}