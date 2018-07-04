<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body onload="window.print();">
<?php
$no='001';
include '../../koneksi.php';
$realisasi_id=$_GET['realisasi_id'];
$tampil="SELECT * FROM realisasi LEFT JOIN kegiatan ON realisasi.kegiatan_id = kegiatan.kegiatan_id LEFT JOIN pengajuan ON realisasi.pengajuan_id = pengajuan.pengajuan_id LEFT JOIN pelaporan ON realisasi.pelaporan_id = pelaporan.pelaporan_id WHERE realisasi_id='$realisasi_id'";
$query=mysql_query($tampil);
$row=mysql_fetch_array($query);

$a=$row['realisasi_no'];
$b=$row['kegiatan_no'];
$c=$row['pengajuan_no'];
$d=$row['pelaporan_no'];
$e=$row['kegiatan_anggaran'];
$f=$row['realisasi_anggaran'];
$g=$row['realisasi_sisa'];
$h=$row['realisasi_nama'];
$i=$row['pelaporan_rincian'];
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
    <td>Hal &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;: <?php echo $row['realisasi_nama'] ?> </td>
  </tr>
</table>
<!--<p align="center" style="font-size: 25px; font-weight: bold">RINCIAN REALISASI KEGIATAN</p>
<hr><br>-->
<br><br>
<table border="0" style="margin-left: 90px;">
  <tr>
    <td>Berdasarkan dengan realisasi kegiatan yang telah dibuat dengan kode realisasi <?php echo $a ?>, </td>
  </tr>
</table>
<table>
  <tr>
    <td> maka dalam hal ini dinyatakan bahwa kode kegiatan dengan kode <u><?php echo $b; ?></u> dengan anggaran sebesar <b><u><?php $angka=$e;
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan)  ?></u></b> ,<b>TELAH DILAKSANAKAN</b> dengan kode pengajuan <u><?php echo $c; ?> </u>dan kode pelaporan <u><?php echo $d; ?></u>. Adapun rincian realisasi kegiatan yang telah dilaksanakan sebagai berikut :</td>
  </tr>
</table>
<table>
  <tr>
    <td></td>
  </tr>
</table>
<br>
<br>
<!-- isinya nih -->
<table border="1" style="margin-left: 0px;">
  <tr>
    <td colspan="2" style="text-align: center; width: 680px;">RINCIAN REALISASI KEGIATAN</td>
  </tr>
</table>
<table>
  <tr>
    <td colspan="2" style="text-align: center;"><textarea cols="92" rows="20"><?php echo $i; ?></textarea></td>
  </tr>
</table>
<table border="0" style="margin-left: 90px;">
  <tr>
    <td>Berdasarkan dengan realisasi kegiatan yang telah dilaksanakan, maka dapat dinyatakan</td>
  </tr>
</table>
<table>
  <tr>
    <td> bahwa kegiatan tersebut mempunyai anggaran dasar sebesar<b><u> <?php $angka=$row['kegiatan_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan)  ?></u></b>, terpakai di dalam realisasi kegiatan sebesar<b><u> <?php $angka=$row['realisasi_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan)  ?></u></b>, dan mempunyai sisa anggaran sebesar<b><u> <?php $angka=$row['realisasi_sisa'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan) ?></u></b>. Sekian laporan realisasi kegiatan yang telah saya buat. Atas perhatiannya saya ucapkan terima kasih.</td>
  </tr>
</table>
<!-- batas-->
<br>
<table border="0" style="margin-left: 500px;">
  <tr>
    <td ><br>Jakarta , <?php $timestamp=strtotime($row['realisasi_tanggal']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;?></td>
  </tr>
  <tr>
    <td >Pemegang Uang Muka Kegiatan,</td>
  </tr>
  <tr>
    <td><br><br><br><br><?php echo $row['realisasi_nmpeng'] ;?></td>
  </tr>
  <tr>
    <td>NIP  : <?php echo $row['realisasi_nippeng'] ?></td>
  </tr>
</table>
</tbody>
</table>
</body>
</html>