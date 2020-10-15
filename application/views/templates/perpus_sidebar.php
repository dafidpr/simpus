   <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="<?php echo base_url('assets/')?>img/avatar5.png" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $user['NAMA_PETUGAS']?></h5>
		   <h6 class="centered"><b><?php echo $user['LEVEL']?></b></h6>
		   <li class="mt">
            <a href="<?php echo base_url('dashboard')?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-shopping-cart"></i>
              <span>Transaksi</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url('peminjaman/index')?>">Peminjaman</a></li>
              <li><a href="<?php echo base_url('pengembalian/index')?>">Pengembalian</a></li>
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Master Data</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url('petugas/index')?>">Data Petugas</a></li>
              <li><a href="<?php echo base_url('siswa/index')?>">Data Siswa</a></li>
			  <li><a href="<?php echo base_url('guru/index')?>">Data Guru</a></li>
			  <li><a href="<?php echo base_url('buku/index')?>">Data Buku</a></li>
			  <li><a href="<?php echo base_url('denda/index')?>">Data Denda</a></li>
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>Management Kelas</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url('kelas/index')?>">Data Kelas</a></li>
			  <li><a href="<?php echo base_url('walikelas/index')?>">Data Wali Kelas</a></li>
			  <li><a href="<?php echo base_url('siswakelas/index')?>">Siswa & Kelas</a></li>
			  <li><a href="<?php echo base_url('ta/index')?>">Tahun Ajaran</a></li>
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-file-text"></i>
              <span>Laporan</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url('laporanpinjam/index')?>">Laporan Peminjaman</a></li>
			  <li><a href="<?php echo base_url('laporankembali/index')?>">Laporan Pengembalian</a></li>
            </ul>
          </li>
		   <li>
            <a href="<?php echo base_url('petugas/ubahpassword')?>">
              <i class="fa fa-key"></i>
              <span>Update Password </span>
              </a>
          </li>
        </ul>
      </div>
   </aside>
