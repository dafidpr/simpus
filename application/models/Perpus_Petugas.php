<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus_Petugas extends CI_Model {
  
	function inputpetugas(){
		
		$this->db->select("RIGHT (petugas.kode_petugas, 4) as kode_petugas", false);
		$this->db->order_by("kode_petugas", "DESC");
		$this->db->limit(1);
		$query = $this->db->get('petugas');
		
		if($query->num_rows() <> 0){
			$data = $query->row();
			$kode = intval($data->kode_petugas) + 1;
			
		} else {
			$kode = 1;
		}
		$kodeptgs = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodepetugas = "P-".$kodeptgs;
		
		$data = [
        'KODE_PETUGAS'  => $kodepetugas,
        'NAMA_PETUGAS'  => $this->input->post('nama', true),
        'JNS_KELAMIN'   => $this->input->post('kelamin', true),
        'TELP'          => $this->input->post('telp', true),
        'EMAIL'         => $this->input->post('email', true),
        'AGAMA'         => $this->input->post('agama', true),
        'NIP'           => $this->input->post('nip', true),
        'NIK'           => $this->input->post('nik', true),
        'TTL'           => $this->input->post('ttl', true),
        'JDWL_TUGAS'    => $this->input->post('jadwal', true),
        'ALAMAT'        => $this->input->post('alamat', true),
		'IS_ACTIVE'     => 1,
		'LEVEL'         => $this->input->post('level'),
		'PASSWORD'      => password_hash('123456', PASSWORD_DEFAULT)
        ];

       return $this->db->insert('petugas', $data);
	}
	public function editpetugas($id){
		$data = [
        'ID_PETUGAS'   => $this->input->post('idPetugas'),
		'KODE_PETUGAS' => $this->input->post('kodePetugas'),
        'NAMA_PETUGAS' => $this->input->post('nama', true),
        'JNS_KELAMIN'  => $this->input->post('kelamin', true),
        'TELP'         => $this->input->post('telp', true),
        'EMAIL'        => $this->input->post('email', true),
        'AGAMA'        => $this->input->post('agama', true),
        'NIP'          => $this->input->post('nip', true),
        'NIK'          => $this->input->post('nik', true),
        'TTL'          => $this->input->post('ttl', true),
        'JDWL_TUGAS'   => $this->input->post('jadwal', true),
        'ALAMAT'       => $this->input->post('alamat', true),
		'LEVEL'        => $this->input->post('level', true)
        ];
		$this->db->set($data);
		$this->db->where('id_petugas', $data['ID_PETUGAS']);
		$this->db->update('petugas');
	}
}