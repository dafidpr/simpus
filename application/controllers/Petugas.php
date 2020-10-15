<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
	
  public function __construct(){
	  
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('Perpus_Petugas');
      cek_login();
  }
  public function index(){
    $data = array (
		'title'     => 'DATA PETUGAS',
		'user'      => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	);
	
    $this->load->view('templates/perpus_header', $data);
    $this->load->view('templates/perpus_sidebar', $data);
    $this->load->view('templates/perpus_topbar', $data);
    $this->load->view('perpustakaan/petugas/datapetugas', $data);
    $this->load->view('templates/perpus_footer');
   }
  public function LoadData(){
	$sql = "select * from petugas where is_active = 1";
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	   "aaData"  => $data
	);
	echo json_encode($output_hasil);
   }
  public function inputpetugas() {
    $this->Perpus_Petugas->inputpetugas();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Petugas baru ditambahkan! </div>');
    redirect('petugas');
   }
  public function hapusPetugas(){ 
   $id = $this->input->post('hapusidpetugas');
    $sql = "update petugas set is_active = 0 where id_petugas = $id";
	$this->model->General($sql);
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data berhasil dihapus! </div>');
    redirect('petugas');
   } 
  public function detailpetugas($id=''){
	$sql = "select * from petugas where id_petugas = '$id'";
	$data = $this->model->General($sql)->row_array();
	echo json_encode($data);
   }
  public function editpetugas($id=''){
	$data = $this->Perpus_Petugas->editpetugas($id);
    echo json_encode($data);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil diubah! </div>');
    redirect('petugas');
   }
  public function ubahpassword(){
	$data = array(
	   'title'    => 'UPDATE PASSWORD',
	   'user'     => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	);
	$this->form_validation->set_rules('password', 'Current Password', 'required|trim');
	$this->form_validation->set_rules('newpassword', 'New Password', 'required|trim|min_length[6]|matches[repeatpassword]');
	$this->form_validation->set_rules('repeatpassword', 'Confirm Password', 'required|trim|min_length[6]|matches[newpassword]');
	
	if($this->form_validation->run() == false){
        $this->load->view('templates/perpus_header', $data);
        $this->load->view('templates/perpus_sidebar');
        $this->load->view('templates/perpus_topbar', $data);
        $this->load->view('perpustakaan/petugas/updatepassword', $data);
        $this->load->view('templates/perpus_footer');
	} else {
		$password = $this->input->post('password');
		$new_password = $this->input->post('newpassword');
		
		if(!password_verify($password, $data['user']['PASSWORD'])){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
            redirect('petugas/ubahpassword');
		} else {
			if($password == $new_password){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                redirect('petugas/ubahpassword');
			} else {
				$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
				$this->db->set('PASSWORD', $password_hash);
				$this->db->where('EMAIL', $this->session->userdata('email'));
				$this->db->update('petugas');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                redirect('petugas/ubahpassword');
			}
		}
	}

   }
}