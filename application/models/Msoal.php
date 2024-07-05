<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msoal extends CI_Model {

    public function insert_soal($data) {
        $this->db->insert('soal', $data);
        return $this->db->insert_id();
    }

    public function get_all_soal() {
        $this->db->select('*');
        $this->db->from('soal');
        return $this->db->get()->result();
    }

    public function delete_soal($id) {
        $this->db->where('id', $id);
        $this->db->delete('soal');
    }
}
?>
