<?php


class Logginc extends CI_Controller
{
    public function logg()
    {
        $logg = $this->loggin_model->get_user();
        $arr["logg"]=$logg;
        $this->load->view('login', $arr);

    }

}