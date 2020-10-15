<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus_Buku extends CI_Model {
    
    public function inputDataBuku(){
		
		$this->db->select("RIGHT (buku.kode_buku, 5) as kode_buku", false);
		$this->db->order_by("kode_buku", "DESC");
		$this->db->limit(1);
		$query = $this->db->get("buku");
		
		If($query->num_rows() <> 0){
			$data = $query->row();
			$kode = intval($data->kode_buku) + 1;
		} else {
			$kode = 1;
		}
		$kodebk = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodebuku = "BK-".$kodebk;
        $data = [
           
           'KODE_BUKU'     => $kodebuku,
           'JUDUL'         => $this->input->post('judul'),
           'TH_TERBIT'     => $this->input->post('thnTerbit'),
           'PENULIS'       => $this->input->post('penulis'),
           'PENERBIT'      => $this->input->post('penerbit'),
           'TMPT_TERBIT'   => $this->input->post('tmptTerbit'),
           'ISBN'          => $this->input->post('isbn'),
           'HALAMAN'       => $this->input->post('halaman'),
           'BERAT'         => $this->input->post('berat'),
           'CETAKAN'       => $this->input->post('cetakan'),
           'UKURAN'        => $this->input->post('ukuran'),
           'KATEGORI_BUKU' => $this->input->post('kategori'),
           'JML_BUKU'      => $this->input->post('jmlBuku'),
		   'IS_ACTIVE'     => 1

        ];

         return $this->db->insert('buku', $data);
    }
	public function editbuku($id){
		$data = [
           'ID_BUKU'       => $this->input->post('idbuku'),
           'KODE_BUKU'     => $this->input->post('kodebuku'),
           'JUDUL'         => $this->input->post('judul'),
           'TH_TERBIT'     => $this->input->post('thnTerbit'),
           'PENULIS'       => $this->input->post('penulis'),
           'PENERBIT'      => $this->input->post('penerbit'),
           'TMPT_TERBIT'   => $this->input->post('tmptTerbit'),
           'ISBN'          => $this->input->post('isbn'),
           'HALAMAN'       => $this->input->post('halaman'),
           'BERAT'         => $this->input->post('berat'),
           'CETAKAN'       => $this->input->post('cetakan'),
           'UKURAN'        => $this->input->post('ukuran'),
           'KATEGORI_BUKU' => $this->input->post('kategori'),
           'JML_BUKU'      => $this->input->post('jmlBuku'),
		   'IS_ACTIVE'     => 1
        ];
		$this->db->set($data);
		$this->db->where('id_buku', $data['ID_BUKU']);
	    $this->db->update('buku');
	}
}
  