<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class M_pembayaran extends CI_Model {
        public function get_pembayaran() {
            $data_pembelian = $this->db->get('tb_pembayaran')->result();
            return $data_pembelian;
        }

        public function masuk_db() {
            $data_pembelian = array(
                'metode' => $this->input->post('metode')
            );
            $sql_masuk = $this->db->insert('tb_pembayaran', $data_pembelian);
            return $sql_masuk;
        }
    }
?>