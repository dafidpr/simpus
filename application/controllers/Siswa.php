<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	
  public function __construct(){
	  
      parent:: __construct();
      $this->load->model('Perpus_Siswa');
	  cek_login();
  }
  public function index(){
    $data = array (
		'title'  => 'DATA SISWA',
		'user'   => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	); 
	 
    $this->load->view('templates/perpus_header', $data);
    $this->load->view('templates/perpus_sidebar');
    $this->load->view('templates/perpus_topbar', $data);
    $this->load->view('perpustakaan/siswa/datasiswa', $data);
    $this->load->view('templates/perpus_footer');
  }
  public function LoadData(){
	$sql = "select * from siswa where is_active = 1 order by id_siswa desc";
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	    "aaData"  => $data
	);
	echo json_encode($output_hasil);
  }
  public function inputsiswa(){
	$this->Perpus_Siswa->inputsiswa();
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Siswa baru berhasil ditambahakan! </div>');
	redirect('siswa');
  }
  public function detailsiswa($id=''){
	$sql = "select * from siswa where id_siswa = '$id'";
	$data = $this->model->General($sql)->row_array();
	echo json_encode($data);
  }
  public function editsiswa($id=''){
	$data = $this->Perpus_Siswa->editsiswa($id);
	echo json_encode($data);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data siswa berhasil diubah! </div>');
    redirect('siswa');
  }
  public function hapussiswa(){
	$id = $this->input->post('hapusidsiswa');
	$sql = "update siswa set is_active = 0 where id_siswa = $id";
	$this->model->General($sql);
	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data siswa berhasil dihapus! </div>');
	redirect('siswa');
  }
  public function carisiswa($keyword=''){
	$sql = "select id_siswa, nama_lngkp from siswa where is_active = 1 and kode_siswa = '$keyword'";
	$data = $this->model->General($sql)->row_array();
	echo json_encode($data);
  }
}