<?php cek_user();?>
<section id="main-content">
<section class="wrapper">
	<h3> <?php echo $title .'  '.' TAHUN AJARAN '. $ajaran; ?></h3>
	 <div class="row mt">
		<div class="col-md-5">
		  <?php echo $this->session->flashdata('message'); ?>
		 </div>
	   <div class="col-lg-12">
		 <div class="content-panel">
			<div class="container-fluid">
			 <section id="unseen">
			  <?php include 'inputwalikelas.php'?>
			  <a href="#" onclick="showInputWali()" title="Tambah Data" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Tambah Data</a>
			   <div class="table-responsive">
				   <table class="table table-bordered table-condensed" id="datawalikelas" width="100%">
					  <thead>
						<tr>
						<th>NIP</th>
						<th>NAMA WALI</th>
						<th>L/P</th>
						<th>KELAS</th>
						<th>AJARAN</th>
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
<?php include 'editwalikelas.php'?>
<?php include 'hapuswalikelas.php'?>
<?php include 'JS.php'?>
