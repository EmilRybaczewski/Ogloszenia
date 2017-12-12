<?php

/**
 * @property Kategoria_model Kategoria_model
 * @property Ogloszenia_model Ogloszenia_model
 * @property Parametry_ogloszenia_model Parametry_ogloszenia_model
 * @property Usery_model Usery_model
 * @property Wiadomosci_model Wiadomosci_model
 * @property Zdjecia_model Zdjecia_model
 */
class Wiadomosci extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('session');

        // ja to tam sie nie pier***, tylko laduje wszystkie modele 💩 XD
        $this->load->model('Kategoria_model');
        $this->load->model('Ogloszenia_model');
        $this->load->model('Parametry_ogloszenia_model');
        $this->load->model('Usery_model');
        $this->load->model('Wiadomosci_model');
        $this->load->model('Category_model');
        $this->load->model('Zdjecia_model');

        // trzeba tutaj dodac, ze tutaj moga wchodzic tyko zalogowani userzy
        // niezalogowanym w tyl zwrot i woon!!!
        // ...


    }

    /**
     * Wyswietla moje wiadomosci
     */
    public function moje($success = null)
    {
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;

        $id_usera = $this->session->userdata('Id_usera');
        $odebrane = $this->Wiadomosci_model->getReceivedMessages($id_usera);
        $wyslane = $this->Wiadomosci_model->getSendMessages($id_usera);

        $usery = $this->Usery_model->getAllUsersInArray();

        $query["odebrane"] = $odebrane;
        $query["wyslane"] = $wyslane;
        $query["usery"] = $usery;

        $this->load->view('templates/header', $arr);
        if ($success === "success") {
            $this->load->view('wiadomosci_success');
        }
        $this->load->view('wiadomosci_moje', $query);
        $this->load->view('templates/footer');
    }


    /**
     * Wyswietla formularz z wysylaniem wiadomosci
     */
    public function nowa_wiadomosc($id_usera_do_ktorego_wyslac = 0)
    {
        $katy = $this->Category_model->cat();
        $arr['katy'] = $katy;
        $usery = $this->Usery_model->getAllUsersInArray();

        // sprawdzamy, czy zostalo przeslane id. Jeśli nie, to musimy w widoku wyswietlic pole, gdzie mozna wybrac do kogo wyslac wiadomosc.
        // W przeciwnym wypadku ładujemy info o tym userze
        $pokaz_odbiorce = 0;
        $imie = '';
        if ($id_usera_do_ktorego_wyslac == 0) {
            $pokaz_odbiorce = true;
        } else {
            $pokaz_odbiorce = false;
            $imie = $usery[$id_usera_do_ktorego_wyslac];
        }


        $query["pokaz_odbiorce"] = $pokaz_odbiorce;
        $query["imie"] = $imie;
        $query["id_usera_do_ktorego_wyslac"] = $id_usera_do_ktorego_wyslac;
        $query["usery"] = $usery;

        $this->load->view('templates/header', $arr);
        $this->load->view('wiadomosc_wyslij', $query);
        $this->load->view('templates/footer');


        // z jakiejs listy wybrac usera, do ktorego wyslac wiadomosc
    }

    public function wyslij($id_usera)
    {
        $wiadomosc = $this->input->post('wiadomosc');
        if ($id_usera == 0) {
            $id_usera = $this->input->post('do_kogo');;
        }

        $adresat_id = $this->session->userdata('Id_usera');
        $this->Wiadomosci_model->addMessage($adresat_id, $id_usera, $wiadomosc);
        redirect('Wiadomosci/moje/success');
    }


}