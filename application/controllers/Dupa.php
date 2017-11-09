<?php

/**
 * Class Dupa
 * @property Dupsko_model Dupsko_model
 */
class Dupa extends CI_Controller
{


    public function __construct()
{
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Dupsko_model');
}

public function sraczka()
{
    $janusz = $this->Dupsko_model->get_dupsko();
    $knur = "ble";
    $arr["janusz"]=$janusz;
    $arr["knur"]=$knur;
    $this->load->view('nowy_widok', $arr);

}

}