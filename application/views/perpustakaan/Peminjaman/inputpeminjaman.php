<div class="modal fade" id="inputPeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="inputPeminjamanModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="inputPeminjamanModal">Transaksi Peminjaman</h4>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url('peminjaman/inputdatapinjam')?>" method="post" class="user" id="peminjaman">
		   <ul class="list-group list-group-flush">
			<li class="list-group-item">
			  <div class="form-group row  mb-3">
				<div class="col-md-5">
				  <input type="hidden" class="form-control" name="idsiswapinjam" id="idsiswa">
				<div class="input-group">
				 <label class="control-label">Kode Siswa :</label>
				 <div class="input-append">
				    <input type="text" class="form-control" name="kodesiswa" aria-label="Search" aria-describedby="basic-addon2" id="kodesiswa">
					 <span class="input-group-btn add-on">
					 <button class="btn btn-theme" onclick="carisiswa()" id="kodesiswa" type="button"><i class="fa fa-search"></i></button>
					</span>
				 </div>
			   </div>
			  </div>
			   <div class="col-md-3">
				  <input type="hidden" class="form-control" id="idpetugas" name="idpetugaspinjam" value="<?php echo $user['ID_PETUGAS']?>" readonly>
				   <label class="control-label">Kode Petugas :</label>
				  <input type="text" class="form-control" id="kodepetugas" name="kodepetugas" value="<?php echo $user['KODE_PETUGAS']?>" readonly>
			   </div>
			</div>
			 <div class="form-group row">
			   <div class="col-md-4">
			   <label class="control-label">Nama Siswa :</label>
				<input type="text" name="namasiswa" id="namasiswa" class="form-control" readonly>
				</div>
			 </div>
		  </li>
		  <li class="list-group-item">
			 <div class="form-group row  mb-3">
				<div class="col-md-4">
				<input type="hidden" class="form-control" name="idbuku" id="idbuku">
				<div class="input-group">
				  <label class="control-label">Kode Buku :</label>
				 <div class="input-append">
				     <input type="text" class="form-control" name="kodebuku" aria-label="Search" aria-describedby="basic-addon2" id="kodebuku">
					 <span class="input-group-btn add-on">
					 <button class="btn btn-theme" type="button" onclick="caribuku()" id="kodebuku"><i class="fa fa-search"></i></button>
					 </span>
				 </div>
			   </div>
			  </div>
			   <div class="col-md-7">
				  <label class="control-label">Judul Buku :</label>
				  <input type="text" class="form-control" id="judulbuku" name="judul" readonly>
			   </div>
			</div>
			  <div class="form-group row  mb-3 mt-3">
			   <div class="col-md-3">
				<label class="control-label">Tanggal Pinjam :</label>
				  <input type="text" class="form-control" id="tglpinjam" name="tglpinjam" readonly value="<?php echo date('Y-m-d')?>">
			   </div>
			  </div>
			  <div class="form-group row  mb-3 mt-3">
			   <div class="col-md-3">
			   <label class="control-label">Tanggal Kembali :</label>
				  <input type="date" class="form-control" id="tglkembali" name="tglkembali">
			   </div>
			   <div class="col-md-4 pull-right" style="padding-top: 30px; padding-left: 180px;">
				<button type="button" onclick="tambahpinjam()" class="btn btn-success btn-sm" id="btnDisable"><i class="fa fa-plus"></i> Tambah</button>
			   </div>
			  </div>
			</li>
			<li class="list-group-item">
			  <div class="table-responsive">
			  <table class="table table-bordered" id="listpinjam" width="100%">
				<thead class="table-secondary">
				  <tr>
					  <th>KODE BUKU</th>
					  <th>JUDUL BUKU</th>
					  <th>TGL PINJAM</th>
					  <th>TGL KEMBALI</th>
					  <th>OPSI</th>
				  </tr>
				</thead>
			  </table>
			 </div>
			</li>
		  </ul>
		<div class="modal-footer">
		 <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
		 <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="simpanData()">Simpan</button>
	   </div>
	</form>
   </div>
 </div>
</div>
</div>
