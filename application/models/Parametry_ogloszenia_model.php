<?php

/**
 * Dzieki temu php storm podpowiada metody przy pisaniu $this->db->cos_tam
 * @property CI_DB_mysqli_driver $db
 */
class Parametry_ogloszenia_model extends CI_Model
{
    /**
     * Dodaje atrybut do ogłoszenia. Jeśli taki istnieje ($atrybut), to edytuje mu wartość
     *
     * @param $id_ogloszenia
     * @param $atrybut - atrybut, który zostanie stworzony (dodany). Jeśli taki istnieje, to jego wartosc ($wartość) zostanie edytowana
     * @param $wartosc - wartość danego atrybutu. Jeśli atrybut istnieje na danym ogłoszeniu, to wartość zostanie edytowana (podmieniona) na nową
     * @return bool - true, 💩 jesli udalo sie dodac lub edytowac. False w przeciwnym wypadku
     */
    public function addParameter($id_ogloszenia, $atrybut, $wartosc)
    {
        // sprawdzamy, czy dla takiego ogłoszenia istnieje już taki atrybut
        $this->db->where('Id_ogloszenia', $id_ogloszenia);
        $this->db->where('Atrybut', $atrybut);
        $query = $this->db->get('parametry_ogloszenia');

        // jeśli już jest taki atrybut dla danego ogloszenia, to edytujemy
        if ($query->num_rows() > 0) {
            $is_edited = $this->editParameter($id_ogloszenia, $atrybut, $wartosc);
            return $is_edited;
        } else {
            // w przeciwnym wypadku, gdy nie ma takiego atrybutu w ogloszeniu, to go dodajemy
            $array = [
                'Id_ogloszenia' => $id_ogloszenia,
                'Atrybut' => $atrybut,
                'Wartosc' => $wartosc,
            ];
            $is_added = $this->db->insert('parametry_ogloszenia', $array);
            return $is_added;
        }
    }

    /**
     * Zwraca wszystkie parametry dla danego ogłoszenia ($id_ogloszenia)
     *
     * @param $id_ogloszenia
     * @return array
     */
    public function getParameters($id_ogloszenia)
    {
        $this->db->where('Id_ogloszenia', $id_ogloszenia);
        return $this->db->get('parametry_ogloszenia')->result();
    }

    /**
     * Usuwa parametr z ogłoszenia 💩
     *
     * @param $id_ogloszenia
     * @param $atrybut - atrybut do usuniecia
     * @return bool
     */
    public function deleteParameter($id_ogloszenia, $atrybut)
    {
        $this->db->where('Id_ogloszenia', $id_ogloszenia);
        $this->db->where('Atrybut', $atrybut);
        $is_deleted = $this->db->delete('parametry_ogloszenia');
        return $is_deleted;
    }

    /**
     * Edytuje wartosc ($wartosc) atrybutu ($atrybut). Jeśli taki atrybut nie istenieje to nie robi nic
     *
     * @param $id_ogloszenia - id ogloszenia, na którym operujemy
     * @param $atrybut - atrybut, który chcemy edytować
     * @param $wartosc - wartosc danego atrybutu
     * @return bool 💩
     */
    public function editParameter($id_ogloszenia, $atrybut, $wartosc)
    {
        $array = [
            'Wartosc' => $wartosc,
        ];
        $this->db->where('Id_ogloszenia', $id_ogloszenia);
        $this->db->where('Atrybut', $atrybut);
        $is_edited = $this->db->update("parametry_ogloszenia", $array);
        return $is_edited;
    }

    /**
     * Usuwa wszystkie parametry z danego ogłoszenia
     *
     * @param $id_ogloszenia
     * @return bool
     */
    public function deleteAllParametersFromOgloszenie($id_ogloszenia)
    {
        $this->db->where('Id_ogloszenia', $id_ogloszenia);
        $is_deleted = $this->db->delete('parametry_ogloszenia');
        return $is_deleted;
    }

    /**
     * Konwertuje wyniki z funkcji getParameters() do poniższej postaci: (do obiektu)
     *   $wynik =  [
     *           "atrybut" => "wartosc",
     *           "kolor" => "💩",
     *           "materiał" => "gowniany",
     *         ];
     * , czyli możemy się odwoływać w taki sposób
     *    $wynik["atrybut"];
     *    $wynik["kolor"]
     *
     * @param array $data - tablica z danymi
     * @return array
     */
    public function toKeyValue(array $data)
    {
        $result = [];
        foreach ($data as $item) {
            $result[$item->Atrybut] = $item->Wartosc;
        }
        return $result;
    }
}