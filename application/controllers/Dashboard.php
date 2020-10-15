<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function __construct(){
	  
      parent:: __construct();
	  cek_login();
	  cek_user();
  }
  public function index(){
	$is_active = 'is_active = 1';
	$status    = 'status_pinjam = 0';
	$this->db->where($is_active);
	$this->db->where($status);
	$pinjam  = $this->db->get('peminjaman'); 
	$th      = date('Y');
	$blnpinjam = "SELECT bulan.bulan, peminjaman.kode_pinjam, IF(peminjaman.kode_pinjam IS NOT NULL, 
				  COUNT(peminjaman.id_bulan), 0) AS qty FROM bulan LEFT JOIN peminjaman ON bulan.id_bulan = peminjaman.id_bulan  GROUP BY bulan.id_bulan ASC";
				  
	$blnkembali = "SELECT bulan.bulan, IF(pengembalian.tahun IS NULL, YEAR(NOW()), YEAR(NOW())) AS tahun,  
				   pengembalian.kode_kembali, IF(pengembalian.kode_kembali IS NOT NULL, COUNT(pengembalian.id_bulan), 0) AS qty 
				   FROM bulan LEFT JOIN pengembalian ON bulan.id_bulan = pengembalian.id_bulan 
				   GROUP BY bulan.id_bulan ASC";
	
    $data = array (
	     'title'    => 'DASHBOARD',
	     'user'     => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	     'buku'     => $this->db->get_where('buku', $is_active)->num_rows(),
	     'petugas'  => $this->db->get_where('petugas', $is_active)->num_rows(),
	     'siswa'    => $this->db->get_where('siswa', $is_active)->num_rows(),
	     'pinjam'   => $pinjam->num_rows(),
	     'kembali'  => $this->db->get_where('pengembalian', $is_active)->num_rows(),
		 'blnpjm'   => $this->model->General($blnpinjam)->result(),
		 'blnk'     => $this->model->General($blnkembali)->result()
	); 
    $this->load->view('templates/perpus_header', $data);
    $this->load->view('templates/perpus_sidebar', $data);
    $this->load->view('templates/perpus_topbar', $data);
    $this->load->view('dashboard/index', $data);
    $this->load->view('templates/perpus_footer', $data);
  }
}