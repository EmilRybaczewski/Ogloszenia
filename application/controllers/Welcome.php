<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class category
 * @property Category_model Category_model
 * @property Ogloszenia_model Ogloszenia_model
 */
class Welcome extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('Category_model');
        $this->load->model('Ogloszenia_model');
        $this->load->helper('html');

    }


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;

        $this->load->view('templates/header', $arr);
        $this->load->view('welcome_message');
        $this->load->view('templates/footer');

    }
}
