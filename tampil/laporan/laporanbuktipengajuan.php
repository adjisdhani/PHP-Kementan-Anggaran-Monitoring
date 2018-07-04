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
$pengajuan_id=$_GET['pengajuan_id'];
$tampil="SELECT * FROM pengajuan LEFT JOIN pengguna ON pengajuan.pengajuan_pengterima = pengguna.pengguna_id WHERE pengajuan_id='$pengajuan_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pengajuan_no'];
$b=$row['pengajuan_status'];
$c=$row['pengajuan_nama'];
$d=$row['pengajuan_tanggal'];
$e=$row['pengajuan_anggaran'];
$f=$row['pengguna_nama'];
$g=$row['pengajuan_tangterima'];
$h=$row['pengajuan_catatan'];
$i=$row['pengguna_nip'];
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
		<td>Kode Pengajuan</td>
		<td>:</td>
		<td><?php echo $a;  ?></td>
	</tr>
	<tr>
		<td>Nama Pengajuan</td>
		<td>:</td>
		<td><?php echo $c;  ?></td>
	</tr>
	<tr>
		<td>Tanggal Pengajuan</td>
		<td>:</td>
		<td><?php $timestamp=strtotime($d);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal ?></td>
	</tr>
	<tr>
		<td>Anggaran Pengajuan</td>
		<td>:</td>
		<td><?php $angka=$e;
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);  ?></td>
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
    <td ><br>Jakarta , <?php $tgl=date("d-m-Y"); echo $tgl; ?></td>
  </tr>
  <tr>
    <td >Yang bertanggung jawab,</td>
  </tr>
  <tr>
    <td style="text-align: center"><br><br><br><br><?php echo $f  ;?></td>
  </tr>
  <tr>
    <td>NIP  : <?php echo $i; ?></td>
  </tr>
</table>
</body>
