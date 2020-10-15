<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penarikan extends CI_Controller {
  public function __construct(){
	  
      parent:: __construct();
	  cek_login();
	  cek_user();
  }
  public function index(){
    $data = array (
	     'title'    => 'DATA PENARIKAN',
	     'user'     => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	); 
	 
    $this->load->view('templates/perpus_header', $data);
    $this->load->view('templates/perpus_sidebar', $data);
    $this->load->view('templates/perpus_topbar', $data);
    $this->load->view('penarikan/datapenarikan', $data);
    $this->load->view('templates/perpus_footer', $data);
  }
}