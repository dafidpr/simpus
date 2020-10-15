<!-- Modal Input Petugas -->
<div class="modal fade" id="inputBukuModal" tabindex="-1" role="dialog" aria-labelledby="inputBukuModal" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
	<div class="modal-header bg-primary">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title text-white" id="inputBukuModal">Input Data Buku</h4>
	</div>
	<div class="modal-body">
	<form action="<?php echo base_url('buku/inputbuku'); ?>" method="post" class="user">
		<div class="modal-body">
			 <div class="container-fluid">
				<div class="form-group row  mb-3">
					<div class="col-md-12">
					 <input type="text" name="judul" id="judul" class="form-control " placeholder=" Judul Buku">
					</div>
				</div>
				<div class="form-group row  mb-3">
					<div class="col-md-6">
						<input type="text" name="thnTerbit" id="thnTerbit" class="form-control " placeholder="Tahun Terbit">
					</div>
					<div class="col-md-6">
						<input type="text" name="penulis" id="penulis" class="form-control " placeholder="Penulis">
					</div>
				</div>
				<div class="form-group row  mb-3">
					<div class="col-md-6">
						<input type="text" name="penerbit" id="penerbit" class="form-control " placeholder="Penerbit">
					</div>
					<div class="col-md-6">
						<input type="text" name="tmptTerbit" id="tmptTerbit" class="form-control " placeholder="Tempat Terbit">
					</div>
				</div>
				<div class="form-group row  mb-3">
					<div class="col-md-4">
						<input type="text" name="isbn" id="isbn" class="form-control " placeholder="ISBN">
					</div>
					<div class="col-md-4">
						<input type="text" name="halaman" id="halaman" class="form-control " placeholder="Halaman">
					</div>
					<div class="col-md-4">
						<input type="text" name="berat" id="berat" class="form-control " placeholder="Berat (gr)">
					</div>
				</div>
				<div class="form-group row  mb-3">
				  <div class="col-md-4">
					 <input type="text" name="cetakan" id="cetakan" class="form-control " placeholder="Cetakan">
				  </div>
				  <div class="col-md-4">
					 <input type="text" name="ukuran" id="ukuran" class="form-control " placeholder="Ukuran (cm)">
					</div>
				 <div class="col-md-4">
						<input type="text" name="jmlBuku" id="jmlBuku" class="form-control " placeholder="Jumlah Buku">
					</div>
				</div>
				<div class="form-group row mb-3">
				  <div class="col-md-12">
					 <select name="kategori"  class="form-control">
						<option value="">Pilih Kategori</option>
						<option value="Umum">Umum</option>
						<option value="Novel">Novel</option>
						<option value="Nomik">Nomik</option>
						<option value="Filsafat dan Psikologi">Filsafat dan Psikologi</option>
						<option value="Agama">Agama</option>
						<option value="Sejarah dan Geografi">Sejarah dan Geografi</option>
						<option value="Karya Ilmiah">Literatur dan Sastra</option>
						<option value="Tafsir">Sosial</option>
						<option value="Bahasa">Bahasa</option>
						<option value="Seni dan Rekreasi">Seni dan Rekreasi</option>
						<option value="Sains dan Matematika">Sains dan Matematika</option>
						<option value="Teks">Teknologi</option>
					 </select>
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