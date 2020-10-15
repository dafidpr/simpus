<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
  public function __construct(){	  
     parent:: __construct();
	 cek_login();
  }
  public function index(){	
	$data = array(	 
	 'title'        => 'DATA KELAS',
	 'user'         => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	 );
	$this->load->view('templates/perpus_header', $data);
	$this->load->view('templates/perpus_sidebar', $data);
	$this->load->view('templates/perpus_topbar', $data);
	$this->load->view('kelas/datakelas', $data);
	$this->load->view('templates/perpus_footer');
  }
  public function inputkelas(){
	    $this->db->select("RIGHT (kelas.kode_kelas, 5) as kode_kelas", false);
		$this->db->order_by("kode_kelas", "DESC");
		$this->db->limit(1);
		$query = $this->db->get("kelas");
		
		If($query->num_rows() <> 0){
			$data = $query->row();
			$kode = intval($data->kode_kelas) + 1;
		} else {
			$kode = 1;
		}
		$kodeksl = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodekelas = "KLS-".$kodeksl;
	  $data = array(
	    'KODE_KELAS' => $kodekelas,
	    'KELAS'     => $this->input->post('kelas'),
		'IS_ACTIVE' => 1
	  );
	 $this->model->Simpan('kelas', $data);
 	 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data kelas berhasil ditambahkan! </div>');
     redirect('kelas');
  }
  public function LoadData(){
	 $sql = "select * from kelas where is_active = 1";
	 $data = $this->model->General($sql)->result_array();
	 $output_hasil= array(
	   "aaData" => $data
	 );
	 echo json_encode($output_hasil);
  }
  public function hapuskelas($id=''){
	 $sql = "update kelas set is_active = 0 where id_kelas = '$id'";
	 $this->model->General($sql);
	 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data kelas berhasil dihapus! </div>');
     redirect('kelas');
  }
  public function detailkelas($id=''){
	 $sql = "select id_kelas, kelas from kelas where id_kelas = '$id'";
	 $data = $this->model->General($sql)->row_array();
	 echo json_encode($data);
  }
  public function editkelas(){
	  $id = $this->input->post('editidkelas');
	  $kelas = $this->input->post('editkelas');
	  $sql = "update kelas set kelas = '$kelas' where id_kelas = '$id'";
	  $this->model->General($sql);
	  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data kelas berhasil diubah! </div>');
     redirect('kelas');
  }
 /* public function LoadDetilKelas($id=''){
	 $sql = "SELECT c.NISN, c.NAMA_LNGKP, c.JNS_KELAMIN, b.KELAS
		     FROM detil_kelas a, kelas b, siswa c 
			 WHERE c.ID_SISWA = a.ID_SISWA AND b.ID_KELAS = a.ID_KELAS AND b.ID_KELAS = '$id'";
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	   "aaData"  => $data
	);
	echo json_encode($output_hasil);
  }*/
}