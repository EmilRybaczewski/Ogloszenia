<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Imie', 'trim|required|min_length[2]|is_unique[usery.Imie]');
        $this->form_validation->set_rules('password', 'Haslo', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[usery.Email]');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }

    public function adduser()
    {
        $Imie = $this->input->post('Imie');
        $Haslo = $this->input->post('Haslo');
        $Email = $this->input->post('Email');

        $data = array('Imie'=>$Imie, 'Haslo'=>$Haslo,);

        $this->load->model('Adduser');
        if($this->adduser()->add($data))
        {
            echo "JUPI";
        }
        else
        {
            echo "nosz kuchwa";
        }
    }

}