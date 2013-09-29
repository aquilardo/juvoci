<?php
class Iniciosession_model extends CI_Model
{
    public function insert_address($data) {
        $this->load->database();
        $this->db->insert("addresses", $data);
    }
}