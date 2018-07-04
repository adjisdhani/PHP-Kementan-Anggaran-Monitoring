<link rel="stylesheet" href="menu/menu.css">
<link rel="stylesheet" href="menu/font/css/font-awesome.css" />
<?php
$pengguna_status = $_SESSION['pengguna_status'];
if ($pengguna_status == '1'){
?> 
  <div class="menu-item">
  <h4><a href="index.php"><span class="fa fa-dashboard" style="font-size: 13pt";></span>Halaman Utama</a></h4>
  </div>
  <div class="menu-item">
  <h4><a href="index.php?page=pengguna_lihat"><span class="fa fa-user-circle-o" style="font-size: 13pt;"></span>&nbsp;Pengguna</a></h4>
	<!--<ul>
	<li><a href="index.php?page=pengguna_lihat">Lihat Pengguna</a></li>
	<li><a href="index.php?page=pengguna_cetak">Cetak Data Pengguna</a></li>
	</ul>-->
   </div>
   <div class="menu-item">
  <h4><a href="#"><span class="fa fa-book" style="font-size: 13pt";></span>&nbsp;Bidang</a></h4>
	<ul>
	<li class="bidang_lihat"><a href="index.php?page=bidang_lihat"><span class="fa fa-circle-o"></span>      Lihat Bidang</a></li>
	<li class="subbidang_lihat"><a href="index.php?page=subbidang_lihat"><span class="fa fa-circle-o"></span>          Lihat Sub Bidang</a></li>
	</ul>
   </div>
   <div class="menu-item">
   <h4><a href="#"><span class="fa fa-tasks" style="font-size: 13pt";></span>&nbsp;Kegiatan</a></h4>
	<ul>
	<li class="judul_lihat"><a href="index.php?page=judul_lihat"><span class="fa fa-circle-o">       Lihat Judul Kegiatan </a></li>
  <li class="subjudul_lihat"><a href="index.php?page=subjudul_lihat"><span class="fa fa-circle-o">       Lihat Sub Judul Kegiatan </a></li>
  <!--<li class="judul_lihat"><a href="index.php?page=komponen_lihat"><span class="fa fa-circle-o">       Lihat Komponen Kegiatan </a></li>-->
	<li class="kegiatan_lihat"><a href="index.php?page=kegiatan_lihat_admin"><span class="fa fa-circle-o">       Lihat Kegiatan</a>
	</ul>
   </div>
   <div class="menu-item">
  <h4><a href="#"><span class="fa fa-info-circle" style="font-size: 13pt";></span>&nbsp;Ubah Informasi</a></h4>
	<ul>
	<li class="ubah_identitas"><a href="index.php?page=identitas_ubah"><span class="fa fa-circle-o"></span>      Ubah Identitas</a></li>
	<li class="ubah_kata_Sandi"><a href="index.php?page=katasandi_ubah"><span class="fa fa-circle-o"></span>      Ubah Kata Sandi</a></li>
	</ul>
   </div>
   <div class="menu-item">
   <h4><a href="#"><span class="fa fa-print" style="font-size: 13pt";></span>&nbsp;Cetak</a></h4> 
   <ul>
     <li class=""><a href="index.php?page=pengguna_cetak"><span class="fa fa-circle-o"></span>      Data Pengguna</a></li>
   </ul>
   </div>
<?php } ?>

<?php 
$pengguna_status = $_SESSION['pengguna_status'];
if ($pengguna_status == '2'){
?>
  <div class="menu-item">
  <h4><a href="index.php"><span class="fa fa-dashboard" style="font-size: 13pt";></span>&nbsp;Halaman Utama</a></h4>
  </div>
  <div class="menu-item">
  <h4><a href="index.php?page=kegiatan_lihat_pegawai" style="font-size: 13pt";><span class="fa fa-tasks"></span>&nbsp;Kegiatan</a></h4>
  </div>
  <div class="menu-item">
  <h4><a href="index.php?page=pengajuan_riwayat"><span class="fa fa-pencil-square-o" style="font-size: 13pt";></span>&nbsp;Pengajuan</a></h4>
  <ul>
  <li class="pengajuan diterima"><a href="index.php?page=pengajuan_riwayat_diterima"><span class="fa fa-circle-o"></span>      Pengajuan Diterima</a></li>
  <li class="pengajuan ditolak"><a href="index.php?page=pengajuan_riwayat_ditolak"><span class="fa fa-circle-o"></span>      Pengajuan Ditolak</a></li>
  </ul>
  </div>
  <div class="menu-item">
  <h4><a href="index.php?page=pelaporan_riwayat"><span class="fa fa-share-square-o" style="font-size: 13pt";></span>&nbsp;Pelaporan</a></h4>
  <ul>
  <li class="pelaporan diterima"><a href="index.php?page=pelaporan_riwayat_diterima"><span class="fa fa-circle-o"></span>      Pelaporan Diterima</a></li>
  <li class="pelaporan ditolak"><a href="index.php?page=pelaporan_riwayat_ditolak"><span class="fa fa-circle-o"></span>      Pelaporan Ditolak</a></li>
  </ul>
  </div>
  <div class="menu-item">
  <h4><a href="#"><span class="fa fa-info-circle" style="font-size: 13pt";></span>&nbsp;Ubah Informasi</a></h4>
	<ul>
	<li class="ubah_identitas"><a href="index.php?page=identitas_ubah"><span class="fa fa-circle-o"></span>      Ubah Identitas</a></li>
	<li class="ubah_kata_Sandi"><a href="index.php?page=katasandi_ubah"><span class="fa fa-circle-o"></span>      Ubah Kata Sandi</a></li>
	</ul>
   </div>
   <div class="menu-item">
   <h4><a href="#"><span class="fa fa-print" style="font-size: 13pt";></span>&nbsp;Cetak</a></h4> 
   <ul>
     <li id="menu-item"><a href="index.php?page=kegiatanpegawai_cetak"><span class="fa fa-circle-o"></span>      Data Kegiatan</a></li>
     <li id="menu-item"><a href="index.php?page=pengajuanpegawai_cetak"><span class="fa fa-circle-o"></span>      Data  Pengajuan</a></li>
     <li id="menu-item"><a href="index.php?page=pelaporanpegawai_cetak"><span class="fa fa-circle-o"></span>      Data  Pelaporan</a></li>

   </ul> 
   </div>
<?php } ?>

