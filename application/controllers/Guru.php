<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
  public function __construct(){	  
     parent:: __construct();
	 $this->load->model('MDGuru');
	 cek_login();
  }
  public function index(){	
	$data = array(	 
	 'title'        => 'DATA GURU',
	 'user'         => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	 );
	$this->load->view('templates/perpus_header', $data);
	$this->load->view('templates/perpus_sidebar', $data);
	$this->load->view('templates/perpus_topbar', $data);
	$this->load->view('guru/dataguru', $data);
	$this->load->view('templates/perpus_footer');
  }
  public function LoadData(){
	$sql = "select * from guru where is_active = 1";
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	    "aaData"  => $data
	);
	echo json_encode ($output_hasil);
  }
  public function inputguru(){
	$this->db->select("RIGHT (guru.kode_guru, 4) as kode_guru", false);
	$this->db->order_by("kode_guru", "DESC");
	$this->db->limit(1);
	$query = $this->db->get('guru');
	
	if($query->num_rows() <> 0){
		$data = $query->row();
		$kode = intval($data->kode_guru) + 1;
		
	} else {
		$kode = 1;
	}
	$kodegr = str_pad($kode, 4, "0", STR_PAD_LEFT);
	$kodeguru = "GR-".$kodegr;
	$data = array(
	  'KODE_GURU'  	 => $kodeguru,
	  'NAMA_GURU'  	 => $this->input->post('nama'),
	  'JNS_KELAMIN'  => $this->input->post('kelamin'),
	  'TELP'      	 => $this->input->post('telp'),
	  'EMAIL'     	 => $this->input->post('email'),
	  'AGAMA'     	 => $this->input->post('agama'),
	  'NIP'       	 => $this->input->post('nip'),
	  'NIK'       	 => $this->input->post('nik'),
	  'TTL'       	 => $this->input->post('ttl'),
	  'ALAMAT'    	 => $this->input->post('alamat'),
	  'IS_ACTIVE' 	 => 1
	);
   $this->model->Simpan('guru', $data);
   $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data guru berhasil ditambahkan! </div>');
   redirect('guru');
  }
  public function hapusguru($id=''){
	$sql = "update guru set is_active = 0 where id_guru = '$id'";
	$this->model->General($sql);
	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data guru berhasil dihapus! </div>');
    redirect('guru');
  }
  public function detilguru($id=''){
	 $sql = "select * from guru where id_guru = '$id'";
	 $data = $this->model->General($sql)->row_array();
	 echo json_encode($data);
  }
  public function editguru(){
	$this->MDGuru->editguru();
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data guru berhasil diubah! </div>');
    redirect('guru');
  }
}