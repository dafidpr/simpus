<!-- Modal Input Petugas -->
<div class="modal fade" id="inputWaliModal" tabindex="-1" role="dialog" aria-labelledby="inputWaliModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="inputWaliModal">Input Data Wali Kelas</h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url('guru/inputguru'); ?>" method="post" class="user">
                <div class="modal-body">
                     <div class="container-fluid">
                        <div class="form-group row  mb-3">
                            <div class="col-md-6">
                            <input type="text" name="nama" id="nama" class="form-control " placeholder="Nama Guru">
                            </div>
							 <div class="col-md-6">
                            <select name="kelamin"  class="form-control">
                                <option value="">Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                             </select>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-6">
                                <input type="text" name="telp" id="telp" class="form-control " placeholder="Telp">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" class="form-control " placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-6">
                            <select name="agama" class="form-control">
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
							<div class="col-md-6">
                                <input type="text" name="nip" id="nip" class="form-control " placeholder="NIP">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-6">
                                <input type="text" name="nik" id="nik" class="form-control " placeholder="NIK">
                            </div>
							<div class="col-md-6">
                                <input type="text" name="ttl" id="ttl" class="form-control " placeholder="Tempat, Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-12">
                            <label for="alamat">Alamat :</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="2"  class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                </div>
            </form>
          </div>
       </div>
    </div>
  </div>
 
<!-- End Modal Input Petugas -->