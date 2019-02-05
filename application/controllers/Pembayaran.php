<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Pembayaran extends CI_Controller {
        public function index() {
            $data['konten']="v_pembayaran";
            $this->load->model('m_pembayaran');
            $data['data_pembayaran'] = $this->m_pembayaran->get_pembayaran();
            $this->load->view('template',$data, FALSE);
        }

        public function simpan_pembayaran() {
            $this->form_validation->set_rules('metode', 'Metode', 'trim|required', array('required' => 'metode harus diisi'));
            if($this->form_validation->run() == TRUE) {
                $this->load->model('m_pembayaran', 'pem');
                $masuk = $this->$pem->masuk_db();
                if($masuk==true) {
                    $this->session->set_flashdata('pesan', 'Sukses masuk');
                } else {
                    $this->session->set_flashdata('pesan', 'Gagal masuk');
                }
                redirect(base_url('index.php/Pembayaran'),'refresh');
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/Pembayaran','refresh'));
            }
        }
    }
?>