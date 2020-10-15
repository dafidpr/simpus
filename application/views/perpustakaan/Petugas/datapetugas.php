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
				   <?php include 'inputpetugas.php'; ?>
				   <a href="#" onclick="showInputPetugas()" title="Petugas Baru" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Petugas Baru</a>
				 <div class="table-responsive">
					<table class="table table-bordered table-condensed" id="datapetugas" width="100%">
					  <thead>
						<tr>
						  <th>KODE PETUGAS</th>
						  <th>NAMA</th>
						  <th>NIP</th>
						  <th>JADWAL</th>
						  <th>LEVEL</th>
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
 <?php include 'detailpetugas.php'?>
 <?php include 'editpetugas.php'?>
 <?php include 'hapuspetugas.php'?>
 <?php include 'JS.php'?>