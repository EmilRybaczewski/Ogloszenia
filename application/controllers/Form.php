<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[2]|is_unique[usery.Imie]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[usery.Email]');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
        }
        else
        {
            $this->adduser();
        }
    }

    public function adduser()
    {
        $Imie = $this->input->post('username');
        $Haslo = $this->input->post('password');
        $Email = $this->input->post('email');

        $data = array('Imie'=>$Imie, 'Haslo'=>$Haslo, 'Email'=>$Email);

        $this->load->model('Adduser');
        if($this->Adduser->add($data))
        {
            $this->load->view('formsuccess');
        }
        else
        {
            echo "nosz kuchwa";
        }
    }

}