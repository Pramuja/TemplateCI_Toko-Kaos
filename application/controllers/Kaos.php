<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login')!=TRUE) {
			redirect('admin/login','refresh');
		}
		$this->load->model('m_kaos','kaos');
	}

	public function index()
	{
		$data['tampil_buku']=$this->Kaos->tampil();
		$data['kategori']=$this->Kaos->data_kategori();
		$data['konten']="v_kaos";
		$data['judul']="Daftar Kaos";
		$this->load->view('template', $data);
	}
	public function toko()
	{
		$data['tampil_barang']=$this->Kaos->tampil();
		$data['kategori']=$this->Kaos->data_kategori();
		$data['konten']="v_kaos";
		$data['judul']="Toko Kaos";
		$this->load->view('template', $data);
	}
	public function tambah()
	{
		$this->form_validation->set_rules('id_barang', 'id_barang', 'trim|required');
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required');
		$this->form_validation->set_rules('banyak_barang', 'banyak_barang', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
		if ($this->form_validation->run()==TRUE) {
				if ($this->Kaos->simpan_barang('')) {
					$this->session->set_flashdata('pesan', 'Sukses menambah');
				}else{
					$this->session->set_flashdata('pesan', 'Gagal menambah');
				}
				redirect('Kaos','refresh');
		}else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('Kaos','refresh');
		}
	}
	public function edit_barang($id)
	{
		$data=$this->Kaos->detail($id);
		echo json_encode($data);
	}
	public function barang_update()
	{
		if($this->input->post('edit')){
					$this->session->set_flashdata('pesan', 'Sukses update');
					redirect('Kaos');
				} else {
					$this->session->set_flashdata('pesan', 'Gagal update');
					redirect('buku');
				}
			} 

	public function hapus($id_barang='')
	{
		if ($this->Kaos->hapus_barang($id_barang)) {
			$this->session->set_flashdata('pesan', 'Sukses Hapus Barang');
			redirect('Kaos','refresh');
		}else{
			$this->session->set_flashdata('pesan', 'Gagal Hapus Barang');
			redirect('Kaos','refresh');
		}
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */