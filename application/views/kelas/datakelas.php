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
			    <?php include 'inputkelas.php';?>
				 <a href="#" onclick="showInputKelas()" title="Kelas Baru" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Kelas Baru</a>
				 <div class="table-responsive">
				   <table class="table table-bordered table-condensed" id="datakelas" width="100%">
					  <thead>
						<tr>
						  <th>KODE KELAS</th>
						  <th>KELAS</th>
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
<?php include 'detailkelas.php';?>
<?php include 'editkelas.php';?>
<?php include 'hapuskelas.php';?>
<?php include 'JS.php'?>
	