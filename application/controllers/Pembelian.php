<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Pembelian extends CI_Controller {
        public function index() {
            $data['konten']='v_pembelian';
            $this->load->model('m_pembelian');
            $data['data_pembelian']=$this->m_pembelian->get_pembelian();
            $this->load->view('template',$data);
        }

        public function simpan_pembelian() {
            $this->form_validation->set_rules('username', 'Username', 'trim|required', array('required' => 'Username harus diisi'));
            $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required', array('required' => 'Nama barang harus diisi'));
            $this->form_validation->set_rules('banyak_barang', 'Banyak Barang', 'trim|required', array('required' => 'Banyak barang harus diisi'));
            $this->form_validation->set_rules('ukuran', 'Ukuran', 'trim|required', array('required' => 'Ukuran harus diisi'));
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', array('required' => 'Alamat harus diisi'));
            $this->form_validation->set_rules('pembayaran', 'pembayaran', 'trim|required', array('required' => 'Metode pembayaran harus diisi'));
            if($this->form_validation->run() == TRUE) {
                $this->load->model('m_pembelian','pem');
                $masuk = $this->pem->insert_pembelian();
                if($masuk==TRUE) {
                    $this->session->set_flashdata('pesan', 'pembelian sukses');
                } else {
                    $this->session->set_flashdata('pesan', 'pembelian gagal');
                }
                redirect(base_url('index.php/Pembelian'),'refresh');
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/Pembelian'),'refresh');
            }
        }
    }
?>