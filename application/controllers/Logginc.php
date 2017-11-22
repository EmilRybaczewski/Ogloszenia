<?php

/**
 * Class login
 * @property Loggin_model Loggin_model
 */
class Logginc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('Loggin_model');
    }


    public function index()
    {
        $login = $this->Loggin_model->get_user();
        $arr["login"]=$login;



        $this->load->view('templates/header');
        $this->load->view('login', $arr);
        $this->load->view('templates/footer');

    }

}