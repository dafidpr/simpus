<?php cek_user()?>
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
			   <?php include 'inputsiswa.php'; ?>
				<a href="#" onclick="showInputSiswa()" title="Siswa Baru" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Siswa Baru</a>
			 <div class="table-responsive">
			   <table class="table table-bordered table-condensed" id="datasiswa" width="100%">
				  <thead>
					<tr>
					  <th>KODE SISWA</th>
					  <th>NISN</th>
					  <th>NAMA</th>
					  <th>BIDANG STUDI</th>
					  <th>L/P</th>
					  <th>ASAL SEKOLAH</th>
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
<?php include 'detailsiswa.php'?>
<?php include 'editsiswa.php'?>
<?php include 'hapussiswa.php'?>
<?php include 'JS.php'?>