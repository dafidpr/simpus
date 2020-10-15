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
			   <?php include 'inputajaran.php';?>
			  <a href="#" onclick="showInputAjaran()" title="Tambah Denda" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Tambah Tahun Ajaran</a>
			   <div class="table-responsive">
				   <table class="table table-bordered table-condensed" id="dataajaran" width="100%">
					  <thead>
						<tr>
						<th>KODE TA</th>
						<th>TAHUN AJARAN</th>
						<th>STATUS</th>
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
<?php include 'editajaran.php'?>
<?php include 'hapusajaran.php'?>
<?php include 'JS.php'?>