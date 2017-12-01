<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class category
 * @property Category_model Category_model
 */
class Welcome extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('Category_model');
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

        $query = $this->Category_model->cat();
        $arr['query'] = $query;

        $this->load->view('templates/header');
        $this->load->view('templates/category', $arr);
        $this->load->view('welcome_message');
        $this->load->view('templates/footer');




    }
}
