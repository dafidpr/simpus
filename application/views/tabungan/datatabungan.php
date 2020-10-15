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
			  <?php include 'inputtabungan.php'?>
			  <a href="#" onclick="inputTabungan()" title="Tabungan Baru" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Tabungan Baru</a>
			   <div class="table-responsive">
				   <table class="table table-bordered table-condensed" id="datatabungan" width="100%">
					  <thead>
						<tr>
						<th>NO.TABUNGAN</th>
						<th>TGL PEMBUKUAN</th>
						<th>NAMA SISWA</th>
						<th>TOTAL SALDO</th>
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
<?php include 'edittabungan.php'?>
<?php include 'hapustabungan.php'?>
<?php include 'JS.php'?>
