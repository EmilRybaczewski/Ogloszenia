<?php

/**
 * Dzieki temu php storm podpowiada metody przy pisaniu $this->db->cos_tam
 * @property CI_DB_mysqli_driver $db
 */
class Ogloszenia_model extends CI_Model
{
    /**
     * Zwraca wszystkie NIEWYGAŚNIĘTE ogloszenia
     *
     * @return array z danymi
     */
    public function getAllAnnos()
    {
        $now_timestamp = time();
        $this->db->where('Data_wyg >', $now_timestamp);
        return $this->db->get('ogloszenia')->result();
    }

    /**
     * Zwraca wszystkie ogłoszenia (WYGAŚNIĘTE I NIEWYGAŚNIĘTE)
     */
    public function getAllAnnosAndExpired()
    {
        return $this->db->get('ogloszenia')->result();
    }

    /**
     * Zwraca dane do jednego ogloszenia
     *
     * @param $id - id ogloszenia
     * @return array
     */
    public function getAnnoById($id)
    {
        $this->db->where('Id', $id);
        return $this->db->get('ogloszenia')->first_row();
    }


    /**
     * Zwraca wszystkie niewygaśnięte ogłoszenia z danej kategorii ($id_kategorii)
     *
     * @param $id_kategorii
     * @return array
     */
    public function getAnnoByIdKategorii($id_kategorii)
    {
        $now_timestamp = time();
        $this->db->where('Data_wyg >', $now_timestamp);
        $this->db->where('Id_kategorii', $id_kategorii);
        return $this->db->get('ogloszenia')->result();
    }

    /**
     * Zwraca wszystkie niewygaśniete ogłoszenia uzytkownika Id_usera
     */
    public function getAnnoByIdUsera($id_usera)
    {
        $now_timestamp = time();
        $this->db->where('Data_wyg >', $now_timestamp);
        $this->db->where('Id_usera', $id_usera);
        return $this->db->get('ogloszenia')->result();
    }

    /**
     * Zwraca wszystkie wygaśnięte ogłoszenia użytkownika Id_usera
     */
    public function getExpiredAnnosByIdUsera($id_usera)
    {
        $now_timestamp = time();
        $this->db->where('Data_wyg <', $now_timestamp);
        $this->db->where('Id_usera', $id_usera);
        return $this->db->get('ogloszenia')->result();
    }

    /**
     * Przedłuża ważność ogłoszenia, a dokładniej - ustawia nową datę `Data_wyg` (dzisiaj + $days)
     * Podajemy tylko id_obloszenia, opcjonalnie liczbę dni (drugiego parametru nie trzeba podawać)
     *
     * @param $id_ogloszenia
     * @param int $days - domyślnie 30 dni na ogłoszenie
     * @return bool - true, jesli sie udalo
     */
    public function setNewExpiredDate($id_ogloszenia, $days = 30)
    {
        $now_timestamp = time();
        $month_timestamp = $days * 24 * 3600;
        $expired_timestamp = $now_timestamp + $month_timestamp;

        $array = array(
            'Data_wyg' => $expired_timestamp,
        );

        $this->db->where('Id', $id_ogloszenia);
        $is_updated = $this->db->update('ogloszenia', $array);
        return $is_updated;
    }

    /**
     * Dodaje nowe ogłoszenie na podstawie danych z $array (musi być tablicą!)
     *
     * @param array $array - tablica z danymi ogłoszenia w formacie
     * [
     *  'Tytul' => 'noz zwierzecy',
     *  'Opis' => 'Niezly i ostry',
     * ]
     * @return int - id nowego ogloszenia, jesli udalo sie dodac. Jesli sie nie dodalo, to zwraca 0
     */
    public function addNewAnno(array $array)
    {
        $this->db->insert('ogloszenia', $array);
        $id = $this->db->insert_id();
        return $this->setNewExpiredDate($id);

    }

    /**
     * Edytuje ogłoszenie na podstawie $Id_ogloszenia. Wrzuca dane z array. W $array nie musi być wszystkich pól.
     * Wpisujemy tylko te, które chcemy podmienić. Pamiętaj! Nie podmień Id :D
     *
     * Przykladowy array:
     * [
     *  'Tytul' => 'noz zwierzecy',
     *  'Opis' => 'Niezly i ostry',
     * ]
     *
     * Zwraca true, jesli sie udało.
     */
    public function editAnno($id_ogloszenia, $array)
    {
        $this->db->where('Id', $id_ogloszenia);
        $is_updated = $this->db->update('ogloszenia', $array);
        return $is_updated;
    }

    /**
     * Przeszukuje i zwraca ogłoszenia (tytuły, opisy, ble ble, wszystko) pod kątem tekstu w $search_text
     * To ma być z założenia mądra funkcja, ale może nie wyjść ;)
     *
     * @param $search_text
     */
    public function searchAnnos($search_text)
    {
        // todo - dopisać, zmienić opis
    }


    /**
     * Usuwa ogłoszenie wraz z parametrami
     *
     * @param $id - id ogłoszenia do usuniecia
     * @return boolean - true, jesli sie dalo wszystko usunac
     */
    public function deleteAnno($id)
    {
        $this->db->delete('parametry_ogloszenia', ['Id_ogloszenia' => $id]);
        $is_deleted = $this->db->delete('ogloszenia', ['Id' => $id]);
        return $is_deleted;
    }

}