<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
	
    public function General($sql){ 
	
       return $this->db->query($sql);
    }
	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}
}
  