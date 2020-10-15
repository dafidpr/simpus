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
			   <?php include 'inputdenda.php';?>
			  <a href="#" onclick="showInputDenda()" title="Tambah Denda" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Tambah Denda</a>
			   <div class="table-responsive">
				   <table class="table table-bordered table-condensed" id="datadenda" width="100%">
					  <thead>
						<tr>
						<th>KODE DENDA</th>
						<th>DENDA BUKU (per hari)</th>
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
<?php include 'editdenda.php'?>
<?php include 'hapusdenda.php'?>
<?php include 'JS.php'?>