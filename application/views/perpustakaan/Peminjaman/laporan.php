<?php cek_user();?>
<section id="main-content">
  <section class="wrapper">
	<h3> <?php echo $title; ?></h3>
	<div class="row mt">
	   <div class="col-md-5">
		<?php echo $this->session->flashdata('message'); ?>
	   </div>
	 <div class="col-lg-12">
		<div class="content-panel">
			<div class="container-fluid">
			  <section id="unseen">
			  <form action="<?php echo base_url('laporanpinjam/laporan'); ?>" method="post" class="user">
				 <div class="container-fluid">
					  <div class="form-group row  mb-3">
						<div class="col-md-4">
						 <input type="text" class="form-control" name="tglawal" id="awal" placeholder="Tanggal Awal, Contoh: 2019-08-01">
						</div>
						<div class="col-md-4">
						  <input type="text" class="form-control" name="tglakhir" id="akhir" placeholder="Tanggal Akhir, Contoh: 2019-08-30">
						</div>
						<button type="button" title="Cari Data" onclick="caridata()" class="btn btn-primary btn-sm mb"><i class="fa fa-search"></i> Cari</button>
						<button type="submit" title="Export PDF" class="btn btn-primary btn-sm mb"><i class="fa fa-download"></i> Export PDF</button>
					  </div>
					</div>
				</form>
			   <div class="table-responsive">
				  <table class="table table-bordered table-condensed" id="laporanpinjam" width="100%">
					 <thead>
						<tr>
						  <th>KODE PEMINJAMAN</th>
						  <th>NAMA PEMINJAM</th>
						  <th>NAMA PETUGAS</th>
						  <th>JUMLAH BUKU</th>
						  <th>TGL PINJAM</th>
						</tr>
					 </thead>
				  </table>
				</div>
			 </section>
			</div>
		 </div>
	   </div>
	</div>
  </section>
 </section>
<?php include 'JS.php'?>