<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Kat2 extends CI_Controller {
	public function index() {
		$data['konten']="kat2";
		$this->load->view('template', $data);
	}
}
?>