<?php 
$pengguna_status = $_SESSION['pengguna_status'];
if ($pengguna_status == '3'){
?>
  <div class="menu-item">
  <h4><a href="index.php"><span class="fa fa-dashboard"></span>&nbsp;Halaman Utama</a></h4>
  </div>
  <div class="menu-item">
  <h4><a href="#"><span class="fa fa-tasks" style="font-size: 13pt";></span>&nbsp;Kegiatan</a></h4>
  <ul>
              <li class="kegiatan_lihat_pumk"><a href="index.php?page=kegiatan_lihat_pumk"><span class="fa fa-circle-o"></span>       Lihat Kegiatan</a>
              <li class="realisasi_lihat_pumk"><a href="index.php?page=realisasi_lihat_pumk"><span class="fa fa-circle-o"></span>       Lihat Realisasi Kegiatan</a></li>
              <li class="kegiatan_terlaksana"><a href="index.php?page=kegiatan_sedang_terlaksana_pumk"><span class="fa fa-circle-o"></span>       Sedang Dilaksanakan</li>
              <li class="kegiatan_terlaksana"><a href="index.php?page=kegiatan_terlaksana_pumk"><span class="fa fa-circle-o"></span>       Sudah Dilaksanakan</li>
  </ul>
  </div>
  <div class="menu-item">
  <h4><a href="#"><span class="fa fa-pencil-square-o" style="font-size: 13pt";></span>&nbsp;Pengajuan</a></h4>
        <ul>
	   		<li class="pengajuan_masuk"><a href="index.php?page=pengajuan_lihat_masuk"><span class="fa fa-circle-o"></span>       Pengajuan Masuk
	   		<?php 
            $query="SELECT pengajuan_id,pengajuan_status FROM tb_pengajuan WHERE pengajuan_status='0'";
            $a=mysql_query($query);
            $jumlah=mysql_num_rows($a);

            echo $jumlah;
	   		?>
	   		</li>
		    <li class="pengajuan_diterima"><a href="index.php?page=pengajuan_diterima"><span class="fa fa-circle-o"></span>       Pengajuan Diterima</a></li>
        <li class="pengajuan_diterima"><a href="index.php?page=pengajuan_ditolak"><span class="fa fa-circle-o"></span>       Pengajuan Ditolak</a></li>
        <li class="pengajuan_disetujui"><a href="index.php?page=pengajuan_disetujui_pumk"><span class="fa fa-circle-o"></span>       Pengajuan Disetujui</a></li>
        </ul>
   </div>
   <div class="menu-item">
   <h4><a href="#"><span class="fa fa-share-square-o" style="font-size: 13pt";></span>&nbsp;Pelaporan</a></h4>
        <ul>
            <li class="pelaporan_masuk"><a href="index.php?page=pelaporan_lihat_masuk"><span class="fa fa-circle-o"></span>       Pelaporan Masuk</li>
		    <li class="pelaporan_diterima"><a href="index.php?page=pelaporan_diterima"><span class="fa fa-circle-o"></span>       Pelaporan Diterima</a></li>
		    <li class="pelaporan_ditolak"><a href="index.php?page=pelaporan_ditolak"><span class="fa fa-circle-o"></span>       Pelaporan Ditolak</a></li>
        </ul>
    </div>
    <!--<div class="menu-item">
   <h4><a href="#"><span class="fa fa-share-square-o"></span>Pencairan Anggaran</a></h4>
   </div>-->
    <div class="menu-item">
    <h4><a href="#"><span class="fa fa-info-circle" style="font-size: 13pt";></span>&nbsp;Ubah Informasi</a></h4>
	<ul>
	<li class="ubah_identitas"><a href="index.php?page=identitas_ubah"><span class="fa fa-circle-o"></span>      Ubah Identitas</a></li>
	<li class="ubah_kata_Sandi"><a href="index.php?page=katasandi_ubah"><span class="fa fa-circle-o"></span>      Ubah Kata Sandi</a></li>
	</ul>
   </div>
   <div class="menu-item">
   <h4><a href="#"><span class="fa fa-print" style="font-size: 13pt";></span>&nbsp;Cetak</a></h4> 
   <ul>
     <li id="menu-item"><a href="index.php?page=kegiatanpumk_cetak"><span class="fa fa-circle-o"></span>      Data Kegiatan</a></li>
     <!--<li id="menu-item"><a href="index.php?page=laporanrealisasi"><span class="fa fa-circle-o"></span>      Data  Realisasi Kegiatan</a></li>-->
     <!--<li id="menu-item"><a href="#"><span class="fa fa-circle-o"></span>      Data  Pengajuan</a></li>-->
     <!--<li id="menu-item"><a href="#"><span class="fa fa-circle-o"></span>      Data  Pelaporan</a></li>-->
     <li id="menu-item"><a href="index.php?page=realisasipumk_cetak"><span class="fa fa-circle-o"></span>      Data Realisasi</a></li>
   </ul> 
   </div>
<?php } ?>

