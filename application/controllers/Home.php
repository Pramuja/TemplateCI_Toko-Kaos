<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$data['konten']="home";
		$this->load->view('template', $data);
	}
}
?>