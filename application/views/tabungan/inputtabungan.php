<div class="modal fade" id="inputTabunganModal" tabindex="-1" role="dialog" aria-labelledby="inputTabunganModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="inputTabunganModal">Tabungan Baru</h4>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url('tabungan/inputtabungan')?>" method="post" class="user" id="tabungan">
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
				  <input type="hidden" class="form-control" id="idpetugastabungan" name="idpetugastabungan" value="<?php echo $user['ID_PETUGAS']?>" readonly>
				   <label class="control-label">Kode Petugas :</label>
				  <input type="text" class="form-control" id="kdpetugastabungan" name="kdpetugastabungan" value="<?php echo $user['KODE_PETUGAS']?>" readonly>
			   </div>
			</div>
			 <div class="form-group row">
			   <div class="col-md-4">
			   <label class="control-label">Nama Siswa :</label>
				<input type="text" name="siswataungan" id="namasiswa" class="form-control" readonly>
				</div>
			 </div>
		  </li>
		  <li class="list-group-item">
			  <div class="form-group row  mb-3 mt-3">
			   <div class="col-md-3">
				<label class="control-label">Tanggal :</label>
				  <input type="text" class="form-control" id="tgltabung" name="tgltabung" readonly value="<?php echo date('Y-m-d')?>">
			   </div>
			   <div class="col-md-5">
			   <label class="control-label">Jumlah Setoran (Rp.) :</label>
				<input type="text" name="nominal" id="nominal" class="form-control">
				</div>
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
