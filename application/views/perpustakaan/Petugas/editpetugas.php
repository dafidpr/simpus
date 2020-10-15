<!-- Edit Petugas Modal -->
<div class="modal fade" id="editPetugasModal" tabindex="-1" role="dialog" aria-labelledby="editPetugasModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="editPetugasModal">Edit Data Petugas</h4>
        </div>
        <div class="modal-body"> 
        <form action="<?php echo base_url('petugas/editpetugas')?>" method="post" class="user">
			<div class="modal-body">
				 <div class="container-fluid">
					  <div class="form-group row mb-3">
						<div class="col-md-6">
						<input type="hidden" name="idPetugas" id="editidPetugas" class="form-control" readonly>
						<input type="hidden" name="kodePetugas" id="editkodePetugas" class="form-control" readonly>
						   <label for="editnama">Nama Petugas :</label>
							<input type="text" name="nama" id="editnama" class="form-control">
						</div>
						<div class="col-md-6">
						  <label>Jenis Kelamin :</label>
						  <select name="kelamin"  class="form-control" id="editkelamin">
							<option value="">Jenis Kelamin</option>
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						  </select>
						</div>
					  </div>
					 <div class="form-group row  mb-3">
						<div class="col-md-6">
						   <label for="edittelp">Telp :</label>
						   <input type="text" name="telp" id="edittelp" class="form-control">
						</div>
						<div class="col-md-6">
						   <label>Agama :</label>
						   <select name="agama" class="form-control" id="editagama">
							<option value="">Agama *</option>
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katholik">Katholik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Kong Hu Chu">Kong Hu Chu</option>
							<option value="Kepercayaan kpd Tuhan YME">Kepercayaan kpd Tuhan YME</option>
							<option value="Tidak diisi">Tidak diisi</option>
							<option value="Lainnya">Lainnya</option>
						  </select>
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-6">
						   <label for="editemail">Email :</label>
							<input type="email" name="email" id="editemail" class="form-control">
						</div>
						<div class="col-md-6">
						   <label for="editnip">NIP :</label>
							<input type="text" name="nip" id="editnip" class="form-control">
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-6">
						   <label for="editnik">NIK :</label>
							<input type="text" name="nik" id="editnik" class="form-control">
						</div>
						<div class="col-md-6">
						   <label for="editttl">Tempat, Tanggal Lahir :</label>
						   <input type="text" name="ttl" id="editttl" class="form-control">
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-6">
							<label for="editjadwal">Jadwal Tugas :</label>
						  <input type="text" name="jadwal" id="editjadwal" class="form-control">
						</div>
						<div class="col-md-6">
						  <label for="editlevel">Level :</label>
						  <select name="level" class="form-control" id="editlevel">
							<option value="">Level</option>
							<option value="Admin">Admin</option>
							 <option value="Petugas Perpustakaan">Petugas Perpustakaan</option>
							 <option value="Petugas Tabungan">Petugas Tabungan</option>
						  </select>
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-12">
						<label for="editalamat">Alamat :</label>
						<textarea name="alamat" id="editalamat" cols="30" rows="2"  class="form-control"></textarea>
						</div>
					</div>
				</div>
			 </div>
			 <div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<button class="btn btn-primary" type="submit" name="edit" id="editpetugas">Simpan</button>
			</div>
            </form>
         </div>
       </div>
    </div>
  </div>
<!-- End Edit Petugas Modal -->