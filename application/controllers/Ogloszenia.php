<?php

/**
 * @property Kategoria_model Kategoria_model
 * @property Ogloszenia_model Ogloszenia_model
 * @property Parametry_ogloszenia_model Parametry_ogloszenia_model
 * @property Usery_model Usery_model
 * @property Wiadomosci_model Wiadomosci_model
 * @property Zdjecia_model Zdjecia_model
 */
class Ogloszenia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('html');
        // ja to tam sie nie pier***, tylko laduje wszystkie modele 💩 XD
        $this->load->model('Kategoria_model');
        $this->load->model('Ogloszenia_model');
        $this->load->model('Parametry_ogloszenia_model');
        $this->load->model('Usery_model');
        $this->load->model('Wiadomosci_model');
        $this->load->model('Zdjecia_model');
    }


    /**
     * Wyswietla wszystkie ogloszenia, które są aktywne
     */
    public function index()
    {
        $ogloszenia = $this->Ogloszenia_model->getAllAnnos();
        $query['ogloszenia']= $ogloszenia;
        debug($ogloszenia);
        /* todo tutaj:
         *  - stworzyc widok i go wyswietlic
         *  - przekazac do niego dane z $ogloszenia i je w tym widoku wyswietlic petla foreach
         *  - klikniecie na dane ogloszenie przenosi do strony OgloszeniaWyswietlanie/jedno/id
         *  - dodac przeszukiwanie ogloszen (filtrowanie)
         *  - dodac ewentualnie podzial ogloszen na strony
         */

        // przykladowy forach do wyswietlenia produktow, ktory powinien byc prawdopodobnie w widoku, w jakiejs tabelce, col-md-3, itp
            // itd, itd


        $this->load->view('templates/header');
        $this->load->view('ogloszenia', $query);
        $this->load->view('templates/footer');
    }

    /**
     * Wyświetla jedno ogloszenie (o podanym id)
     */
    public function jedno($id_ogloszenia)
    {

        $ogloszenie = $ogloszenia = $this->Ogloszenia_model->getAnnoById($id_ogloszenia);
        // jesli nie ma ogloszenia, to wyswietlamy info, ze nie ma
        if (!$ogloszenie) {
            return "Brak";
        }
        $parametry_ogloszenia = $this->Parametry_ogloszenia_model->getParameters($id_ogloszenia);
        $zdjecia_byid = $this->Zdjecia_model->getByIdOgloszenia($id_ogloszenia);
        $query['ogloszenie']=$ogloszenie;
        $query['parametry_ogloszenia']=$parametry_ogloszenia;
        $query['zdjecia_byid']=$zdjecia_byid;
        debug($ogloszenie);
        debug($parametry_ogloszenia);
        debug($zdjecia_byid);

        // przykładowe wyswietlanie danych ogloszenia - trzeba to przeniesc do widoku
       // echo $ogloszenie->Tytul; // itd
       // echo "<hr>";
        // przykladowe wyswietlenie parametrow ogloszenia, tez przeniesc do widoku
      //  foreach ($parametry_ogloszenia as $parametr) {
        //    echo "<b>{$parametr->Atrybut}</b> - {$parametr->Wartosc} <br>";
      //  }


        $this->load->view('templates/header');
        $this->load->view('jedno', $query);
        $this->load->view('templates/footer');

        /* todo tutaj:
         * - ładniejszya komunikat, jeśli nie ma ogłoszenia, jakiś layout, widok (zamiast samego return "brak");
         * - stworzyc widok do wyswietlani produktu oraz jego szczegolow
         */
    }

    /**
     * Dodawanie ogloszenia
     */
    public function dodaj()
    {
        $ogloszenia = $this->Ogloszenia_model->getAllAnnos();
        $kat = $this->Kategoria_model->getAllCategories();
        $query['ogloszenia']= $ogloszenia;
        $query['kat']= $kat;
        debug($kat);

        $this->load->library('form_validation');

        $this->form_validation->set_rules('Tytul', 'Tytul', 'required');
        $this->form_validation->set_rules('Opis', 'Opis', 'required');
        $this->form_validation->set_rules('Kategoria', 'Kategoria', 'required');
        $this->form_validation->set_rules('Cena', 'Cena', 'trim|required');
        $this->form_validation->set_rules('zdjecie', 'zdjecie', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('ogloszenieadd', $query);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->view('formsuccess');
        }

      //  $config['upload_path'] = './uploads/';
      //  $config['allowed_types'] = 'gif|jpg|png';
      // $config['max_size']     = '100';
      //  $config['max_width'] = '1024';
      //  $config['max_height'] = '768';

      //  $this->load->library('upload', $config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
     //   $this->upload->initialize($config);


        // todo - trzeba te dodawanie tutaj obmyslic, jakis formularz zapewne czy cóś

    }

    /**
     *
     */
    public function edytuj()
    {
        // todo - tak samo, obmyslic jak ma te edytowanie wygladac, jakis formularz, itp
    }


    /**
     * Wyswietla ogloszenia danego uzytkownika
     */
    public function mojeOgloszenia()
    {
        // todo
    }


    /**
     * Przedluza ogloszenie ($id) o miesiac
     */
    public function przedloz($id)
    {
        // todo
    }
    
}