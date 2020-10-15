<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanPinjam extends CI_Controller {
  public function __construct(){
	  
      parent:: __construct();
	  cek_login();
  }
  public function index(){	  
  $data = array(	 
	 'title'        => 'LAPORAN PEMINJAMAN',
	 'user'         => $this->db->get_where('petugas', ['EMAIL' => $this->session->userdata('email')])->row_array(),
	 );
	$this->load->view('templates/perpus_header', $data);
	$this->load->view('templates/perpus_sidebar', $data);
	$this->load->view('templates/perpus_topbar', $data);
	$this->load->view('perpustakaan/peminjaman/laporan', $data);
	$this->load->view('templates/perpus_footer');
 }
  public function LoadData($awal, $akhir){ 
	$sql = "SELECT a.ID_PEMINJAMAN, a.KODE_PINJAM, b.NAMA_LNGKP, c.NAMA_PETUGAS, SUM(d.QTY_PINJAM) AS QTY_PINJAM,
			d.TGL_PINJAM FROM peminjaman a, siswa b, petugas c, detil_peminjaman d
			WHERE b.ID_SISWA = a.ID_SISWA AND c.ID_PETUGAS = a.ID_PETUGAS AND a.STATUS_PINJAM = 0
			AND a.ID_PEMINJAMAN = d.ID_PEMINJAMAN AND a.IS_ACTIVE = 1 AND d.TGL_PINJAM BETWEEN '$awal' AND '$akhir'
			GROUP BY a.ID_PEMINJAMAN";
	$data = $this->model->General($sql)->result_array();
	$output_hasil = array(
	    "aaData"  => $data
	  );
	  echo json_encode($output_hasil);
  }
   public function Laporan(){
	    $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage(); 
        $pdf->SetFont('Times','B',18);
		$pdf->Image('./assets/img/smk.png',20,5,25,25);
		$pdf->Cell(25);
		$pdf->SetFont('Times','B',20);
		$pdf->Cell(0,5,'SMK MUHAMMADIYAH 6 ROGOJAMPI',0,1,'C');
		$pdf->Cell(25);
		$pdf->SetFont('Times','B',10);
		$pdf->Cell(0,5,'Website : www.smkmuh6rgj.sch.id / E-Mail : webmaster@smkmuh6rgj.sch.id',0,1,'C');
		$pdf->Cell(25);
		$pdf->SetFont('Times','B',10);
		$pdf->Cell(0,5,'Jln. KH. Hasyim Asyari No. 38 Rogojampi Telp. / Fax : (0333) 631793 Banyuwangi 68462',0,1,'C');
		
		$pdf->SetLineWidth(1);
		$pdf->Line(10,36,197,36);
		$pdf->SetLineWidth(0);
		$pdf->Line(10,37,197,37);
		
		$awal = $this->input->post('tglawal');
		$akhir = $this->input->post('tglakhir');
		
        $pdf->Cell(30,17,'',0,1);
		$pdf->SetFont('Times','B',14);
		$pdf->Cell(0,5,'LAPORAN PEMINJAMAN BUKU PERPUSTAKAAN',0,1,'C');
		$pdf->SetFont('Times','B',11);
		$pdf->Cell(0,7,'Periode : '.$awal.' s/d '.$akhir,0,1,'C');
		
        $pdf->SetFont('Times','',10);
		$sql = "SELECT a.ID_PEMINJAMAN, a.KODE_PINJAM, b.NAMA_LNGKP, c.NAMA_PETUGAS, 
				d.TGL_PINJAM, d.TGL_KEMBALI FROM peminjaman a, siswa b, petugas c, detil_peminjaman d
				WHERE b.ID_SISWA = a.ID_SISWA AND c.ID_PETUGAS = a.ID_PETUGAS AND a.STATUS_PINJAM = 0
				AND a.ID_PEMINJAMAN = d.ID_PEMINJAMAN AND a.IS_ACTIVE = 1 AND d.TGL_PINJAM BETWEEN '$awal' AND '$akhir' GROUP BY a.ID_PEMINJAMAN";
		$pinjam = $this->model->General($sql)->result_array();
		$sqlbuku = "SELECT a.ID_PEMINJAMAN,c.KODE_BUKU, c.JUDUL FROM peminjaman a, detil_peminjaman b, buku c
					WHERE  a.STATUS_PINJAM = 0 AND c.ID_BUKU = b.ID_BUKU
					AND a.ID_PEMINJAMAN = b.ID_PEMINJAMAN AND a.IS_ACTIVE = 1 AND b.TGL_PINJAM BETWEEN '$awal' AND '$akhir'";
		$buku = $this->model->General($sqlbuku)->result_array();
		foreach ($pinjam as $row){
			$pdf->Cell(30,17,'',0,1);
			$pdf->SetFont('Times','',10);
			$pdf->Cell(35,6,'KODE TRANSAKSI',0,0, 'L');
			$pdf->Cell(2,6,': ',0,0, 'C');
			$pdf->Cell(40,6,$row['KODE_PINJAM'],0,0, 'L');
			$pdf->Cell(32,6,'TANGGAL PINJAM',0,0, 'L');
			$pdf->Cell(3,6,': ',0,0, 'R');
			$pdf->Cell(30,6,$row['TGL_PINJAM'],0,0, 'L');
			$pdf->Cell(20,6,'PETUGAS',0,0, 'L');
			$pdf->Cell(2,6,': ',0,0, 'C');
			$pdf->Cell(20,6,$row['NAMA_PETUGAS'],0,1, 'L');
			$pdf->Cell(30,0,'',0,1);
			$pdf->Cell(35,6,'NAMA SISWA',0,0, 'L');
			$pdf->Cell(2,6,': ',0,0, 'C');
			$pdf->Cell(40,6,$row['NAMA_LNGKP'],0,0, 'L');
			$pdf->Cell(32,6,'TANGGAL TEMPO',0,0, 'L');
			$pdf->Cell(3,6,': ',0,0, 'R');
			$pdf->Cell(20,6,$row['TGL_KEMBALI'],0,1, 'L');
			$pdf->Cell(10,3,'',0,1);
			
			$pdf->SetFont('Times','B',10);
			$pdf->Cell(40,6,'KODE BUKU',1,0, 'C');
			$pdf->Cell(150,6,'JUDUL BUKU',1,1, 'C');
		foreach($buku as $b){
			if($row['ID_PEMINJAMAN'] == $b['ID_PEMINJAMAN']){
				$pdf->SetFont('Times','',10);
				$pdf->Cell(40,6,$b['KODE_BUKU'],1,0);
				$pdf->Cell(150,6,$b['JUDUL'],1,1);
			}
		
		   }
		 
        }
        $pdf->Output('laporan_peminjaman.pdf', 'I');
	}
}