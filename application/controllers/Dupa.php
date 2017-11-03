<?php

class Dupa extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }

    public function sraczka()
    {
        $this->load->view('nowy_widok');
    }

}