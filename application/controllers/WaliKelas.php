<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WaliKelas extends CI_Controller {
  public function __construct(){	  
     parent:: __construct();
	 cek_login();
  }
  public function index(){	
    $sqlguru =  "select * from guru where is_active = 1";
	$sqlajaran = "select thn_ajaran from tahun_ajaran where status_ta = 1 and is_active = 1";
	$sqlkelas = "select * from kelas where is_active = 1";
	$data = array(	 
	 'title'        => 'DATA WALI KELAS',
	 'user'         => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	 'walikelas'    => $this->model->General($sqlguru)->result_array(),
	 'ajaran'       => implode($this->model->General($sqlajaran)->row_array()),
	 'kelaswali'    => $this->model->General($sqlkelas)->result_array()
	 );
	$this->load->view('templates/perpus_header', $data);
	$this->load->view('templates/perpus_sidebar', $data);
	$this->load->view('templates/perpus_topbar', $data);
	$this->load->view('walikelas/datawalikelas', $data);
	$this->load->view('templates/perpus_footer');
  }
  public function LoadData(){
	$sql = "SELECT a.ID_WK, b.NIP, b.NAMA_GURU, b.JNS_KELAMIN, c.KELAS, d.THN_AJARAN
			FROM walikelas a, guru b, kelas c, tahun_ajaran d
			WHERE b.ID_GURU = a.ID_GURU AND c.ID_KELAS = a.ID_KELAS AND d.ID_TA = a.ID_TA AND a.IS_ACTIVE  = 1
			AND d.STATUS_TA = 1";
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	   "aaData"  => $data
	);
	echo json_encode($output_hasil);
  }
  public function inputwalikelas(){
	$sql = "select id_ta from tahun_ajaran where status_ta = 1 and is_active = 1";
	$ajaran = implode($this->model->General($sql)->row_array());
	$data = array(
	   'ID_GURU'   => $this->input->post('walikelas'),
	   'ID_KELAS'  => $this->input->post('kelaswali'),
	   'ID_TA'     => $ajaran,
	   'IS_ACTIVE' => 1
	);
	$this->model->Simpan('walikelas', $data);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data wali kelas baru berhasil ditambahkan! </div>');
	redirect('walikelas');
  }
  public function hapuswali($id=''){
	 $sql = "update walikelas set is_active = 0 where id_wk = '$id'";
	 $this->model->General($sql);
	 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data wali kelas berhasil dihapus! </div>');
	 redirect('walikelas');
  }
  public function editwalikelas(){
	  $sql = "select * from kelas where is_active = 1";
	  $data = $this->model->General($sql)->result_array();
	  echo json_encode($data);
  }
}