<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kaos extends CI_Model {
    public function tampil()
    {
        $tm_kaos=$this->db
                      ->join('tb_kategori','tb_kategori.id_kategori=tb_databarang.id_kategori')
                      ->get('tb_databarang')
                      ->result();
        return $tm_kaos;
    }
    public function data_kategori()
    {
        return $this->db->get('tb_kategori')
                        ->result();
    }
    public function simpan_barang($file_cover)
    {
             $object = array(
                'id_barang' => $this->input->post('id_barang'), 
                'nama_barang' => $this->input->post('nama_barang'), 
                'banyak_barang' => $this->input->post('banyak_barang'), 
                'harga' => $this->input->post('harga'),
                'id_kategori' => $this->input->post('id_kategori')
             );
        return $this->db->insert('tb_databarang', $object);
    }
    public function detail($a)
    {
        $tm_kaos=$this->db
                      ->join('tb_kategori', 'tb_kategori.id_kategori=tb_databarang.id_kategori')
                      ->where('id_barang', $a)
                      ->get('tb_databarang')
                      ->row();
        return $tm_kaos;
    }
    public function edit_barang()
    {
        $data = array(
            'id_barang' => $this->input->post('id_barang'), 
            'nama_barang' => $this->input->post('nama_barang'), 
            'banyak_barang' => $this->input->post('banyak_barang'), 
            'harga' => $this->input->post('harga'),
            'id_kategori' => $this->input->post('id_kategori')
            );

        return $this->db->where('id_barang', $this->input->post('id_barang_lama'))
                        ->update('tb_databarang', $data);
    }
    

}

/* End of file M_buku.php */
/* Location: ./application/models/M_buku.php */