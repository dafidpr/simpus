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
			          <?php include 'inputpengembalian.php'; ?>
			          <a href="#" onclick="showInputKembali()" title="Transaksi Baru" class="btn btn-primary btn-sm mb"><i class="fa fa-plus"></i> Transaksi Baru</a>
			          <div class="table-responsive">
                        <table class="table table-bordered table-condensed" id="datakembali" width="100%">
						  <thead>
							<tr>
							  <th>KODE PENGEMBALIAN</th>
							  <th>NAMA PEMINJAM</th>
							  <th>NAMA PETUGAS</th>
							  <th>JUMLAH BUKU</th>
							  <th>TGL PENGEMBALIAN</th>
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
 <?php include 'detailpengembalian.php'?>
 <?php include 'cetakpengembalian.php'?>
 <?php include 'editpengembalian.php'?>
 <?php include 'hapuspengembalian.php'?>
 <?php include 'JS.php'?>
 