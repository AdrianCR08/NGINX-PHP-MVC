<?php
class ContactosModel extends Model{

    public function getContactos(){
        $result = $this->db->query("SELECT * FROM contactos");
        return $result->fetchAll();
    }
}