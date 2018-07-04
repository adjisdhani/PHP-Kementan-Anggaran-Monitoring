<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body onload="window.print();">
<?php
$no='001';
include '../../koneksi.php';
$kegiatan_id=$_GET['kegiatan_id'];
$tampil="SELECT * FROM kegiatan LEFT JOIN judul ON kegiatan.judul_id=judul.judul_id LEFT JOIN subjudul ON kegiatan.subjudul_id=subjudul.subjudul_id LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip LEFT JOIN bidang ON pengguna.bidang_id =bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id=subbidang.subbidang_id WHERE kegiatan_id='$kegiatan_id'";
$query=mysql_query($tampil);
$row=mysql_fetch_array($query);

$k=$row['kegiatan_no'];
$a=$row['pengguna_nama'];
$b=$row['bidang_nama'];
$c=$row['subbidang_nama'];
$d=$row['judul_nama'];
$e=$row['subjudul_nama'];
$g=$row['kegiatan_tanggal'];
$l=$row['kegiatan_tangakhir'];
$h=$row['kegiatan_anggaran'];
$i=$row['kegiatan_rincian'];
$j=$row['kegiatan_status'];
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
    <td>Nomor &nbsp; &nbsp; : <?php echo $no;$no++ ?>/<?php echo $k?>/<?php $tanggal=getdate(); echo $tanggal['year']; ?></td>
    <td></td>
  </tr>
</table>
<p align="center" style="font-size: 25px; font-weight: bold">JADWAL KEGIATAN</p>
<hr><br>
<table>
  <tr>
    <td>Pelaksana Kegiatan &nbsp; &nbsp; : <?php echo $a;  ?></th>
  </tr>
  <tr>
    <td>Bidang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <?php echo $b; ?></td>
  </tr>
  <tr>
  <td>Sub Bidang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <?php echo $c; ?></td>
  </tr>
</table>
<br>
<table>
  <tr>
    <td>Judul Kegiatan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $d; ?></td>
  </tr>
  <tr>
    <td>Sub Judul Kegiatan  &nbsp; &nbsp;  : <?php echo $e; ?></td>
  </tr>
  <tr>
    <td>Anggaran Kegiatan  &nbsp; &nbsp;  : <?php $angka=$h;
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan); ?></td>
  </tr>
</table>
<br>
<br>
<!-- isinya nih -->
<table border="1" style="margin-left: 0px;">
  <tr>
    <td colspan="2" style="text-align: center; width: 680px;">RINCIAN AGENDA KEGIATAN</td>
  </tr>
</table>
<table>
  <tr>
    <td colspan="2" style="text-align: center;"><textarea cols="95" rows="34"><?php echo $i; ?></textarea></td>
  </tr>
</table>
<!-- batas-->
<br>
<!--
<table border="0" style="margin-left: 500px;">
  <tr>
    <td ><br>Jakarta , <?php echo $d ?></td>
  </tr>
  <tr>
    <td >Pelaksana Kegiatan,</td>
  </tr>
  <tr>
    <td><br><br><br><br><?php echo $b  ;?></td>
  </tr>
  <tr>
    <td>NIP  : <?php echo $k; ?></td>
  </tr>
</table>-->
</tbody>
</table>
</body>
</html>