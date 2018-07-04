<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body onload="window.print();">
<?php
$no='001';
include '../../koneksi.php';
$pelaporan_id=$_GET['pelaporan_id'];
$tampil="SELECT * FROM pelaporan LEFT JOIN pengguna ON pelaporan.pengguna_id = pengguna.pengguna_id WHERE pelaporan_id='$pelaporan_id'";
$query=mysql_query($tampil);
$row=mysql_fetch_array($query);

$a=$row['pelaporan_no'];
$b=$row['pengguna_nama'];
$c=$row['pelaporan_nama'];
$d=$row['pelaporan_tanggal'];
$e=$row['pelaporan_rincian'];
$g=$row['pelaporan_status'];
$h=$row['pengguna_nip'];
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
<table style=" margin-left:  850px; margin: 1%;" border="0">
  <tr>
    <td>Nomor &nbsp; &nbsp; : <?php echo $no;$no++ ?>/<?php echo $a?>/<?php $tanggal=getdate(); echo $tanggal['year']; ?></td>
    <td></td>
  </tr>
  <tr>
    <td>Perihal &nbsp; &nbsp; : <?php echo $c ?></td>
  </tr>
</table>
<table border="1" style="margin-left: 0px;">
  <tr>
    <td colspan="2" style="text-align: center; width: 680px;">RINCIAN PELAPORAN KEGIATAN</td>
  </tr>
</table>
<table>
  <tr>
    <td colspan="2" style="text-align: center;"><textarea cols="95" rows="25"><?php echo $e; ?></textarea></td>
  </tr>
</table>
<!-- batas-->
<table border="0">
  <tr>
    <td>Catatan : Arsip kegiatan, bukti pembelian, struk, dan lain-lain diunggah di dalam berkas kegiatan.</td>
  </tr>
</table>
<br>
<table border="0" style="margin-left: 500px;">
  <tr>
    <td ><br>Jakarta , <?php $timestamp=strtotime($d);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;?></td>
  </tr>
  <tr>
    <td >Pelaksana Kegiatan,</td>
  </tr>
  <tr>
    <td style="text-align: center"><br><br><br><br><?php echo $b  ;?></td>
  </tr>
  <tr>
    <td>NIP  : <?php echo $h; ?></td>
  </tr>
</table>
</tbody>
</table>
</body>
</html>