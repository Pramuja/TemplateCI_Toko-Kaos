<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_Model');
    }

    public function index()
    {
        if($this->session->userdata('logged_in') == TRUE){
            redirect(base_url('index.php/Home'));
        }else{
            $this->load->view('Login');
        }
		
    }
    
    public function FormLogin()
    {
        if($this->session->userdata('logged_in') == TRUE){
            redirect(base_url('index.php/Home'));
        }else{
            $this->load->view('Login');
        }
    }


    public function Login(){
        $this->form_validation->set_rules('Username','Username','trim|required');
        $this->form_validation->set_rules('Password','Password','trim|required');

        if($this->form_validation->run() == TRUE) {
            if($this->User_Model->CekUser() == TRUE) {
                redirect(base_url('index.php/Home'));
            }else{
                $this->session->set_flashdata('notif', "Username atau Password Salah");
                redirect(base_url('index.php/User/FormLogin'));
            } 
        }else {
                $this->session->set_flashdata('notif', validation_errors());
                redirect(base_url('index.php/User/FormLogin')); 
            }
        }


    public function Logout()
    {
        $this->session->sess_destroy();
        $this->load->view('Login');
    }
}