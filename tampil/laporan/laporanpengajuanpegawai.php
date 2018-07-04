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
$d3 = $_GET['pengajuan_status'];
$query="SELECT * FROM pengajuan LEFT JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id  WHERE pengajuan.pengajuan_status IN ('$d3%') AND pengajuan.pengajuan_tanggal BETWEEN '$d1' AND '$d2'";
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
<table id="example" border="0" width="100%" bgcolor="lightgreen">
  <thead>
  <tr>
  <th>Kode Pengajuan</th>
    <th>Nama Pengajuan</th>
    <th>Tanggal Pengajuan</th>
    <th>Anggaran Pengajuan</th>
  </tr>
  </thead>
  <tbody align="center">
<?php
while ($data=mysql_fetch_array($result)) {
?>
<tr>
      <td><?php echo $data['pengajuan_no'];  ?></a></td>
        <td><?php echo $data['pengajuan_nama'];  ?></td>
        <td><?php $timestamp=strtotime($data['pengajuan_tanggal']);
                $tanggal = date('d F Y',$timestamp);
                echo $tanggal;

      ?></td>
      <td><?php $angka=$data['pengajuan_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       ?></td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable( {
          "language": {
           "search": "Cari:",
           "emptyTable":"DATA TIDAK DITEMUKAN"
            }
            } );
            } );
</script>
</table>
</body>
</html>