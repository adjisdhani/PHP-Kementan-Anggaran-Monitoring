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

    .btn{
        border-radius: 30px;
        background-color: blue;
        width: 130px;
        text-align:center;
        color : white;
        text-decoration-line: none;
    }
    p a{
        text-decoration-line: none;
        color: white;
    }
</style>
</head>
<body onload="window.print();">
<?php 
include '../../koneksi.php';
$pengguna_id=$_GET['pengguna_id'];
$tampil="SELECT * FROM pengguna INNER JOIN bidang ON pengguna.bidang_id = bidang.bidang_id INNER JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id where pengguna_id='$pengguna_id' ";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pengguna_nip'];
$b=$row['pengguna_nama'];
$c=$row['pengguna_tgllahir'];
$d=$row['pengguna_alamat'];
$e=$row['pengguna_telepon'];
$f=$row['bidang_nama'];
$g=$row['pengguna_status'];
$h=$row['pengguna_katasandi'];
$j=$row['subbidang_nama'];
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
<h2 align="center">IDENTITAS PENGGUNA</h2>
<hr><br>
<table style="margin-left: 20px;" class="lg">
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><?php echo $a;  ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $b;  ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $c;  ?></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td>:</td>
		<td><?php echo $e;  ?></td>
	</tr>
	<tr>
		<td>Bidang</td>
		<td>:</td>
		<td><?php echo $f;  ?></td>
	</tr>
	<tr>
		<td>Sub Bidang</td>
		<td>:</td>
		<td><?php echo $j;  ?></td>
	</tr>
	<!--<tr>
		<td>Status</td>
		<td>:</td>
		<td><?php
         if ($row['pengguna_status']=='1') {
         	 echo "Admin";
         }
    	 elseif ($row['pengguna_status']=='2'){
    	 	echo "Pegawai";
    	 } 
    	 elseif ($row['pengguna_status']=='3'){
    	 	echo "PUMK";
    	 } 
    	 elseif ($row['pengguna_status']=='4'){
    	 	echo "Bendahara";
    	 } 

    	 ?></td>
	</tr>-->
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $d;  ?></td>
	</tr>
	<tr>
		<td>Kata Sandi</td>
		<td>:</td>
		<td><?php echo $row['pengguna_katasandi'];  ?></td>
	</tr>
</table>
</body>
