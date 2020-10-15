<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {
	
   public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        cek_login();
    }
   public function index(){ 
     $data = array(	 
	 'title'        => 'DATA PENGEMBALIAN',
	 'user'         => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	 );
     $this->load->view('templates/perpus_header', $data);
     $this->load->view('templates/perpus_sidebar');
     $this->load->view('templates/perpus_topbar', $data);
     $this->load->view('perpustakaan/pengembalian/daftarpengembalian', $data);
     $this->load->view('templates/perpus_footer');
    
   }
   public function LoadData(){
	 $sql = "SELECT a.ID_PENGEMBALIAN, a.KODE_KEMBALI, b.NAMA_LNGKP, c.NAMA_PETUGAS, SUM(d.QTY_KEMBALI) AS QTY_KEMBALI,
			 d.TGL_PENGEMBALIAN FROM pengembalian a, siswa b, petugas c, detil_pengembalian d
			 WHERE b.ID_SISWA = a.ID_SISWA AND c.ID_PETUGAS = a.ID_PETUGAS 
			 AND a.ID_PENGEMBALIAN = d.ID_PENGEMBALIAN AND a.IS_ACTIVE = 1
			 GROUP BY a.ID_PENGEMBALIAN";
	 $data = $this->model->General($sql)->result_array();
	 $output_hasil = array(
	    "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
   }
   public function detailpengembalian($id=''){
	   
	$sql = "SELECT b.KODE_DETIL_KEMBALI, f.KODE_PINJAM, c.KODE_BUKU, c.JUDUL, d.NAMA_LNGKP, 
	        e.NAMA_PETUGAS, b.QTY_KEMBALI, b.DENDA FROM pengembalian a, detil_pengembalian b, 
			buku c, siswa d, petugas e, peminjaman f WHERE a.ID_PENGEMBALIAN = b.ID_PENGEMBALIAN 
			AND c.ID_BUKU = b.ID_BUKU AND d.ID_SISWA = a.ID_SISWA AND e.ID_PETUGAS = a.ID_PETUGAS 
			AND f.ID_PEMINJAMAN = a.ID_PEMINJAMAN AND a.ID_PENGEMBALIAN = '$id'";
	 
    $data = $this->model->General($sql)->result_array();
    echo json_encode($data); 
   }
   public function hapuspengembalian($id=''){
	 $sql = "update pengembalian set is_active = 0 where id_pengembalian = '$id'";
	 $this->model->General($sql);
	 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data pengembalian berhasil dihapus! </div>');
     redirect('pengembalian');
   }
   public function inputpengembalian($id=''){
	$sql = "INSERT INTO detil_pengembalian (ID_BUKU, QTY_KEMBALI, DENDA) 
			SELECT e.ID_BUKU AS ID_BUKU, a.QTY_PINJAM AS QTY_KEMBALI, TIMESTAMPDIFF(DAY, a.TGL_KEMBALI , CURRENT_DATE()) * c.denda AS DENDA
			FROM detil_peminjaman a, peminjaman b, denda c, siswa d, buku e
			WHERE b.ID_PEMINJAMAN = a.ID_PEMINJAMAN AND d.ID_SISWA = b.ID_SISWA AND e.ID_BUKU = a.ID_BUKU AND b.KODE_PINJAM = '$id' AND b.STATUS_PINJAM = 0";
	$this->model->General($sql);
	$this->db->select("RIGHT (detil_pengembalian.kode_detil_kembali, 5) as kode_detil_kembali", false);
	$this->db->order_by("kode_detil_kembali", "DESC");
	$this->db->limit(1);
	$query = $this->db->get("detil_pengembalian");
		
	If($query->num_rows() <> 0){
		$data = $query->row();
		$kode = intval($data->kode_detil_kembali) + 1;
	} else {
		$kode = 1;
	}
	$kodedp = str_pad($kode, 5, "0", STR_PAD_LEFT);
	$kodedetilp = "DKMB-".$kodedp;
	
	$sqlupdate = "UPDATE detil_pengembalian SET kode_detil_kembali = '$kodedetilp' WHERE kode_detil_kembali IS NULL";
	$this->model->General($sqlupdate);
	
	$sqlk = "UPDATE detil_pengembalian SET denda = 0 WHERE id_pengembalian IS NULL  AND denda < 0";
	$this->model->General($sqlk);
	
	$sqltotal = "SELECT SUM(denda) AS total FROM detil_pengembalian WHERE id_pengembalian IS NULL";
    $total = $this->model->General($sqltotal)->row_array();
	echo json_encode($total);
	
   }
   public function inputdatakembali(){
	$this->db->select("RIGHT (pengembalian.kode_kembali, 5) as kode_kembali", false);
	$this->db->order_by("kode_kembali", "DESC");
	$this->db->limit(1);
	$query = $this->db->get("pengembalian");
		
	If($query->num_rows() <> 0){
		$data = $query->row();
		$kode = intval($data->kode_kembali) + 1;
	} else {
		$kode = 1;
	}
	$kodekb = str_pad($kode, 5, "0", STR_PAD_LEFT);
	$kodekembali = "KMB-".$kodekb;
	$date = date('F');
	$bulan = "select id_bulan from bulan where bulan = '$date'";
	$id = implode($this->model->General($bulan)->row_array());
	
	$data = array(
	  'KODE_KEMBALI'    => $kodekembali,
	  'ID_PETUGAS'      => $this->input->post('idpetugaskembali'),
	  'ID_SISWA'        => $this->input->post('idsiswakembali'),
	  'ID_PEMINJAMAN'   => $this->input->post('idtransaksikembali'),
	  'ID_BULAN'        => $id,
	  'TAHUN'           => date('Y'),
	  'IS_ACTIVE'       => 1
	);
	$tgl = date('Y-m-d');
	$sql = "update detil_pengembalian set tgl_pengembalian = '$tgl' where tgl_pengembalian is null";
	$this->model->General($sql);
	$this->model->Simpan('pengembalian', $data);
	$id = "select max(id_pengembalian) as id_pengembalian from pengembalian";
	$dataid = $this->model->General($id)->row();
	$kode = intval($dataid->id_pengembalian);
	
	$sql = "update detil_pengembalian set id_pengembalian = '$kode' where id_pengembalian is null";
	$this->model->General($sql);
	$kodepinjam = $this->input->post('kodetransaksi');
	$status = "UPDATE peminjaman SET status_pinjam = 1 WHERE kode_pinjam = '$kodepinjam'";
	$this->model->General($status);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data pengembalian berhasil ditambahkan! </div>');
    redirect('pengembalian');
   }
   public function caridata($keyword=''){
	   
	$sql1 = "SELECT a.ID_PEMINJAMAN, a.KODE_PINJAM, b.ID_SISWA, b.KODE_SISWA, b.NAMA_LNGKP
			FROM peminjaman a, siswa b
			WHERE b.ID_SISWA = a.ID_SISWA AND a.KODE_PINJAM = '$keyword' AND a.STATUS_PINJAM = 0";

	$data = $this->model->General($sql1)->row_array();
	echo json_encode($data);

   }
   public function LoadDetil(){
	$sql = "SELECT a.ID_DETIL_PENGEMBALIAN,b.KODE_BUKU, b.JUDUL, a.DENDA 
			FROM detil_pengembalian a, buku b
			WHERE b.ID_BUKU = a.ID_BUKU AND a.ID_PENGEMBALIAN IS NULL";
			
	 $data = $this->model->General($sql)->result_array();
	 $output_hasil = array(
	    "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
   }
   public function hapushistori(){
	  $sql = "delete from detil_pengembalian where id_pengembalian is null";
	  $data = $this->model->General($sql);
	  $output_hasil = array(
	    "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
   }
   public function cetak(){
	    $pdf = new FPDF('P','mm',array(76, 60));
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d H:i:s');
        $pdf->AddPage(); 
		$pdf->SetFont('Courier','',6);
		$pdf->Cell(0,2,'BUKTI PENGEMBALIAN BUKU',0,1,'C');
		$pdf->Cell(0,4,'PERPUSTAKAAN',0,1,'C');
		
		$petugas = $this->input->post('kodepetugas');
		$sqlp = "select nama_petugas from petugas where kode_petugas = '$petugas'";
		$tugas = $this->model->General($sqlp)->row_array();
     
	    $sqlid = "select max(id_pengembalian) as id_pengembalian from pengembalian";
		$id = implode($this->model->General($sqlid)->row_array());
		
		$sql = "SELECT c.KODE_BUKU, a.TGL_PENGEMBALIAN, a.DENDA FROM detil_pengembalian a, pengembalian b, buku c
				WHERE c.ID_BUKU = a.ID_BUKU AND b.ID_PENGEMBALIAN = a.ID_PENGEMBALIAN AND a.ID_PENGEMBALIAN = '$id'";
		$data = $this->model->General($sql)->result_array();
		
		$sqlk = "SELECT b.kode_kembali FROM detil_pengembalian a, pengembalian b WHERE 
				b.id_pengembalian = a.id_pengembalian AND a.id_pengembalian  = '$id'";
		$kode = $this->model->General($sqlk)->row_array();
		$pdf->Cell(10,4,'',0,1);
		$pdf->SetFont('Courier','',4);
		$pdf->Cell(30,6,$tanggal,0,0, 'L');
		$pdf->Cell(10,3,'',0,1);
		$pdf->Cell(13,6,'NO. Transaksi:',0,0,'L');
		$pdf->Cell(11,6,$kode['kode_kembali'],0,0,'L');
		$pdf->Cell(8,6,'Petugas:',0,0, 'L');
		$pdf->Cell(10,6,$tugas['nama_petugas'],0,0, 'L');
		
		$pdf->SetFont('Courier','B',4);
		$pdf->Cell(10,6,'',0,1);
		$pdf->Cell(4,2.5,'NO.',0,0, 'C');
		$pdf->Cell(14,2.5,'KODE BUKU',0,0, 'C');
		$pdf->Cell(14,2.5,'TGL KEMBALI',0,0, 'C');
		$pdf->Cell(14,2.5,'DENDA',0,1, 'C');
		
		$i =1;
		foreach($data as $d){
			$pdf->SetFont('Courier','',4);
			$pdf->Cell(4,2.5,$i++.'.',0,0, 'C');
			$pdf->Cell(14,2.5,$d['KODE_BUKU'],0,0, 'C');
			$pdf->Cell(14,2.5,$d['TGL_PENGEMBALIAN'],0,0, 'C');
			$pdf->Cell(14,2.5,'Rp.'.$d['DENDA'],0,1, 'C');
		}
		$total   = $this->input->post('cetaktotal');
		$bayar   = $this->input->post('cetakbayar');
		$kembali = $this->input->post('cetakkembali');
		$pdf->Cell(10,4,'',0,1);
		$pdf->Cell(35,2,'Total :',0,0, 'R');
		$pdf->Cell(13,2,'Rp.'.$total,0,1, 'L');
		$pdf->Cell(35,2,'Bayar :',0,0, 'R');
		$pdf->Cell(13,2,'Rp.'.$bayar,0,1, 'L');
		$pdf->Cell(35,2,'Kembali:',0,0, 'R');
		$pdf->Cell(13,2,'Rp.'.$kembali,0,1, 'L');
		
		$pdf->Output('bukti_pengembalian.pdf', 'I');
   }
}