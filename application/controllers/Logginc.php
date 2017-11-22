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

        $this->load->helper(array('url', 'form'));
        $this->load->model('Loggin_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run())
        {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($this->Loggin_model->login($username, $password))
            {
                $session_data = array (
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                $this->canintospace();
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

    public function canintospace()
    {
        if($this->session->userdata('username') != '')
        {
            echo '<h2>SAY hello'.$this->session->userdata('username').'</h2>';
            echo    anchor('Logginc/won', 'wyloguj');
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