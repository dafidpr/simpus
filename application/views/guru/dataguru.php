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
				   <?php include 'inputguru.php'; ?>
				   <a href="#" onclick="showInputGuru()" title="Guru Baru" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Guru Baru</a>
				 <div class="table-responsive">
					<table class="table table-bordered table-condensed" id="dataguru" width="100%">
					  <thead>
						<tr>
						  <th>KODE GURU</th>
						  <th>NAMA</th>
						  <th>NIP</th>
						  <th>L/P</th>
						  <th>EMAIL</th>
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
 <?php include 'detailguru.php'?>
 <?php include 'editguru.php'?>
 <?php include 'hapusguru.php'?>
 <?php include 'JS.php'?>