<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Kat3 extends CI_Controller {
	public function index() {
		$data['konten']="kat3";
		$this->load->view('template', $data);
	}
}
?>