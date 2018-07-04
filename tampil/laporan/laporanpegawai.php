<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body onload="window.print();">
<?php
include '../../koneksi.php';
$d1 = $_GET['pengguna_bidang'];
$d2 = $_GET['pengguna_subbidang'];
$d3 = $_GET['pengguna_status'];
$query="SELECT * FROM pengguna LEFT JOIN bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id WHERE pengguna.bidang_id IN ('$d1') AND pengguna.subbidang_id IN ('$d2%') AND pengguna_status IN ('$d3%')";
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
<!--
<table>
  <tr>
    <td>Bidang &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $data['bidang_nama']; ?></td>
  </tr>
  <tr>
    <td>Sub Bidang &nbsp; &nbsp; &nbsp; : <?php echo $data['subbidang_nama']; ?></td>
  </tr>
</table>-->
<br>
<table id="lihatkegiatan" border="-3" width="100%" align="center">
  <thead>
  <tr>
    <th>NIP</th>
    <th>Nama</th>
    <th>Telepon</th>
    <th>Bidang</th>
    <th>Sub Bidang</th>
    <th>Kata Sandi</th>
  </tr>
  </thead>
  <tbody>
<?php
while ($row=mysql_fetch_array($result)) {
?>
  <tr align="center" style="font-weight: bold;">
      <td><?php echo $row['pengguna_nip'];  ?></a></td>
      <td><?php echo $row['pengguna_nama'];  ?></td>
      <td><?php echo $row['pengguna_telepon'];  ?></td>
      <td><?php echo $row['bidang_nama'];  ?></td>
      <td><?php echo $row['subbidang_nama'];  ?></td>
      <!--
      <td>
      <?php
         if ($data['pengguna_status']=='1') {
           echo "Admin";
         }
       elseif ($data['pengguna_status']=='2'){
        echo "Pegawai";
       } 
       elseif ($data['pengguna_status']=='3'){
        echo "PUMK";
       } 
       elseif ($data['pengguna_status']=='4'){
        echo "Bendahara";
       } 

       ?>
        
      </td>-->
      <td><?php echo $row['pengguna_katasandi'];  ?></td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lihatkegiatan').DataTable( {
          "language": {
           "search": "Cari:"

            }
            } );
            } );
</script>
</table>
</body>
</html>