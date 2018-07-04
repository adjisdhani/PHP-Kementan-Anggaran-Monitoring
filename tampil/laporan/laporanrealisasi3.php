<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body onload="window.print();">
<?php
include '../../koneksi.php';
$d1 = $_GET['d1'];
$d2 = $_GET['d2'];
$query="SELECT * FROM realisasi LEFT JOIN kegiatan ON realisasi.kegiatan_id = kegiatan.kegiatan_id LEFT JOIN pengajuan ON realisasi.pengajuan_id = pengajuan.pengajuan_id LEFT JOIN pelaporan ON realisasi.pelaporan_id = pelaporan.pelaporan_id WHERE realisasi_tanggal BETWEEN '$d1' AND '$d2'";
$result=mysql_query($query) or die(mysql_error());
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
<br>
<br>
<table border="1" width="100%" align="center">
  <thead>
  <tr>
    <th>Kode Realisasi</th>
    <th>Kode Kegiatan</th>
    <th>Kode Pengajuan</th>
    <th>Kode Pelaporan</th>
    <th>Kegiatan Anggaran</th>
    <th>Realisasi Anggaran</th>
    <th>Anggaran Sisa</th>
  </tr>
  </thead>
  <tbody>
<?php
while ($row=mysql_fetch_array($result)) {
?>
  <tr align="center" style="font-weight: bold;">
      <td><?php echo $row['realisasi_no'];  ?></a></td>
      <td><?php echo $row['kegiatan_no'];  ?></td>
      <td><?php echo $row['pengajuan_no'];  ?></td>
      <td><?php echo $row['pelaporan_no'];  ?></td>
      <td><?php echo $row['kegiatan_anggaran'];  ?></td>
      <td><?php echo $row['realisasi_anggaran'];  ?></td>
      <td><?php echo $row['realisasi_sisa']; ?></td>
    </tr>
<?php
}
?>
</tbody>
</table>
</body>
</html>