<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	
  public function __construct(){
	  
     parent:: __construct();
     $this->load->model('Perpus_Buku');
	 cek_login();
  }
  public function index() { 
	$data = array(
		'title'    => 'DATA BUKU',
		'user'     => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),	
	);

	$this->load->view('templates/perpus_header', $data);
	$this->load->view('templates/perpus_sidebar', $data);
	$this->load->view('templates/perpus_topbar');
	$this->load->view('perpustakaan/buku/databuku', $data);
	$this->load->view('templates/perpus_footer');
	
  }
  public function LoadData(){
	  $sql = "select * from buku where is_active = 1";
	  $data = $this->model->General($sql)->result_array();
	  $output_hasil = array(
	    "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
  }
  public function inputbuku() {
	  
    $this->Perpus_Buku->inputDataBuku();
    $this->session->set_flashdata('message', '<div class="alert alert-success"> Data buku berhasil ditambahakan! </div>');
     redirect('buku');
  }
  public function hapusbuku(){
	$id = $this->input->post('hapusidbuku');
	$sql ="update buku set is_active = 0 where id_buku = $id";
	$data = $this->model->General($sql);
	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data buku berhasil dihapus! </div>');
	redirect('buku');
  }
  public function detailbuku($id=''){
	  
	$sql = "select * from buku where id_buku = '$id' and is_active = 1";
	$data = $this->model->General($sql)->row_array();
	echo json_encode($data);
  }
  public function editbuku($id=''){
	  
	 $data = $this->Perpus_Buku->editbuku($id);
	 echo json_encode($data);
	 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data buku berhasil diubah! </div>');
	 redirect('buku');
  }
  public function caribuku($keyword=''){
	  
	  $sql = "select id_buku, judul from buku where is_active = 1 and kode_buku = '$keyword'";
	  $data = $this->model->General($sql)->row_array();
	  echo json_encode($data);
  }
}
  
  