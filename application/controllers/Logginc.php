<?php

/**
 * @property Kategoria_model Kategoria_model
 * @property Ogloszenia_model Ogloszenia_model
 * @property Parametry_ogloszenia_model Parametry_ogloszenia_model
 * @property Usery_model Usery_model
 * @property Wiadomosci_model Wiadomosci_model
 * @property Zdjecia_model Zdjecia_model
 */
class Logginc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
        $this->load->model('Loggin_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        // ja to tam sie nie pier***, tylko laduje wszystkie modele 💩 XD
        $this->load->model('Kategoria_model');
        $this->load->model('Ogloszenia_model');
        $this->load->model('Parametry_ogloszenia_model');
        $this->load->model('Usery_model');
        $this->load->model('Wiadomosci_model');
        $this->load->model('Zdjecia_model');

    }


    public function index()
    {
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Hasełko', 'required');

        if ($this->form_validation->run())
        {
            $login = $this->input->post('login');
            $password = $this->input->post('password');

            $login_user = $this->Usery_model->loginUser($login, $password);
            if ($login_user) {
                $session_data = array(
                    'username' => $login,
                    'Id_usera' => $login_user->Id_usera,
                    'Imie' => $login_user->Imie,
                    'Nazwisko' => $login_user->Nazwisko,
                    'Login' => $login_user->Login,
                    'Email' => $login_user->Email,
                );
                $this->session->set_userdata($session_data);
                redirect('Welcome/');
            }
            else
            {
                $this->session->set_flashdata('error', 'Invalid Username or Password');
                $this->load->view('templates/header');
                $this->load->view('login');
                $this->load->view('templates/footer');
            }
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('login');
            $this->load->view('templates/footer');
        }



    }



    public function won()
    {
        $this->session->unset_userdata('username');
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
}