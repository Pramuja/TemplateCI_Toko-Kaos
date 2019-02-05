<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori_model extends CI_Model {

    public function get_kategori() {
        $data_kategori = $this->db->get('tb_kategori')->result();
        return $data_kategori;
    }
    public function masuk_db() {
        $data_kategori=array('nama_kategori' => $this->input->post('nama_kategori'));
        $sql_masuk=$this->db->insert('tb_kategori', $data_kategori);
        return $sql_masuk;
    }
}
?>