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
			       <?php include 'inputbuku.php';?>
			      <a href="#" onclick="showInputBuku()" title="Buku Baru" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Buku Baru</a>
			       <div class="table-responsive">
                       <table class="table table-bordered table-condensed" id="databuku" width="100%">
						  <thead>
							<tr>
							  <th>KODE BUKU</th>
							  <th>JUDUL</th>
							  <th>PENULIS</th>
							  <th>ISBN</th>
							  <th>PENERBIT</th>
							  <th>KATEGORI</th>
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
<?php include 'detailbuku.php';?>
<?php include 'editbuku.php';?>
<?php include 'hapusbuku.php';?>
<?php include 'JS.php'?>
	