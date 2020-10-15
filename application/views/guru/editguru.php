<!-- Edit Petugas Modal -->
<div class="modal fade" id="editGuruModal" tabindex="-1" role="dialog" aria-labelledby="editGuruModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="editGuruModal">Edit Data Guru</h4>
        </div>
        <div class="modal-body"> 
        <form action="<?php echo base_url('guru/editguru')?>" method="post" class="user">
			<div class="modal-body">
				 <div class="container-fluid">
					  <div class="form-group row mb-3">
						<div class="col-md-6">
						<input type="hidden" name="idguru" id="idguru" class="form-control" readonly>
						<input type="hidden" name="kodeguru" id="kodeguru" class="form-control" readonly>
						   <label for="editnama">Nama Wali :</label>
							<input type="text" name="namaguru" id="editnamaguru" class="form-control">
						</div>
						<div class="col-md-6">
						  <label>Jenis Kelamin :</label>
						  <select name="kelamin"  class="form-control" id="editkelaminguru">
							<option value="">Jenis Kelamin</option>
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						  </select>
						</div>
					  </div>
					 <div class="form-group row  mb-3">
						<div class="col-md-6">
						   <label for="edittelp">Telp :</label>
						   <input type="text" name="telp" id="edittelpguru" class="form-control">
						</div>
						<div class="col-md-6">
						   <label>Agama :</label>
						   <select name="agama" class="form-control" id="editagamaguru">
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
							<input type="email" name="email" id="editemailguru" class="form-control">
						</div>
						<div class="col-md-6">
						   <label for="editnip">NIP :</label>
							<input type="text" name="nip" id="editnipguru" class="form-control">
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-6">
						   <label for="editnik">NIK :</label>
							<input type="text" name="nik" id="editnikguru" class="form-control">
						</div>
						<div class="col-md-6">
						   <label for="editttl">Tempat, Tanggal Lahir :</label>
						   <input type="text" name="ttl" id="editttlguru" class="form-control">
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-12">
						<label for="editalamat">Alamat :</label>
						<textarea name="alamat" id="editalamatguru" cols="30" rows="2"  class="form-control"></textarea>
						</div>
					</div>
				</div>
			 </div>
			 <div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<button class="btn btn-primary" type="submit" name="edit" id="editguru">Simpan</button>
			</div>
            </form>
         </div>
       </div>
    </div>
  </div>
<!-- End Edit Petugas Modal -->