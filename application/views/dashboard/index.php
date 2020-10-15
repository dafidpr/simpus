     <?php cek_user();?>
	 <section id="main-content">
      <section class="wrapper">
        <h3> <?php echo $title; ?></h3>
        <div class="row mt">
		 <div class="col-md-5">
			<?php echo $this->session->flashdata('message'); ?>
		  </div>
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <div class="white-panel">
                  <div class="white-header">
                    <h5>SISWA</h5>
                  </div>
                  <h1><i class="fa fa-group fa-2x"></i></h1>
                  <p><b><?php echo $siswa; ?> Jumlah Siswa</b></p>
                  <div class="row">
                    <p></p>
                  </div>
                </div>
              </div>
			   <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <div class="white-panel">
                  <div class="white-header">
                    <h5>PETUGAS</h5>
                  </div>
                 <h1><i class="fa fa-user fa-2x"></i></h1>
                  <p><b><?php echo $petugas; ?> Jumlah Petugas</b></p>
                  <div class="row">
                    <p></p>
                  </div>
                </div>
              </div>
			   <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <div class="white-panel">
                  <div class="white-header">
                    <h5>BUKU</h5>
                  </div>
                 <h1><i class="fa fa-book fa-2x"></i></h1>
                  <p><b><?php echo $buku; ?> Jumlah Buku</b></p>
                  <div class="row">
                    <p></p>
                  </div>
                </div>
              </div>
			  <div class="col-lg-3 col-md-3 col-sm-3 mb">
                <div class="white-panel">
                  <div class="white-header">
                    <h5>TRANSAKSI</h5>
                  </div>
                 <h1><i class="fa fa-shopping-cart fa-2x"></i></h1>
                  <p><b><?php echo $pinjam; ?> Peminjaman & <?php echo $kembali; ?> Pengembalian</b></p>
                  <div class="row">
                    <p></p>
                  </div>
                </div>
              </div>
			<div class="col-lg-6 mb">
              <div class="content-panel">
                <h3 style="padding-left: 10px;"><i class="fa fa-bar-chart-o"></i> Grafik Transaksi Peminjaman <?php echo date('Y')?></h3>
                  <div class="panel-body text-center">
                  <canvas id="peminjaman" height="300" width="400"></canvas>
                </div>
              </div>
            </div>
			<div class="col-lg-6">
              <div class="content-panel">
                <h3 style="padding-left: 10px;"><i class="fa fa-bar-chart-o"></i> Grafik Transaksi Pengembalian <?php echo date('Y')?></h3>
                  <div class="panel-body text-center">
                  <canvas id="pengembalian" height="300" width="400"></canvas>
                </div>
              </div>
            </div>
            </div>
        </div>
      </section>
    </section>
	<?php include 'JS.php'?>