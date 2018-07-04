<!DOCTYPE html>
<html>
<head>
  <title></title>
<style type="text/css">
	.lg {
    width: 100%;
    padding: 3px 20px;
    margin: 1px 0;
    font-size: 20px;
    font-weight: bold;

    p a{
        text-decoration-line: none;
        color: white;
    }
</style>
</head>
<body onload="window.print();">
<?php 
include '../../koneksi.php';
$pelaporan_id=$_GET['pelaporan_id'];
$tampil="SELECT * FROM pelaporan LEFT JOIN pengguna ON pelaporan.pengguna_id = pengguna.pengguna_id WHERE pelaporan.pelaporan_id='$pelaporan_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pelaporan_no'];
$b=$row['pelaporan_status'];
$c=$row['pelaporan_nama'];
$d=$row['pelaporan_tanggal'];
$f=$row['pelaporan_pengterima'];
$g=$row['pelaporan_tangterima'];
$h=$row['pelaporan_catatan'];
?>
<table border="0">
  <tr>
    <td><img src="logo.png" width="100px" height="100px" class=""style="margin-bottom: -30px;"></td>
    <td colspan="3">
      
      <p style="line-height:1.2; font-size:9pt;">
      <strong><span style="font-size:13pt;margin: 12px 120px">KEMENTERIAN PERTANIAN</span><br>
      <span style="font-size:13pt;margin: 12px 130px">SEKRETARIAT JENDERAL</span><br>
      <span style="font-size:10pt;margin: 12px 70px">PUSAT DATA DAN SISTEM INFORMASI PERTANIAN</span><br>
      <span style="font-size:9pt;margin: 12px 20px">GD.D LANTAI IV. JL. HARSONO RM NO.3 RAGUNAN - JAKARTA SELATAN 12550<br>
      <span style="font-size:6pt;margin: 12px 100px">TELEPON : (021) 7822638, 7816384, FAKSIMILE (021) 7822638, 7816385<br>
      <span style="font-size:6pt;margin: 12px 100px">HOMEPAGE : http://www.pertanian.go.id - Email : pusdatin@pertanian.go.id<br>
      </p>
    </td>
    <td><img src="i.png" width="100px" height="100px" class="" style="margin-bottom: -30px;"></td>
  </tr>
</table>
<hr color='#036d0a'>
<hr color='#036d0a'>
<h2 align="center">BUKTI PENGAJUAN</h2>
<hr><br>
<table style="margin-left: 20px;" class="lg">
	<tr>
		<td>Kode Pelaporan</td>
		<td>:</td>
		<td><?php echo $a;  ?></td>
	</tr>
	<tr>
		<td>Nama Pelaporan</td>
		<td>:</td>
		<td><?php echo $c;  ?></td>
	</tr>
	<tr>
		<td>Tanggal Pelaporan</td>
		<td>:</td>
		<td><?php echo $d;  ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><?php
         if ($b=='0') {
         	 echo "Belum diperiksa";
         }
    	 elseif ($b=='1') {
    	 	echo "Diterima";
    	 }
    	 elseif ($b=='2') {
    	 	echo "Ditolak";
    	 } 
    	 ?></td>
	</tr>
	<tr>
		<td>Telah Diperiksa Oleh</td>
		<td>:</td>
		<td><?php echo $f;  ?></td>
	</tr>
	<tr>
		<td>Pada Tanggal & Jam</td>
		<td>:</td>
		<td><?php echo $g;  ?></td>
	</tr>
  <tr>
    <td>Alasan</td>
    <td>:</td>
    <td><?php echo $h;  ?></td>
  </tr>
</table>
<br><br><br>
<table border="0" style="margin-left: 500px;">
  <tr>
    <td ><br>Jakarta , <?php $tgl=date("d-M-Y"); echo $tgl; ?></td>
  </tr>
  <tr>
    <td >Yang bertanggung jawab,</td>
  </tr>
  <tr>
    <td style="text-align: center"><br><br><br><br><?php echo $f  ;?></td>
  </tr>
  <tr>
    <td>NIP  : <?php echo $f; ?></td>
  </tr>
</table>
</body>
