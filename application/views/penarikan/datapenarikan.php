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
			  <?php include 'inputpenarikan.php'?>
			  <a href="#" onclick="inputPenarikan()" title="Tambah Data" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Tambah Data</a>
			   <div class="table-responsive">
				   <table class="table table-bordered table-condensed" id="datapenarikan" width="100%">
					  <thead>
						<tr>
						<th>KODE PENARIKAN</th>
						<th>NAMA SISWA</th>
						<th>TOTAL PENARIKAN</th>
						<th>SISA SALDO</th>
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
<?php include 'editpenarikan.php'?>
<?php include 'hapuspenarikan.php'?>
<?php include 'JS.php'?>
