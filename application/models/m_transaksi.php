<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {
	 public function simpan_cart_db()
	 {
	 	for($i=0; $i<count($this->cart->contents()); $i++){
				
				$stok = $this->db->where('id_barang', $this->input->post('id_barang')[$i])
								 ->get('tb_databarang')
								 ->row()
								 ->banyak_barang;

				$qty = $this->input->post('qty')[$i];
				$sisa = $stok - $qty;
				$updatestok = array('banyak_barang' => $sisa);
				$this->db->where('id_barang', $this->input->post('id_barang')[$i])
						 ->update('tb_databarang', $updatestok);
		}
	 	
	 	$object=array(
	 	'nama_pembeli' => $this->input->post('nama_pembeli'),
	 	'id_user' => $this->input->post('id_user'),
	 	'tanggal_beli' => date('Y-m-d'),
	 	'total' => $this->input->post('total')
	 	);
	 	$this->db->insert('tb_transaksi', $object);
	 	$tm_nota=$this->db->order_by('id_transaksi', 'desc')
	 					  ->limit(1)
	 					  ->get('tb_transaksi')
	 					  ->row();
	 	$hasil=array();
	 	for ($i=0;$i<count($this->input->post('rowid')) ;$i++) { 
	 		$hasil[]=array(
	 		'id_transaksi' =>$tm_nota->id_transaksi,
	 		'id_barang' =>$this->input->post('id_barang')[$i],
	 		'jumlah'=>$this->input->post('qty')[$i]
	 		);
	 	}
	 	$proses=$this->db->insert_batch('nota', $hasil);
	 	if ($proses) {
	 		return $tm_nota->id_transaksi;
	 	} else{
	 		return 0;
	 	}
	 }
	 public function detail_nota($id_transaksi)
	 {
	 	return $this->db->where('id_transaksi', $id_transaksi)
	 				    ->get('tb_transaksi')
	 				    ->row();
	 }
	 public function detail_pembelian($id_transaksi)
	 {
	 	return $this->db->where('id_transaksi', $id_transaksi)
	 					->join('tb_databarang','tb_databarang.id_barang=nota.id_barang')
	 					->join('tb_kategori','tb_kategori.id_kategori=tb_databarang.id_kategori')
	 					->get('nota')
	 					->result();
	 }
	 public function check(){

	$cek=1;

		for($i=0;$i<count($this->cart->contents());$i++){
				
				$stok = $this->db->where('id_barang', $this->input->post('id_barang')[$i])
								->get('tb_databarang')
								->row()
								->banyak_barang;

				$qty = $this->input->post('qty')[$i];

				$sisa= $stok - $qty;

				if($sisa < 0){
					$oke = 0;
				}else{
					$oke = 1;
				}
				$cek = $oke * $cek;
		}

		return $cek;
		
	}
	public function cek($id_barang){

		$cek_stok = $this->db->where('id_barang', $id_buku)->get('tb_databarang')->row()->banyak_barang;

		if($cek_stok == 0 ){
			return 0;
		}else{
			return 1;
		}
	}
	

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */