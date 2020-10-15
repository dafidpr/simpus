<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
  public function __construct(){	  
     parent:: __construct();
	 cek_login();
  }
  public function index(){	
	$data = array(	 
	 'title'        => 'DATA PEMINJAMAN',
	 'user'         => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	 );
	$this->load->view('templates/perpus_header', $data);
	$this->load->view('templates/perpus_sidebar', $data);
	$this->load->view('templates/perpus_topbar', $data);
	$this->load->view('perpustakaan/peminjaman/daftarpeminjaman', $data);
	$this->load->view('templates/perpus_footer');
  }
  public function LoadData(){
	$sql = "SELECT a.ID_PEMINJAMAN, a.KODE_PINJAM, b.NAMA_LNGKP, c.NAMA_PETUGAS, SUM(d.QTY_PINJAM) AS QTY_PINJAM,
	        d.TGL_KEMBALI FROM peminjaman a, siswa b, petugas c, detil_peminjaman d
			WHERE b.ID_SISWA = a.ID_SISWA AND c.ID_PETUGAS = a.ID_PETUGAS
			AND a.ID_PEMINJAMAN = d.ID_PEMINJAMAN AND a.IS_ACTIVE = 1 AND a.STATUS_PINJAM = 0
			GROUP BY a.ID_PEMINJAMAN";
			
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	  "aaData"  => $data
	);
	echo json_encode($output_hasil);
  }
  public function detailpeminjaman($id=''){
	$sql = "SELECT b.KODE_DETIL_PINJAM, a.KODE_PINJAM, c.KODE_BUKU, c.JUDUL, 
	        d.NAMA_LNGKP, e.NAMA_PETUGAS, b.QTY_PINJAM, b.TGL_PINJAM, b.TGL_KEMBALI
			FROM peminjaman a, detil_peminjaman b, buku c, siswa d, petugas e
			WHERE a.ID_PEMINJAMAN = b.ID_PEMINJAMAN AND c.ID_BUKU = b.ID_BUKU AND d.ID_SISWA = a.ID_SISWA
			AND  e.ID_PETUGAS = a.ID_PETUGAS AND  a.ID_PEMINJAMAN = '$id'";
			
	$data = $this->model->General($sql)->result_array();
	echo json_encode($data);
  }
  public function inputpeminjaman($kodebuku, $tglpinjam, $tglkembali){

	$this->db->select("RIGHT (detil_peminjaman.kode_detil_pinjam, 5) as kode_detil_pinjam", false);
	$this->db->order_by("kode_detil_pinjam", "DESC");
	$this->db->limit(1);
	$query = $this->db->get("detil_peminjaman");
		
	If($query->num_rows() <> 0){
		$data = $query->row();
		$kode = intval($data->kode_detil_pinjam) + 1;
	} else {
		$kode = 1;
	}
	$kodedpj = str_pad($kode, 5, "0", STR_PAD_LEFT);
	$kodedetilpinjam = "DPJM-".$kodedpj;
	$data = array(
	   'KODE_DETIL_PINJAM'    => $kodedetilpinjam,
	   'ID_BUKU'              => $kodebuku,
	   'QTY_PINJAM'           => '1',
	   'TGL_PINJAM'           => $tglpinjam,
	   'TGL_KEMBALI'          => $tglkembali
	);
	$this->model->Simpan('detil_peminjaman', $data);
  }
  public function loadDetil(){
	$sql = "SELECT a.ID_DETIL_PEMINJAMAN, a.ID_BUKU, b.KODE_BUKU, b.JUDUL, a.TGL_PINJAM, a.TGL_KEMBALI 
			FROM detil_peminjaman a, buku b 
			WHERE id_peminjaman IS NULL AND b.ID_BUKU = a.ID_BUKU";
	$data = $this->model->General($sql)->result_array();
	 $output_hasil = array(
	    "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
  }
  public function hapusdetil($id=''){
	 $sql = "delete from detil_peminjaman where id_detil_peminjaman = '$id'";
     $this->model->General($sql);
  }
  public function inputdatapinjam(){
	$this->db->select("RIGHT (peminjaman.kode_pinjam, 5) as kode_pinjam", false);
	$this->db->order_by("kode_pinjam", "DESC");
	$this->db->limit(1);
	$query = $this->db->get("peminjaman");
		
	If($query->num_rows() <> 0){
		$data = $query->row();
		$kode = intval($data->kode_pinjam) + 1;
	} else {
		$kode = 1;
	}
	$kodepj = str_pad($kode, 5, "0", STR_PAD_LEFT);
	$kodepinjam = "PJM-".$kodepj;
	
	$date = date('F');
	$bulan = "select id_bulan from bulan where bulan = '$date'";
	var_dump($bulan);
	$id = implode($this->model->General($bulan)->row_array());
	
	$data = array(
	  'KODE_PINJAM'    => $kodepinjam,
	  'ID_PETUGAS'     => $this->input->post('idpetugaspinjam'),
	  'ID_SISWA'       => $this->input->post('idsiswapinjam'),
	  'ID_BULAN'       => $id,
	  'TAHUN'          => date('Y'),
	  'IS_ACTIVE'      => 1,
	  'STATUS_PINJAM'  => 0
	);
	$this->model->Simpan('peminjaman', $data);
	$id = "select max(id_peminjaman) as id_peminjaman from peminjaman";
	$dataid = $this->model->General($id)->row();
	$kode = intval($dataid->id_peminjaman);
	
	$sql = "update detil_peminjaman set id_peminjaman = '$kode' where id_peminjaman is null";
	$this->model->General($sql);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data peminjaman berhasil ditambahkan! </div>');
    redirect('peminjaman');
  }
  public function hapuspeminjaman($id=''){
	$sql = "update peminjaman set is_active = 0 where id_peminjaman = '$id'";
	$this->model->General($sql);
	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data peminjaman berhasil dihapus! </div>');
    redirect('peminjaman');
  }
  public function hapushistori(){
	  $sql = "delete from detil_peminjaman where id_peminjaman is null";
	  $data = $this->model->General($sql);
	  $output_hasil = array(
	    "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
  }
  public function ambilDetilData($id=''){
	  $sql = "SELECT a.ID_DETIL_PEMINJAMAN, a.KODE_DETIL_PINJAM, a.ID_PEMINJAMAN, a.ID_BUKU, b.KODE_BUKU,
      	      b.JUDUL, a.TGL_PINJAM, a.TGL_KEMBALI FROM detil_peminjaman a, buku b 
			  WHERE id_peminjaman = '$id' AND b.ID_BUKU = a.ID_BUKU";
	   $data = $this->model->General($sql)->result_array();
	   $output_hasil = array(
	     "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
  }
  public function ambilDataPinjam($id=''){
	  $sql = "SELECT a.ID_DETIL_PEMINJAMAN, a.ID_BUKU, b.KODE_BUKU, b.JUDUL, a.TGL_PINJAM, a.TGL_KEMBALI 
			  FROM detil_peminjaman a, buku b 
			  WHERE id_detil_peminjaman = $id AND b.ID_BUKU = a.ID_BUKU ";
	  $data = $this->model->General($sql)->row_array();
	  echo json_encode($data);
  }
  public function editDataPinjam($iddetilpinjam, $idbuku, $tglpinjam, $tglkembali){
	 $data = array(
		'ID_BUKU'             => $idbuku,
		'TGL_PINJAM'          => $tglpinjam,
		'TGL_KEMBALI'         => $tglkembali,
	 );
	 $this->db->set($data);
	 $this->db->where('ID_DETIL_PEMINJAMAN', $iddetilpinjam);
	 $this->db->update('detil_peminjaman');
  }
  public function loadDataEdit($id=''){
	  $sql = "SELECT a.ID_DETIL_PEMINJAMAN, a.ID_BUKU, b.KODE_BUKU, b.JUDUL, a.TGL_PINJAM, a.TGL_KEMBALI 
			  FROM detil_peminjaman a, buku b, peminjaman c 
			  WHERE c.ID_PEMINJAMAN = '$id' AND b.ID_BUKU = a.ID_BUKU AND c.ID_PEMINJAMAN = a.ID_PEMINJAMAN";
	  $data = $this->model->General($sql)->result_array();
	  $output_hasil = array(
	     "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
  }
  public function detilpeminjam($id=''){
	  $sql = "SELECT a.ID_PEMINJAMAN, b.ID_SISWA, b.KODE_SISWA, b.NAMA_LNGKP
			  FROM peminjaman a, siswa b
			  WHERE a.ID_PEMINJAMAN = '$id' AND b.ID_SISWA = a.ID_SISWA";
	  $data = $this->model->General($sql)->row_array();
	  echo json_encode($data);
  }
  public function editdatapeminjaman(){
	  $data = array(
	    'ID_PEMINJAMAN' => $this->input->post('editidpeminjaman'),
		'ID_SISWA'      => $this->input->post('idsiswapinjam')
	  );
	  $this->db->set($data);
	  $this->db->where('ID_PEMINJAMAN', $data['ID_PEMINJAMAN']);
	  $this->db->update('peminjaman');
	  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data peminjaman berhasil diubah! </div>');
       redirect('peminjaman');
  }
  public function cetak(){
	    $pdf = new FPDF('P','mm',array(76, 60));
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d H:i:s');
        $pdf->AddPage(); 
		$pdf->SetFont('Courier','',6);
		$pdf->Cell(0,2,'BUKTI PEMINJAMAN BUKU',0,1,'C');
		$pdf->Cell(0,4,'PERPUSTAKAAN',0,1,'C');
		
		$petugas = $this->input->post('kodepetugas');
		$sqlp = "select nama_petugas from petugas where kode_petugas = '$petugas'";
		$tugas = $this->model->General($sqlp)->row_array();
     
	    $sqlid = "select max(id_peminjaman) as id_peminjaman from peminjaman";
		$id = implode($this->model->General($sqlid)->row_array());

		$sql = "SELECT b.KODE_BUKU, a.TGL_PINJAM, a.TGL_KEMBALI FROM detil_peminjaman a, buku b 
				WHERE id_peminjaman = '$id' AND b.ID_BUKU = a.ID_BUKU";
		$data = $this->model->General($sql)->result_array();
		
		$sqlk = "SELECT b.kode_pinjam FROM detil_peminjaman a, peminjaman b WHERE b.id_peminjaman = a.id_peminjaman
				AND a.id_peminjaman  = '$id'";
		$kode = $this->model->General($sqlk)->row_array();
		
		$pdf->Cell(10,4,'',0,1);
		$pdf->SetFont('Courier','',4);
		$pdf->Cell(30,6,$tanggal,0,0, 'L');
		$pdf->Cell(10,3,'',0,1);
		$pdf->Cell(13,6,'NO. Transaksi:',0,0,'L');
		$pdf->Cell(11,6,$kode['kode_pinjam'],0,0,'L');
		$pdf->Cell(8,6,'Petugas:',0,0, 'L');
		$pdf->Cell(10,6,$tugas['nama_petugas'],0,0, 'L');

		
		$pdf->SetFont('Courier','B',4);
		$pdf->Cell(10,6,'',0,1);
		$pdf->Cell(4,2,'NO.',0,0, 'C');
		$pdf->Cell(14,2,'KODE BUKU',0,0, 'C');
		$pdf->Cell(14,2,'TGL PINJAM',0,0, 'C');
		$pdf->Cell(14,2,'TGL TEMPO',0,1, 'C');
		
		$i =1;
		foreach($data as $d){
			$pdf->SetFont('Courier','',4);
			$pdf->Cell(4,2.5,$i++.'.',0,0, 'C');
			$pdf->Cell(14,2.5,$d['KODE_BUKU'],0,0, 'C');
			$pdf->Cell(14,2.5,$d['TGL_PINJAM'],0,0, 'C');
			$pdf->Cell(14,2.5,$d['TGL_KEMBALI'],0,1, 'C');
		}
		$pdf->Output('bukti_peminjaman.pdf', 'I');
  }
}