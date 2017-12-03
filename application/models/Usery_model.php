<?php

/** 💩
 * Dzieki temu php storm podpowiada metody przy pisaniu $this->db->cos_tam
 * @property CI_DB_mysqli_driver $db
 */
class Usery_model extends CI_Model
{
    /**
     * Dodaje nowego usera, ALE nie sprawdza czy taki istnieje, czy coś
     * Zwraca true, jeśli się udało, false jeśli nie
     *
     * @param $data
     * @return bool
     */
    public function addUser($data)
    {
        $is_added = $this->db->insert('usery', $data);
        return $is_added;
    }

    /**
     * Pobiera wszystkich uzytkownikow i zwraca ich w array [ "id" => "imie nazwisko"]
     */
    public function getAllUsersInArray()
    {
        $query = $this->db->get('usery')->result();
        $result = [];
        foreach ($query as $user) {
            $imie_nazwisko = $user->Imie . " " . $user->Nazwisko;
            $result[$user->Id_usera] = $imie_nazwisko;
        }
        return $result;
    }

    /**
     * Sprawdza, czy użytkownik z takim loginem i hasłem znajduje się w bazie. Jeśli tak, zwraca TRUE, czyli że można go logować
     *  💩
     * @param $login
     * @param $haslo
     * @return bool - true, jeśli istenieje w bazie, false jeśli nie
     */
    public function loginUser($login, $haslo)
    {
        $this->db->where('login', $login);
        $this->db->where('Haslo', $haslo);
        $result = $this->db->get('usery')->first_row();
        return $result;
    }

    /**
     * Zwraca adres mail usera
     *
     * @param $id_usera
     * @return string - po prostu string z mailem
     */
    public function getEmail($id_usera)
    {
        $this->db->where('Id_usera', $id_usera);
        $this->db->select('Email');
        $query = $this->db->get('usery');
        return $query->first_row()->Email;
    }

    /**
     * Edytowanie maila usera $id_usera
     *
     * @param $id_usera
     * @param $email
     * @return bool - true, jesli sie udalo, false w przeciwnym wypadku
     */
    public function editEmail($id_usera, $email)
    {
        $array = [
            'Email' => $email,
        ];
        $this->db->where('Id_usera', $id_usera);
        $is_edited = $this->db->update("usery", $array);
        return $is_edited;
    }

    /**
     * Zwraca hasło usera
     *
     * @param $id_usera
     * @return string - string z hasłem, np "bleee"
     */
    public function getHaslo($id_usera)
    {
        $this->db->where('Id_usera', $id_usera);
        $this->db->select('Haslo');
        $query = $this->db->get('usery');
        return $query->first_row()->Haslo;
    }

    /**
     * Podajesz id usera i hasło. Zwraca true, jesli rzeczywiscie user ma takie haslo. W przeciwnym wypadku false
     *
     * @param $id_usera
     * @param $haslo
     * @return bool - true, jesli $haslo sie zgadza
     */
    public function checkPassword($id_usera, $haslo)
    {
        $this->db->where('Id_usera', $id_usera);
        $this->db->select('Haslo');
        $password_from_database = $this->db->get('usery')->first_row()->Haslo;
        return $password_from_database == $haslo;
    }

    /**  💩
     * Edytuje hasło usera
     *
     * @param $id_usera
     * @param $nowe_haslo
     * @return bool - true, jesli udalo sie zmienic haslio
     */
    public function editHaslo($id_usera, $nowe_haslo)
    {
        $array = [
            'Haslo' => $nowe_haslo,
        ];
        $this->db->where('Id_usera', $id_usera);
        $is_edited = $this->db->update("usery", $array);
        return $is_edited;
    }

    /**
     * Zwraca wszystkie informacje o userze
     *
     * @param $id_usera
     * @return \stdClass - obiekt (wpis) z tabeli Usery. Odwołujemy się do niego w taki sposób:
     *  $user->Nazwisko;
     *  $user->Login;
     */
    public function getUser($id_usera)
    {
        $this->db->where('Id_usera', $id_usera);
        $query = $this->db->get('usery');
        return $query->first_row();
    }

    /**
     * Edytuje całe info odnośnie usera. Przyjmuje tablicę $data z danymi, które chcemy edytowac
     *
     * @param $id_usera - którego chcemy edytowac
     * @param array $data - tablica z danymi, które chcemy edytować w formacie:
     *   [
     * 'Imie' => 'nowe',
     * 'Nazwisko' => 'jakies',
     * 'Login' => 'ble',
     * 'Haslo' => 'pass💩',
     * 'Email' => 'email@ble.pl'
     * ];
     *  Wypełniamy tylko te pola, które chcemy aby zostały edytowane!
     * @return bool - true, jesli sie udalo
     */
    public function editUser($id_usera, array $data)
    {
        $this->db->where('Id_usera', $id_usera);
        $is_edited = $this->db->update("usery", $data);
        return $is_edited;
    }

    /**
     * Usuwa usera o poda💩nym ID
     *
     * @param $id_usera
     * @return bool - true, jesli udalo sie usunąc
     */
    public function deleteUser($id_usera)
    {
        $is_deleted = $this->db->delete('usery', array('Id_usera' => $id_usera));
        return $is_deleted;
    }
}