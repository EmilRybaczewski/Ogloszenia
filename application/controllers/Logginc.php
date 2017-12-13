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

        $this->load->model('Kategoria_model');
        $this->load->model('Ogloszenia_model');
        $this->load->model('Category_model');
        $this->load->model('Parametry_ogloszenia_model');
        $this->load->model('Usery_model');
        $this->load->model('Wiadomosci_model');
        $this->load->model('Zdjecia_model');
    }

    public function ero()
    {
        $this->load->view('login_error');
        $this->index();
    }

    public function index()
    {
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;
        $this->form_validation->set_rules('login', 'Login', 'trim|required|min_length[2]|is_unique[usery.Imie]');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run())
        {
            $login = $this->input->post('login');
            $haslo = $this->input->post('password');

            $login_user = $this->Usery_model->loginUser($login, $haslo);
            if ($login_user) {
                $session_data = array(
                    'username' => $login,
                    'Id_usera' => $login_user->Id_usera,
                    'Imie' => $login_user->Imie,
                    'Nazwisko' => $login_user->Nazwisko,
                    'Login' => $login_user->Login,
                    'Email' => $login_user->Email,
                    'telefon' => $login_user->telefon,
                );
                $this->session->set_userdata($session_data);
                redirect('Welcome/');
            }
            else
            {
                $this->session->set_flashdata('error', 'Invalid Username or Password');
                $this->load->view('templates/header',$arr);
                $this->load->view('login');
                $this->load->view('templates/footer');
            }
        }
        else
        {
            $this->load->view('templates/header', $arr);
            $this->load->view('login');
            $this->load->view('templates/footer');
        }



    }



    public function won()
    {
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('Id_usera');
        $this->session->unset_userdata('Imie');
        $this->session->unset_userdata('Nazwisko');
        $this->session->unset_userdata('Email');
        $this->session->unset_userdata('telefon');
        $this->session->unset_userdata('Login');
        $this->load->view('templates/header',$arr);
        $this->load->view('login');
        $this->load->view('templates/footer');
    }

    public function wedit(){
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;
        $this->load->view('templates/header',$arr);
        $this->load->view('userEdit');
        $this->load->view('templates/footer');

        $this->edit();
    }


    public function edit()
    {
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;
        $this->form_validation->set_rules('Imie', 'Imie', 'trim|min_length[2]');
        $this->form_validation->set_rules('Nazwisko', 'Nazwisko', 'trim|min_length[2]');
        $this->form_validation->set_rules('telefon', 'telefon', 'trim|min_length[2]');
        $this->form_validation->set_rules('Email', 'Email', 'trim|valid_email');


        if ($this->form_validation->run()) {
            $im = $this->input->post('Imie');
            $na = $this->input->post('Nazwisko');
            $te = $this->input->post('telefon');
            $em = $this->input->post('Email');
            $id_usera = $this->session->userdata('Id_usera');
           $data = array('Imie'=>$im, 'Nazwisko'=>$na, 'Email'=>$em, 'telefon'=>$te );
           if ($this->Usery_model->editUser($id_usera, $data) == TRUE){

               $this->load->view('templates/header', $arr);
               redirect('Welcome');
               $this->load->view('templates/footer');

           }
           else{
               $this->load->view('templates/header', $arr);
               $this->load->view('userEdit');
               $this->load->view('templates/footer');
           }
        }
    }

    public function usun()
    {
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;
        $id_usera = $this->session->userdata('Id_usera');

       if ($this->Usery_model->deleteUser($id_usera)==TRUE){

           $this->session->unset_userdata('username');
           $this->session->unset_userdata('Id_usera');
           $this->session->unset_userdata('Imie');
           $this->session->unset_userdata('Nazwisko');
           $this->session->unset_userdata('Email');
           $this->session->unset_userdata('telefon');
           $this->session->unset_userdata('Login');
           $this->load->view('templates/header', $arr);
           redirect('Welcome');
           $this->load->view('templates/footer');
       }
       else
       {
            echo "somfink no gejm";
       }

    }

    public function menago()
    {
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;
        $this->load->view('templates/header',$arr);
        $this->load->view('userMenagment');
        $this->load->view('templates/footer');
    }

}