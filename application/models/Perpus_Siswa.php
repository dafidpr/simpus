<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus_Siswa extends CI_Model {

    public function inputsiswa(){
		
		$this->db->select("RIGHT (siswa.kode_siswa, 5) as kode_siswa", false);
		$this->db->order_by("kode_siswa", "DESC");
		$this->db->limit(1);
		$query = $this->db->get("siswa");
		
		If($query->num_rows() <> 0){
			$data = $query->row();
			$kode = intval($data->kode_siswa) + 1;
		} else {
			$kode = 1;
		}
		$kodesw = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodesiswa = "S-".$kodesw;
		
        $data = [

           'KODE_SISWA'               => $kodesiswa,
		   'TH_DITERIMA'              => $this->input->post('thditerima'),
           'BDG_STUDI_KEAHLIAN'       => $this->input->post('bidangstudi'),
           'NAMA_LNGKP'               => $this->input->post('nama'),
           'JNS_KELAMIN'              => $this->input->post('kelamin'),
		   'NISN'                     => $this->input->post('nisn'),
           'NO_SERI_IJAZAH'           => $this->input->post('noijazah'),
           'NO_SERI_SKHUN'            => $this->input->post('noskhun'),
           'NO_UN'                    => $this->input->post('noun'),
           'NIK'                      => $this->input->post('nik'),
           'ASAL_SEKOLAH'             => $this->input->post('asalsekolah'),
           'TTL'                      => $this->input->post('ttl'),
           'AGAMA'                    => $this->input->post('agama'),
           'BERKEBUTUHAN_KHUSUS'      => $this->input->post('berkebutuhan'),
           'ALAMAT_LNGKP'             => $this->input->post('alamat'),
           'ALAT_TRANSPORTASI'        => $this->input->post('transportasi'),
           'TLP_RUMAH'                => $this->input->post('telprumah'),
           'EMAIL'                    => $this->input->post('email'),
           'NO_REGISTRASI_AKTA_LAHIR' => $this->input->post('registrasiakta'),
           'NAMA_AYAH'                => $this->input->post('namaayah'),
           'NIK_AYAH'                 => $this->input->post('nikayah'),
           'PEKERJAAN_AYAH'           => $this->input->post('pkrjayah'),
           'PENDIDIKAN_AYAH'          => $this->input->post('pndayah'),
           'PENGHASILAN_AYAH'         => $this->input->post('pngsayah'),
           'NAMA_IBU'                 => $this->input->post('namaibu'),
           'NIK_IBU'                  => $this->input->post('nikibu'),
           'PEKERJAAN_IBU'            => $this->input->post('pkrjibu'),
           'PENDIDIKAN_IBU'           => $this->input->post('pndibu'),
           'PENGHASILAN_IBU'          => $this->input->post('pngsibu'),
           'TB'                       => $this->input->post('tb'),
           'BB'                       => $this->input->post('bb'),
           'JML_SAUDARA'              => $this->input->post('jmlsaudara'),
           'GOL_DARAH'                => $this->input->post('goldarah'),
           'NAMA_WALI'                => $this->input->post('namawali'),
		   'IS_ACTIVE'                => 1
      ];

     return $this->db->insert('siswa', $data);
    }
	public function editsiswa($id){
		$data = [
           'ID_SISWA'                 => $this->input->post('idsiswa'),
		   'KODE_SISWA'               => $this->input->post('kodesiswa'),
		   'TH_DITERIMA'              => $this->input->post('thditerima'),
           'BDG_STUDI_KEAHLIAN'       => $this->input->post('bidangstudi'),
           'NAMA_LNGKP'               => $this->input->post('nama'),
           'JNS_KELAMIN'              => $this->input->post('kelamin'),
		   'NISN'                     => $this->input->post('nisn'),
           'NO_SERI_IJAZAH'           => $this->input->post('noijazah'),
           'NO_SERI_SKHUN'            => $this->input->post('noskhun'),
           'NO_UN'                    => $this->input->post('noun'),
           'NIK'                      => $this->input->post('nik'),
           'ASAL_SEKOLAH'             => $this->input->post('asalsekolah'),
           'TTL'                      => $this->input->post('ttl'),
           'AGAMA'                    => $this->input->post('agama'),
           'BERKEBUTUHAN_KHUSUS'      => $this->input->post('berkebutuhan'),
           'ALAMAT_LNGKP'             => $this->input->post('alamat'),
           'ALAT_TRANSPORTASI'        => $this->input->post('transportasi'),
           'TLP_RUMAH'                => $this->input->post('telprumah'),
           'EMAIL'                    => $this->input->post('email'),
           'NO_REGISTRASI_AKTA_LAHIR' => $this->input->post('registrasiakta'),
           'NAMA_AYAH'                => $this->input->post('namaayah'),
           'NIK_AYAH'                 => $this->input->post('nikayah'),
           'PEKERJAAN_AYAH'           => $this->input->post('pkrjayah'),
           'PENDIDIKAN_AYAH'          => $this->input->post('pndayah'),
           'PENGHASILAN_AYAH'         => $this->input->post('pngsayah'),
           'NAMA_IBU'                 => $this->input->post('namaibu'),
           'NIK_IBU'                  => $this->input->post('nikibu'),
           'PEKERJAAN_IBU'            => $this->input->post('pkrjibu'),
           'PENDIDIKAN_IBU'           => $this->input->post('pndibu'),
           'PENGHASILAN_IBU'          => $this->input->post('pngsibu'),
           'TB'                       => $this->input->post('tb'),
           'BB'                       => $this->input->post('bb'),
           'JML_SAUDARA'              => $this->input->post('jmlsaudara'),
           'GOL_DARAH'                => $this->input->post('goldarah'),
           'NAMA_WALI'                => $this->input->post('namawali'),
      ];
	  $this->db->set($data);
	  $this->db->where('id_siswa', $data['ID_SISWA']);
	  $this->db->update('siswa');
	}
}