<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDGuru extends CI_Model {
    
   public function editguru(){
	  $data = array(
	      'ID_GURU'       => $this->input->post('idguru'),
	      'KODE_GURU'  	  => $this->input->post('kodeguru'),
		  'NAMA_GURU'  	  => $this->input->post('namaguru'),
		  'JNS_KELAMIN'   => $this->input->post('kelamin'),
		  'TELP'      	  => $this->input->post('telp'),
		  'EMAIL'     	  => $this->input->post('email'),
		  'AGAMA'     	  => $this->input->post('agama'),
		  'NIP'       	  => $this->input->post('nip'),
		  'NIK'       	  => $this->input->post('nik'),
		  'TTL'       	  => $this->input->post('ttl'),
		  'ALAMAT'    	  => $this->input->post('alamat'),
		  'IS_ACTIVE' 	  => 1
	  );
	  $this->db->set($data);
	  $this->db->where('ID_GURU', $data['ID_GURU']);
	  $this->db->update('guru');
   }
}
