<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaKelas extends CI_Controller {
  public function __construct(){	  
     parent:: __construct();
	 cek_login();
  }
  public function index(){
    $sqlkelas = "select * from kelas where is_active = 1";	  
	$sqlsiswa = "select * from siswa where is_active = 1 and id_siswa not in(select id_siswa from kelassiswa)";	
    $sqlajaran = "select thn_ajaran from tahun_ajaran where status_ta = 1 and is_active = 1";	
	
	$data = array(	 
	 'title'        => 'DATA KELAS & SISWA',
	 'user'         => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	 'kelas'        => $this->model->General($sqlkelas)->result_array(),
	 'siswa'        => $this->model->General($sqlsiswa)->result_array(),
	 'ajaran'       => implode( $this->model->General($sqlajaran)->row_array()),
	 );
	$this->load->view('templates/perpus_header', $data);
	$this->load->view('templates/perpus_sidebar', $data);
	$this->load->view('templates/perpus_topbar', $data);
	$this->load->view('siswakelas/kelassiswa', $data);
	$this->load->view('templates/perpus_footer');
  }
  public function LoadData(){
	$sql = "SELECT a.ID_KELAS_SISWA, b.NISN, b.NAMA_LNGKP, b.JNS_KELAMIN, c.KELAS, d.THN_AJARAN
			FROM kelassiswa a, siswa b, kelas c, tahun_ajaran d
			WHERE b.ID_SISWA = a.ID_SISWA AND c.ID_KELAS = a.ID_KELAS AND d.ID_TA = a.ID_TA AND a.IS_ACTIVE = 1
			AND d.STATUS_TA = 1";
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	   "aaData"  => $data
	);
	echo json_encode($output_hasil);
  }
  public function inputdata(){
	$sql = "select id_ta from tahun_ajaran where status_ta = 1 and is_active = 1";
	$ajaran = implode($this->model->General($sql)->row_array());
    $data = array(
	   'ID_SISWA'  => $this->input->post('siswa'),
	   'ID_KELAS'  => $this->input->post('kelas'),
	   'ID_TA'     => $ajaran,
	   'IS_ACTIVE' => 1,
	);
	$this->model->Simpan('kelassiswa', $data);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data baru berhasil ditambahkan! </div>');
	redirect('siswakelas');
  }
  public function hapusdata($id=''){
	$sql = "update kelassiswa set is_active = 0 where id_kelas_siswa = '$id'";
	$this->model->General($sql);
	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data berhasil dihapus! </div>');
	redirect('siswakelas');
  }
  public function updatedata($id=''){
	 $sqlkelas = "select * from kelas where is_active = 1";
     echo json_encode($this->model->General($sqlkelas)->result_array());

  }
}