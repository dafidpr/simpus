<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
    public function __construct(){
        parent:: __construct();
        $this->load->library('form_validation');
    }
    public function index(){
       $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
       $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if( $this->form_validation->run() == false ){
            $data["title"] = "User Login";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
			
          }else {
            $this->_login();
		
          }
     }
    private function _login(){
	    $email = $this->input->post('email');
		$pswd = $this->input->post('password');
	
        $user = $this->db->get_where('petugas', ['EMAIL' => $email])->row_array();
		
        if($user){

        if ( password_verify($pswd, $user['PASSWORD']) ){
            $data = [
                'email'      => $user['EMAIL'],
				'level'      => $user['LEVEL']
            ];

            $this->session->set_userdata($data);
			 if($user['LEVEL'] == 'Admin'){
				  redirect('dashboard');
			 } else {
				  redirect('peminjaman');
			 }
	
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password! </div>');
            redirect('auth'); 
        }
        }else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered! </div>');
        redirect('auth');
       }
    }
	public function logout(){
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success"> You have been logged out! </div>');
        redirect('auth');
    }
	public function blocked(){
	   $data = array (
		  'user'    => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
		);
       $this->load->view('auth/blocked', $data);
	}
}