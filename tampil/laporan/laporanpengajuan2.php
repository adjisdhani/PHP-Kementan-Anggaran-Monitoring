<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body onload="window.print();">
<?php
$no='001';
include '../../koneksi.php';
$pengajuan_id=$_GET['pengajuan_id'];
$tampil="SELECT * From  pengajuan LEFT JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id LEFT JOIN bidang ON pengguna.bidang_id=bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id =subbidang.subbidang_id LEFT JOIN kegiatan ON kegiatan.pengguna_id=pengguna.pengguna_id WHERE pengajuan_id='$pengajuan_id'";
$query=mysql_query($tampil);
$row=mysql_fetch_array($query);

$a=$row['pengajuan_no'];
$b=$row['pengguna_nama'];
$c=$row['pengajuan_nama'];
$d=$row['pengajuan_tanggal'];
$e=$row['pengajuan_anggaran'];
$f=$row['pengajuan_rincian'];
$g=$row['bidang_nama'];
$h=$row['subbidang_nama'];
$i=$row['kegiatan_no'];
$j=$row['kegiatan_anggaran'];
$k=$row['pengguna_nip'];
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
    <td></td>
  </tr>
  <tr>
    <td>Perihal &nbsp; &nbsp; : <?php echo $c; ?></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
  <td>Kepada Yth.</th>
  </tr>
  <tr>
    <td>Sdr. Pemegang Uang Muka Kegiatan</td>
  </tr>
  <tr>
  <td>Bidang <?php echo $g; ?>  Sub Bidang <?php echo $h; ?></td>
  </tr>
  <tr>
    <td>Di Tempat</td>
  </tr>
</table>
<br>
<table border="0" style="margin-left: 90px;">
  <tr>
    <td>Dalam rangka akan melaksanakan kegiatan yang telah terjadwal di dalam data kegiatan </td>
  </tr>
</table>
<table>
  <tr>
    <td><?php echo $i; ?> , maka dalam hal ini saya akan mengajukan anggaran sebesar <?php echo $row['kegiatan_anggaran']; ?> ,sebagaimana yang telah dirinci di dalam</td>
  </tr>
</table>
<table>
  <tr>
    <td>berkas kegiatan tersebut. Adapun rincian agenda kegiatan yang akan dilaksanakan, sebagai berikut :</td>
  </tr>
</table>
<table>
  <tr>
    <td></td>
  </tr>
</table>
<!-- isinya nih -->
<table border="1" style="margin-left: 0px;">
 <!-- <tr>
    <td>JUDUL KEGIATAN</td>
    <td style="width: 400px;">kwkww</td>
  </tr>
  <tr>
    <td>SUB JUDUL KEGIATAN</td>
    <td style="width: 400px;">kwkww</td>
  </tr>
-->
  <tr>
    <td colspan="2" style="text-align: center; width: 660px;">RINCIAN AGENDA KEGIATAN</td>
  </tr>
</table>
<table>
  <tr>
    <td colspan="2" style="text-align: center;"><textarea cols="92" rows="15"><?php echo $f; ?></textarea></td>
  </tr>
</table>
<!-- batas-->
<table border="0" style="margin-left: 90px;">
  <tr>
    <td >Sehubungan dengan hal tersebut, maka saya mengharapkan kemudahan untuk mengambil</td>
  </tr>
</table>
<table>
  <tr>
    <td>anggaran kegiatan tersebut. Agar kegiatan yang telah dijadwalkan dapat terlaksana dengan baik. Atas perhatiannya saya ucapkan terima kasih.</td>
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
    <td><br><br><br><br><?php echo $b  ;?></td>
  </tr>
  <tr>
    <td>NIP  : <?php echo $k; ?></td>
  </tr>
</table>

</tbody>
</table>
</body>
</html>