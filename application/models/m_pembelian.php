<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    Class M_pembelian extends CI_Model{
        public function get_pembelian() {
            $data_pembelian = $this->db->get('tb_datapembelian')->result();
            return $data_pembelian;
        }

        public function insert_pembelian() {
            $data_pembelian = array(
                'username' => $this->input->post('username'),
                'nama_barang' => $this->input->post('nama_barang'),
                'banyak_barang' => $this->input->post('banyak_barang'),
                'ukuran' => $this->input->post('ukuran'),
                'alamat' => $this->input->post('alamat'),
                'pembayaran' => $this->input->post('pembayaran'),
            );
            $sql_masuk = $this->db->insert('tb_datapembelian', $data_pembelian);
            return $sql_masuk;
        }
    }
?>