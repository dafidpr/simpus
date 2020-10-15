<!-- Modal Input Petugas -->
<div class="modal fade" id="editBukuModal" tabindex="-1" role="dialog" aria-labelledby="editBukuModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="editBukuModal">Edit Data Buku</h4>
        </div>
        <div class="modal-body">
		<form action="<?php echo base_url('buku/editbuku'); ?>" method="post" class="user">
			<div class="modal-body">
			 <div class="container-fluid">
				<div class="form-group row  mb-3">
					<div class="col-md-6">
						<input type="hidden" name="idbuku" id="editidbuku" class="form-control">
						<label for="editidbuku">Kode Buku :</label>
						<input type="text" name="kodebuku" id="editkodebuku" class="form-control" readonly>
					</div>
					<div class="col-md-6">
						<label for="editjudul">Judul Buku :</label>
						<input type="text" name="judul" id="editjudul" class="form-control">
					</div>
				</div>
				<div class="form-group row  mb-3">
					<div class="col-md-6">
					    <label for="editthnTerbit">Tahun Terbit :</label>
						<input type="text" name="thnTerbit" id="editthnTerbit" class="form-control">
					</div>
					<div class="col-md-6">
					    <label for="editpenulis">Penulis :</label>
						<input type="text" name="penulis" id="editpenulis" class="form-control">
					</div>
				</div>
				<div class="form-group row  mb-3">
					<div class="col-md-6">
					   <label for="editpenerbit">Penerbit :</label>
						<input type="text" name="penerbit" id="editpenerbit" class="form-control">
					</div>
					<div class="col-md-6">
					   <label for="edittmptTerbit">Tempat Terbit :</label>
						<input type="text" name="tmptTerbit" id="edittmptTerbit" class="form-control">
					</div>
				</div>
				<div class="form-group row  mb-3">
					<div class="col-md-4">
					     <label for="editisbn">ISBN :</label>
						<input type="text" name="isbn" id="editisbn" class="form-control">
					</div>
					<div class="col-md-4">
					    <label for="edithalaman">Halaman :</label>
						<input type="text" name="halaman" id="edithalaman" class="form-control">
					</div>
					<div class="col-md-4">
					     <label for="editberat">Berat :</label>
						<input type="text" name="berat" id="editberat" class="form-control">
					</div>
				</div>
				<div class="form-group row  mb-3">
					<div class="col-md-4">
					    <label for="editcetakan">Cetakan :</label>
						<input type="text" name="cetakan" id="editcetakan" class="form-control">
					</div>
					<div class="col-md-4">
					    <label for="editukuran">Ukuran :</label>
						<input type="text" name="ukuran" id="editukuran" class="form-control">
					</div>
					<div class="col-md-4">
					   <label for="editjmlBuku">Jumlah Buku :</label>
						<input type="text" name="jmlBuku" id="editjmlBuku" class="form-control">
					</div>
				</div>
				<div class="form-group row mb-3">
				  <div class="col-md-12">
				  <label>Kategori :</label>
					 <select name="kategori"  class="form-control" id="editkategori">
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
			<button class="btn btn-primary" type="submit" name="edit" id="editbuku">Simpan</button>
		  </div>
		</form>
	  </div>
    </div>
  </div>
</div>
 
<!-- End Modal Input Petugas -->