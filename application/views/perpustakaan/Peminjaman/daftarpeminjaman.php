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
				<?php include 'inputpeminjaman.php'; ?>
				<a href="#" onclick="showInputPinjam()" title="Transaksi Baru" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Transaksi Baru</a>
			   <div class="table-responsive">
				  <table class="table table-bordered table-condensed" id="datapinjam" width="100%">
					 <thead>
						<tr>
						  <th>KODE PEMINJAMAN</th>
						  <th>NAMA PEMINJAM</th>
						  <th>NAMA PETUGAS</th>
						  <th>JUMLAH BUKU</th>
						  <th>TGL KEMBALI</th>
						  <th>OPSI</th>
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
<?php include 'detailpeminjaman.php'?>
<?php include 'cetakpeminjaman.php'?>
<?php include 'editpeminjaman.php'?>
<?php include 'hapuspeminjaman.php'?>
<?php include 'JS.php'?>