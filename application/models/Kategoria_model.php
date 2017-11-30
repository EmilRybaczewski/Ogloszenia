<?php

/**
 * Dzieki temu php storm podpowiada metody przy pisaniu $this->db->cos_tam
 * @property CI_DB_mysqli_driver $db
 */
class Kategoria_model extends CI_Model
{

    /**
     * Zwraca wszystkie kategorie
     *
     * @return array
     */
    public function getAllCategories()
    {
        return $this->db->get('kategoria')->result();
    }

    /**
     * Zwraca kategorię po ID
     *
     * @param $id_kategorii
     * @return array
     */
    public function getCategory($id_kategorii)
    {
        $this->db->where('Id_kategorii', $id_kategorii);
        return $this->db->get('kategoria')->result();
    }

    /**
     * Zwraca kategorię po Nazwie
     *
     * @param $nazwa_kategorii
     * @return array
     */
    public function getCategoryByNazwa($nazwa_kategorii)
    {
        $this->db->where('Nazwa', $nazwa_kategorii);
        return $this->db->get('kategoria')->result();
    }

    /**
     * Dodaje kategorię tylko wtedy, gdy taka nie istnieje
     * Gdu kategoria nie istaniała i udało się ją dodać, to zwraca true
     * Gdy kategoria istenieje, zwraca false
     *
     * @param $nazwa_kategorii
     * @return boolean
     */
    public function addCategory($nazwa_kategorii)
    {
        $kategoria = $this->db->get_where('kategoria', ['Nazwa' => $nazwa_kategorii])->result();
        // jak nie ma kategorii o takiej nazwie to dodajemy
        if (!$kategoria) {
            $data = [
                'Nazwa' => $nazwa_kategorii
            ];
            $this->db->insert('kategoria', $data);
            return true;
        }
        return false;
    }

    /**
     * Edytuje kategorie, o ile taka istnieje
     * Zwraca true, jesli udalo sie edytowac, albo false jesli niet
     *
     * @param $id_kategorii
     * @param $nowa_nazwa
     * @return boolean - true jeśli wszystko sie udalo
     */
    public function editCategory($id_kategorii, $nowa_nazwa)
    {
        $data = [
            'Nazwa' => $nowa_nazwa
        ];
        $this->db->where('Id_kategorii', $id_kategorii);
        $is_updated = $this->db->update('kategoria', $data);
        return $is_updated;
    }

    /**
     * Usuwa kategorię, a wszystkie jej ogłoszenia przepisuje do kategorii "Brak"
     *
     * @param $id_kategorii
     * @return boolean - true, jesli udala sie ta skomplikowana operacja
     */
    public function deleteCategory($id_kategorii)
    {
        // najpierw dodajemy kategorię BRAK (o ile nie istenieje)
        $this->addCategory("Brak");
        // pobieramy id kategorii brak
        $kategoria_brak = $this->getCategoryByNazwa("Brak");
        $brak_id = $kategoria_brak[0]->Id_kategorii;

        // tworzymy se array do edycji
        $array = [
            'Id_kategorii' => $brak_id
        ];

        // bierzemy ogloszenia z kategorii $id_kategorii i przypisujemy je do kategorii Brak
        $this->db->where('Id_kategorii', $id_kategorii);
        $is_updated = $this->db->update('ogloszenia', $array);
        return $is_updated;
    }

    /**
     * Zwraca wszystkie produkty z danej kategorii
     *
     * @param $id_kategorii
     * @return array
     */
    public function getProductsFromCategory($id_kategorii)
    {
        $this->db->where('Id_kategorii', $id_kategorii);
        return $this->db->get('ogloszenia')->result();
    }

}