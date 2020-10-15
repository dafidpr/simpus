<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TA extends CI_Controller {
  public function __construct(){	  
     parent:: __construct();
	 cek_login();
  }
  public function index(){	
	$data = array(	 
	 'title'        => 'DATA TAHUN AJARAN',
	 'user'         => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	 );
	$this->load->view('templates/perpus_header', $data);
	$this->load->view('templates/perpus_sidebar', $data);
	$this->load->view('templates/perpus_topbar', $data);
	$this->load->view('tahunajaran/dataajaran', $data);
	$this->load->view('templates/perpus_footer');
  }
  public function LoadData(){
	$sql = "SELECT id_ta, kode_ta, thn_ajaran, IF(status_ta < 1, 'Nonaktif', 'Aktif') AS status_ta FROM tahun_ajaran where is_active = 1";
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	   "aaData"  => $data
	);
	echo json_encode($output_hasil);
  }
  public function inputajaran(){
	    $this->db->select("RIGHT (tahun_ajaran.kode_ta, 5) as kode_ta", false);
		$this->db->order_by("kode_ta", "DESC");
		$this->db->limit(1);
		$query = $this->db->get("tahun_ajaran");
		
		If($query->num_rows() <> 0){
			$data = $query->row();
			$kode = intval($data->kode_ta) + 1;
		} else {
			$kode = 1;
		}
		$kodeta = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodeajaran = "TA-".$kodeta;
	$data = array(
	  'KODE_TA'     => $kodeajaran,
	  'THN_AJARAN'  => $this->input->post('ta'),
	  'IS_ACTIVE'   => 1
	);
	$this->model->Simpan('tahun_ajaran', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Tahun ajaran baru berhasil ditambahakan! </div>');
	redirect('ta');
  }
  public function detilajaran($id=''){
	$sql = "select * from tahun_ajaran where id_ta = '$id'";
	$data = $this->model->General($sql)->row_array();
	echo json_encode($data);
  }
  public function editajaran(){
	$id = $this->input->post('editidta');
	$ta = $this->input->post('editta');
	$sql = "update tahun_ajaran set thn_ajaran = '$ta' where id_ta = '$id'";
	$this->model->General($sql);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Tahun ajaran baru berhasil diubah! </div>');
	redirect('ta');
  }
  public function hapusajaran($id=''){
	$sql = "update tahun_ajaran set is_active= 0 where id_ta = '$id'";
	$this->model->General($sql);
	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Tahun ajaran baru berhasil dihapus! </div>');
	redirect('ta');
  }
  public function statusaktif($id=''){
	$sql = "update tahun_ajaran set status_ta = 1 where id_ta = '$id'";
	$this->model->General($sql);
  }
   public function statusnonaktif($id=''){
	$sql = "update tahun_ajaran set status_ta = 0 where id_ta = '$id'";
	$this->model->General($sql);
  }
}