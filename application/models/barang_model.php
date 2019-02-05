<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang_model extends CI_Model {
public function get_barang()
{
$data_barang= $this->db->get('tb_databarang')->result();
return $data_barang;
}
public function insert_barang()
{
$data_barang=array(
'nama_barang' => $this->input->post('nama_barang'),
'harga' => $this->input->post('harga'),
'banyak_barang' => $this->input->post('banyak_barang'),
'id_kategori' => $this->input->post('id_kategori'),
);
$sql_masuk= $this->db->insert('tb_databarang', $data_barang);
return $sql_masuk;
}
}
?>