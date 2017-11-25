<?php

class Wiadomosci_model extends CI_Model
{

    /**
     * Zwraca wszystkie wiadomosci wysłane przez danego użytkownika
     *
     * @param $id_usera
     * @return array - tablica z danymi
     */
    public function getSendMessages($id_usera)
    {
        $this->db->where('id_usera_wys', $id_usera);
        return $this->db->get('wiadomosci')->result();
    }

    /**
     * Zwraca wszystkie wiadomosci otrzymane przez tego usera. (Czyli wysłane przez innych do niego)
     *
     * @param $id_usera
     * @return array - tablica z danymi
     */
    public function getReceivedMessages($id_usera)
    {
        $this->db->where('id_usera_odb', $id_usera);
        return $this->db->get('wiadomosci')->result();
    }

    /**
     * Zwraca wszystkie wiadomosci (wyslane i otrzymane) przez tego uzytkownika
     *
     * @param $id_usera
     * @return array - tablica z danymi
     */
    public function getAllMessages($id_usera)
    {
        $this->db->where('id_usera_wys', $id_usera);
        $this->db->or_where('id_usera_odb', $id_usera);
        return $this->db->get('wiadomosci')->result();
    }


    /**
     * Dodaje wiadomosc
     *
     * @param $id_usera_wysylajacego
     * @param $id_usera_odbierajacego
     * @param $wiadomosc - tresc wiadomosci
     * @return boolean - true, jesli sie udalo zapisac
     */
    public function addMessage($id_usera_wysylajacego, $id_usera_odbierajacego, $wiadomosc)
    {
        $array = [
            'Id_usera_wys' => $id_usera_wysylajacego,
            'Id_usera_odb' => $id_usera_odbierajacego,
            'Wiadomosc' => $wiadomosc,
        ];
        $is_added = $this->db->insert('wiadomosci', $array);
        return $is_added;
    }

}