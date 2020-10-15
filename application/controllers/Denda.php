<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denda extends CI_Controller {
	
    public function __construct(){
       parent:: __construct();
	   cek_login();
	   cek_user();
    }
    public function index(){
     $data = array (
		'title'   => 'DATA DENDA',
		'user'    => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	); 
	 
     $this->load->view('templates/perpus_header', $data);
     $this->load->view('templates/perpus_sidebar', $data);
     $this->load->view('templates/perpus_topbar');
     $this->load->view('perpustakaan/denda/index', $data);
     $this->load->view('templates/perpus_footer');
	}
	public function LoadData(){
	  $sql = 'select * from denda where is_active = 1';
	  $data = $this->model->General($sql)->result_array();
	    $output_hasil = array(
	    "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
	}
	public function inputdenda(){
	  $denda = $this->input->post('denda');
	  $is_active = 1;
	  $sql = "insert into denda(id_denda, denda, is_active) values( '',$denda, $is_active)";
	  $this->model->General($sql);
	  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Denda berhasil ditambahkan! </div>');
      redirect('denda');
	}
	public function hapusdenda($id=''){
	  $sql = "update denda set is_active = 0 where id_denda = '$id'";
	  $this->model->General($sql);
	  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Denda berhasil dihapus! </div>');
      redirect('denda');
	}
	public function detaildenda($id=''){
	  $sql = "select * from denda where is_active = 1 and id_denda = '$id'";
	  $data =  $this->model->General($sql)->row_array();
	  echo json_encode($data);
	}
	public function editdenda(){
	  $id = $this->input->post('iddenda');
	  $denda = $this->input->post('datadenda');
	  $sql = "update denda set denda = '$denda' where id_denda = '$id'";
      $this->model->General($sql);
	  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Denda berhasil diubah! </div>');
      redirect('denda');
	}
}