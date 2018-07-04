<head>
    <script src="../../assetsjs/js/jquery-3.2.1.js"></script>
	<script src="tampil/pumk/json/proses.js"></script>
</head>
<?php 
	  // membuat query max untuk kode barang
	  $carikode = mysql_query("select max(realisasi_no) from realisasi") or die (mysql_error());
	  // menjadikannya array
	  $datakode = mysql_fetch_array($carikode);
	  // jika $datakode
	  if ($datakode) {
	   // membuat variabel baru untuk mengambil kode barang mulai dari 1
	   $nilaikode = substr($datakode[0], 3);
	   // menjadikan $nilaikode ( int )
	   $kode = (int) $nilaikode;
	   // setiap $kode di tambah 1
	   $kode = $kode + 1;
	   // hasil untuk menambahkan kode 
	   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
	   // atau angka sebelum $kode
	   $hasilkode = "REA".str_pad($kode, 3, "0", STR_PAD_LEFT);
	  } else {
	   $hasilkode = "REA001";
	  }
?>
<style type="text/css">
	input[type=text], input[type=number], textarea,select,input[type=date],.lg {
    width: 100%;
    padding: 3px 20px;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}
	input[type=button], input[type=submit], input[type=reset] {
    background-color: #036d0a;
    border: none;
    color: white;
    padding: 8px 18px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<form action="index.php?page=realisasi_ubah_proses" method="post" enctype="multipart/form-data">
<?php
$pengguna_id=$_SESSION['pengguna_id'];
$realisasi_id=$_GET['realisasi_id'];
$tampil="SELECT * FROM realisasi LEFT JOIN kegiatan ON realisasi.kegiatan_id = kegiatan.kegiatan_id LEFT JOIN pengajuan ON realisasi.pengajuan_id = pengajuan.pengajuan_id LEFT JOIN pelaporan ON realisasi.pelaporan_id = pelaporan.pelaporan_id LEFT JOIN pengguna ON pengguna.bidang_id=pengguna.pengguna_id WHERE realisasi_id = '$realisasi_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['realisasi_id'];
$b=$row['realisasi_no'];
$d=$row['kegiatan_no'];
$e=$row['pengajuan_no'];
$f=$row['pelaporan_no'];
$g=$row['realisasi_anggaran'];
$h=$row['realisasi_sisa'];
$i=$row['realisasi_nama'];
?>
<input type="hidden" name="realisasi_pengguna" value="<?php $row['pengguna_id'] ?>">
<input type="hidden" name="realisasi_id" value="<?php echo $a; ?>" >
<h2 align="center">UBAH DATA REALISASI KEGIATAN</h2>
<br><hr><br>
<table style="margin-left: 100px;">
    <tr>
		<td>Kode Realisasi</td>
		<td></td>
		<td><input type="text" name="realisasi_no" readonly="readonly" value="<?php echo $b; ?>"></td>
		<td><input type="hidden" id="kegiatan_id" name="kegiatan_id"></td>
		<td><input type="hidden" id="pengajuan_id" name="pengajuan_id"></td>
		<td><input type="hidden" id="pelaporan_id" name="pelaporan_id"></td>
	</tr>
	<tr>
		<td>Kode Kegiatan</td>
		<td></td>
		<td><input type="text" name="kegiatan_no" id="kegiatan_no" value="<?php echo $d ?>" required="required"><button type="button" id="btn-search" style="width: 50px; font-weight: bold;">Cari</button></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anggaran Kegiatan</td>
		<td></td>
		<td><input type="text" id="kegiatan_anggaran"></td>
	</tr>
	<tr>
		<td>Kode Pengajuan</td>
		<td></td>
		<td><input type="text" name="pengajuan_no" id="pengajuan_no" value="<?php echo $e ?>" required="required"><button type="button" id="btn-search2" style="width: 50px; font-weight: bold;">Cari</button></td></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Pengajuan</td>
		<td></td>
		<td><input type="text" id="pengajuan_nama"></td>
	</tr>
	<tr>
		<td>Kode Pelaporan</td>
		<td></td>
		<td><input type="text" name="pelaporan_no" id="pelaporan_no" value="<?php echo $f ?>" required="required"><button type="button" id="btn-search3" style="width: 50px; font-weight: bold;">Cari</button></td></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Pelaporan</td>
		<td></td>
		<td><input type="text" id="pelaporan_nama"></td>
	</tr>
	<tr>
		<td>Realisasi Anggaran</td>
		<td></td>
		<td><input type="number" name="realisasi_anggaran" value="<?php echo $g ?>" required="required"></td>
	</tr>
	<tr>
		<td>Anggaran Sisa</td>
		<td></td>
		<td><input type="number" name="anggaran_sisa" value="<?php echo $h ?>" required="required"></td>
	</tr>
	<tr>
		<td>Realisasi Rincian</td>
		<td></td>
		<td><textarea name="realisasi_rincian" required="required" cols="50" rows="10"><?php echo $i; ?></textarea></td>

	</tr>
	<tr>
		
	</tr>
	<tr>
		
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="pengguna_submit" value="UBAH"><input type="reset" name="pengguna_reset" value="BATAL"></td>
	</tr>
</table>
</form>
</fieldset>