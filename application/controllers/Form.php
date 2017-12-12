<?php

class Form extends CI_Controller {




    public function index()
    {
        $this->load->model('Category_model');
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]|is_unique[usery.Imie]',
    array('required'=>'Nazwa uzytkownika jest wymagana', 'is_unique'=>'Nazwa uzytkownika juz istnieje','min_length'=>'Nazwa uzytkownika musi miec conajmniej 2 znaki' ));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]',
    array('required'=>'Haslo jest wymagane','min_length'=>'Haslo musi miec conajmniej 8 znakow' ));
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]',
    array('required'=>'Potwierdzenie hasla jest wymagane','matches'=>'Hasla musza sie zgadzac'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[usery.Email]',
    array('required'=>'Adres email jest wymagany','valid_email'=>'Adres email musi byc wazny','is_unique'=>'Adres email juz istnieje'));
        $this->form_validation->set_rules('imie', 'Imie', 'trim|required',
    array('required'=>'Imie jest wymagane'));
        $this->form_validation->set_rules('nazwisko', 'Nazwisko', 'trim|required',
    array('required'=>'Nazwisko jest wymagane'));
        $this->form_validation->set_rules('telefon', 'Telefon', 'trim|required|min_length[9]|max_length[9]',
    array('required'=>'Telefon jest wymagany','min_length'=>'Numer telefonu musi miec 9 cyfr'));

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header', $arr);
            $this->load->view('myform');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->adduser();
        }
    }

    public function adduser()
    {
        $this->load->model('Category_model');
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;

        $Imie = $this->input->post('username');
        $Haslo = $this->input->post('password');
        $Email = $this->input->post('email');

        $data = array('Imie'=>$Imie, 'Haslo'=>$Haslo, 'Email'=>$Email);

        $this->load->model('Adduser');
        if($this->Adduser->add($data))
        {
            $this->load->view('templates/header', $arr);
            $this->load->view('formsuccess');
            $this->load->view('templates/footer');
        }
        else
        {
            echo "drobne niepowodzenie";
        }
    }

}
