<?php

class Zdjecia_model extends CI_Model
{

    /**
     * Pobiera $id_ogloszenia i zwraca wszystkie zdjecia do niego
     *
     * @param $id_ogloszenia
     * @return array
     */
    public function getByIdOgloszenia($id_ogloszenia)
    {
        $this->db->where('id_ogloszenia', $id_ogloszenia);
        return $this->db->get('zdjecia')->result();
    }

    /**
     * Dodaje zdjęcie do ogłoszenia. Drugi parametr to LINK do zdjecia, np "zdjecia/dupeczka.png"
     *
     * @param $id_ogloszenia - id ogloszenia do ktorego dodajemy zdjecie
     * @param $zdjecie - link (sciezka) do zdjecia, np. 'zdjecia/panienka123.jpg'
     * @return boolean - kiedy wszystko się uda, zwraca true. W przeciwnym wypadku false
     */
    public function addPhoto($id_ogloszenia, $zdjecie)
    {
        // tworzymy tablice z danymi do wstawienia
        $data_to_insert = [
            'Id_ogloszenia' => $id_ogloszenia,
            'zdjecie' => $zdjecie,
        ];
        $is_added = $this->db->insert('zdjecia', $data_to_insert);
        return $is_added;
    }

    /**
     * Podajemy id_ogloszenia i sciezke (url, link) do zdjecia i zdjecie jest usuwane
     *
     * @param $id_ogloszenia
     * @param $zdjecie
     * @return boolean - true jesli uda sie usunac
     */
    public function deletePhoto($id_ogloszenia, $zdjecie)
    {
        $this->db->where('Id_ogloszenia', $id_ogloszenia);
        $this->db->where('zdjecie', $zdjecie);
        $is_deleted = $this->db->delete('zdjecia');
        return $is_deleted;
    }

    /**
     * Jako pierwszy parametr przyjmuje Id_zdjecia (nie mylic z Id_ogloszenia!)
     * Usuwa zdjecie po id_zdjecia
     *
     * @param $id_zdjecia
     * @return boolean - true, jesli uda sie usunac
     */
    public function deletePhotoById($id_zdjecia)
    {
        $this->db->where('Id_zdjecia', $id_zdjecia);
        $is_deleted = $this->db->delete('zdjecia');

        return $is_deleted;
    }
}