<style type="text/css">
  .tombol{
        background:orange;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 0;
        padding: 10px 20px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 11pt;
    }
    .tombol2{
        background:black;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 0;
        padding: 10px 20px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 11pt;
    }
  .lg,input[type=text],textarea {
    width: 700px;
    padding: 10px 50px;
    margin: 1px;
    border: 0px solid black;
    font-weight: bold;
}
</style>

<?php
$pelaporan_id=$_GET['pelaporan_id'];
$query="SELECT * FROM pelaporan LEFT JOIN pengguna ON pelaporan.pengguna_id = pengguna.pengguna_id WHERE pelaporan_id='$pelaporan_id'";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result);

$a=$row['pelaporan_no'];
$b=$row['pengguna_nama'];
$c=$row['pelaporan_nama'];
$d=$row['pelaporan_tanggal'];
$e=$row['pelaporan_rincian'];
$g=$row['pelaporan_status'];
?>

<h2 style="margin-left: 40px;">Rincian Kode Pelaporan</h2>
<br><hr><br><br>
<table border="0" class="" align="left" style="margin-left: 70px;">
  <tr>
    <th>Kode Pelaporan</th>
    <td>&nbsp;:</td>
    <td><input type="text" value="<?php echo $a;  ?>"></td>
  </tr>
  <tr>
    <th>Nama Pegawai</th>
    <td>&nbsp;:</td>
    <td><input type="text" value="<?php echo $b;  ?>"></td>
  </tr>
  <tr>
    <th>Nama Pelaporan</th>
    <td>&nbsp;:</td>
    <td><input type="text" value="<?php echo $c;  ?>"></textarea></td>
  </tr>
  <tr>
    <th>Tanggal Pelaporan</th>
    <td>&nbsp;:</td>
    <td><input type="text" value='<?php $timestamp=strtotime($d);
                $tanggal = date('d-m-y',$timestamp);
                echo $tanggal;?>'></td>
  </tr>
  <tr>
    <th>Berkas Pelaporan</th>
    <td>&nbsp;:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="tombol2" download href="assetsdoc/pelaporan/<?php echo $row['pelaporan_berkas'];   ?>"><span class="fa fa-download" style="font-size: 15pt;"></span>&nbsp;Unduh</td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <th>Rincian Pelaporan</th>
    <td>&nbsp;:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="tombol" href="tampil/laporan/laporanpelaporan2.php?pelaporan_id=<?php echo $pelaporan_id; ?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;Cetak</td>
  </tr>
</table>  