<?php 
$pengguna_status = $_SESSION['pengguna_status'];
if ($pengguna_status == '4'){
?>
<div class="menu-item">
  <h4><a href="index.php"><span class="fa fa-dashboard" style="font-size: 13pt";></span>&nbsp;Halaman Utama</a></h4>
</div>
<div class="menu-item">
 <h4><a href="#"><span class="fa fa-tasks" style="font-size: 13pt";></span>&nbsp;Kegiatan</a></h4>
  <ul>
              <li class="kegiatan_lihat"><a href="index.php?page=kegiatan_lihat_bendahara"><span class="fa fa-circle-o"></span>       Lihat Kegiatan</a>
              <li class="realisasi_lihat"><a href="index.php?page=realisasi_lihat_bendahara"><span class="fa fa-circle-o"></span>       Lihat Realisasi Kegiatan</a></li>
			  <!--<li class="realisasi_tambah"><a href="index.php?page=realisasikegiatan"><span class="fa fa-circle-o"></span>       Tambah Realisasi Kegiatan</a></li>-->
			  <li class="kegiatan_terlaksana"><a href="index.php?page=kegiatan_sedang_terlaksana"><span class="fa fa-circle-o"></span>       Sedang Dilaksanakan</li>
		      <li class="kegiatan_belum_terlaksana"><a href="index.php?page=kegiatan_terlaksana"><span class="fa fa-circle-o"></span>       Sudah Dilaksanakan </a></li>
  </ul>
  </div>
  <div class="menu-item">
  <h4><a href="#"><span class="fa fa-pencil-square-o" style="font-size: 13pt";></span>&nbsp;Pengajuan</a></h4>
         <ul>
	         <li class="pengajuanditerimapumk"><a href="index.php?page=pengajuanditerimapumk"><span class="fa fa-circle-ofa fa-circle-o"></span>       Pengajuan Masuk</a></li>
	         <li class="pengajuandisetujui"><a href="index.php?page=pengajuandisetujui"><span class="fa fa-circle-ofa fa-circle-o"></span>       Pengajuan Disetujui</a></li>		
         </ul>
  </div>
  <!--<div class="menu-item">
   <h4><a href="#"><span class="fa fa-share-square-o"></span>Pencairan Anggaran</a></h4>
   </div>-->
  <div class="menu-item">
    <h4><a href="#"><span class="fa fa-info-circle" style="font-size: 13pt";></span>&nbsp;Ubah Informasi</a></h4>
	<ul>
	<li class="ubah_identitas"><a href="index.php?page=identitas_ubah"><span class="fa fa-circle-o"></span>      Ubah Identitas</a></li>
	<li class="ubah_kata_Sandi"><a href="index.php?page=katasandi_ubah"><span class="fa fa-circle-o"></span>      Ubah Kata Sandi</a></li>
	</ul>
   </div>
  <div class="menu-item">
   <h4><a href="#"><span class="fa fa-print" style="font-size: 13pt";></span>&nbsp;Cetak</a></h4> 
   <ul>
     <li id="menu-item"><a href="index.php?page=kegiatanbendaharacetak"><span class="fa fa-circle-o"></span>      Data Kegiatan</a></li>
     <li id="menu-item"><a href="index.php?page=realisasibendahara_cetak"><span class="fa fa-circle-o"></span>      Data  Realisasi </a></li>
     <!--<li id="menu-item"><a href="#"><span class="fa fa-circle-o"></span>      Data  Pengajuan</a></li>-->
   </ul> 
   </div>
<?php }?>