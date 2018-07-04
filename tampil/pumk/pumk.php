<link rel="stylesheet" href="menu/font/css/font-awesome.css" />
<br>
<table>
<tr>
	<td>
		<table frame="box" style="background-color: #036d0a;color: white;" cellpadding="0" cellspacing="0" width="200px">
			<tr>
					<td colspan="2">
						<h3 align="right">Pengajuan</h3>
					</td>
			</tr>
				<tr>
				    <td style="vertical-align: center" width="250px">
						<span class="fa fa-pencil-square-o" style="font-size: 50px;"></span>
					</td>
					<td style="vertical-align: right">
						<h3 align="center" style="margin: 0; padding:0">
						<?php
						$bidang_id=$_SESSION['bidang_id'];
						$queryjumpem = "SELECT * FROM pengajuan INNER JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id INNER JOIN bidang ON pengguna.bidang_id = bidang.bidang_id INNER JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id WHERE pengajuan.pengajuan_status = '1' AND pengguna.bidang_id = '$bidang_id'";
						$resultjumpem = mysql_query($queryjumpem);
						$jumpem = mysql_num_rows($resultjumpem);
						echo $jumpem;
						?>
						</h1>
					</td>
				</tr>
		</table>
	</td>
	<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	<td>
		<table frame="box" style="background-color: #036d0a;color: white;" cellpadding="0" cellspacing="0" width="200px">
			<tr>
					<td colspan="2">
						<h3 align="right">Pelaporan</h3>
					</td>
			</tr>
				<tr>
				    <td style="vertical-align: center" width="250px">
						<span class="fa fa-share-square-o" style="font-size: 50px;"></span>
					</td>
					<td style="vertical-align: right">
						<h3 align="center" style="margin: 0; padding:0">
						<?php
						$bidang_id=$_SESSION['bidang_id'];
						$queryjumpem = "SELECT * FROM pelaporan LEFT JOIN pengguna ON pelaporan.pengguna_id = pengguna.pengguna_id LEFT JOIN bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id WHERE pelaporan.pelaporan_status='1' AND pengguna.bidang_id = '$bidang_id'";
						$resultjumpem = mysql_query($queryjumpem);
						$jumpem = mysql_num_rows($resultjumpem);
						echo $jumpem;
						?>
						</h1>
					</td>
				</tr>
		</table>
	</td>
	<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	<td>
		<table frame="box" style="background-color: #036d0a;color: white;" cellpadding="0" cellspacing="0" width="200px">
			<tr style="color: white;">
					<td colspan="2">
						<h3 align="right">Kegiatan</h3>
					</td>
			</tr>
				<tr>
				    <td style="vertical-align: center" width="250px">
						<span class="fa fa-tasks" style="font-size: 50px;"></span>
					</td>
					<td style="vertical-align: right">
						<h3 align="center" style="margin: 0; padding:0">
						<?php
						$bidang_id=$_SESSION['bidang_id'];
						$queryjumpem = "SELECT * FROM kegiatan LEFT JOIN judul ON kegiatan.judul_id=judul.judul_id LEFT JOIN subjudul ON kegiatan.subjudul_id=subjudul.subjudul_id LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip LEFT JOIN bidang ON pengguna.bidang_id =bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id=subbidang.subbidang_id WHERE pengguna.bidang_id='$bidang_id' AND kegiatan.kegiatan_status='1'";
						$resultjumpem = mysql_query($queryjumpem);
						$jumpem = mysql_num_rows($resultjumpem);
						echo $jumpem;
						?>
						</h1>
					</td>
				</tr>
		</table>
	</td>
	<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
	<td>
		<table frame="box" style="background-color: #036d0a;color: white;" cellpadding="0" cellspacing="0" width="240px" >
			<tr style="color: white;">
					<td colspan="2">
						<h3 align="right">Anggaran</h3>
					</td>
			</tr>
				<tr>
				    <td style="vertical-align: center" width="300px">
						<span class="fa fa-money" style="font-size: 50px;"></span>
					</td>
					<td style="vertical-align: right">
						<h3 align="center" style="margin: 0; padding:0">
						<?php
						 $a=mysql_query("SELECT SUM(kegiatan_anggaran) FROM kegiatan  LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip  WHERE pengguna.bidang_id='$bidang_id' AND kegiatan.kegiatan_status='1'");
                                          $data=mysql_fetch_array($a);
                                          $jumlah=$data[0];
                                          $angka=$jumlah;
                                                  $jumlah_desimal='2';
                                                  $pemisah_desimal=',';
                                                  $pemisah_ribuan='.';

                                             echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);
						?>
						</h1>
					</td>
				</tr>
		</table>
	</td>
	<!--<td>
		<table frame="box" style="background-color: #CCCCCC;" cellpadding="0" cellspacing="0" width="200px">
			<tr>
					<td colspan="2">
						<h3 align="right">Realisasi</h3>
					</td>
			</tr>
				<tr>
				    <td style="vertical-align: center" width="250px">
						<span class="fa fa-user" style="font-size: 50px;"></span>
					</td>
					<td style="vertical-align: right">
						<h1 align="center" style="margin: 0; padding:0">
						<?php
						$bidang_id=$_SESSION['bidang_id'];
						$queryjumpem = "SELECT * FROM realisasi LEFT JOIN kegiatan ON realisasi.kegiatan_id = kegiatan.kegiatan_id LEFT JOIN pengajuan ON realisasi.pengajuan_id = pengajuan.pengajuan_id LEFT JOIN pelaporan ON realisasi.pelaporan_id = pelaporan.pelaporan_id";
						$resultjumpem = mysql_query($queryjumpem);
						$jumpem = mysql_num_rows($resultjumpem);
						echo $jumpem;
						?>
						</h1>
					</td>
				</tr>
		</table>
	</td>-->
</tr>	
</table>
<br>
<hr>
<br>
<p style="font-size: 20px; font-weight: bold" align="center">SELAMAT DATANG DI APLIKASI MONITORING ANGGARAN SATUAN KERJA</p>
<br><br><br><br>
<table align="left" style="font-size: 20px;font-weight: bold;">
<tr>
  <td>
   <table>
	<tr>
		<td>HALO <?php echo $_SESSION['pengguna_nama'];  ?>,</td>
	</tr>
	<tr>
		<td>Anda terdaftar sebagai Pemegang Uang Muka Kegiatan (PUMK)</td>
	</tr>
	<tr>
		<td>Harap perhatikan tata cara sebelum menggunakan aplikasi web monitoring anggaran satuan kerja ini !</td>
	</tr>
	<tr>
		<td></td>
	</tr>
   </table>
   <td>
<tr>
   <td>
   <table>
   <tr>
		<td>Tata cara umum      : <a href="index.php?page=tatacara_pumk">DISINI</a></td>
	</tr>
	<tr>
		<td>Tata cara Pengajuan : <a href="index.php?page=tatacarapengajuan_pumk">DISINI</a></td>
	</tr>
	<tr>
		<td>Tata cara Pelaporan : <a href="index.php?page=tatacarapelaporan_pumk">DISINI</a></td>
	</tr>
	<td>
</table>