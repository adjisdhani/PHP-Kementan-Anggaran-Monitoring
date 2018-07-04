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
 .lg,input[type=text],textarea {
    width: 500px;
    padding: 10px 50px;
    margin: 1px 0;
    border: 0px solid black;
}
</style>
<?php
$realisasi_id=$_GET['realisasi_id'];
$query="SELECT * FROM realisasi LEFT JOIN kegiatan ON realisasi.kegiatan_id = kegiatan.kegiatan_id LEFT JOIN pengajuan ON realisasi.pengajuan_id = pengajuan.pengajuan_id LEFT JOIN pelaporan ON realisasi.pelaporan_id = pelaporan.pelaporan_id WHERE realisasi_id='$realisasi_id'";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result);

$a=$row['realisasi_no'];
$b=$row['kegiatan_no'];
$c=$row['pengajuan_no'];
$d=$row['pelaporan_no'];
$e=$row['kegiatan_anggaran'];
$f=$row['realisasi_anggaran'];
$g=$row['realisasi_sisa'];
$h=$row['realisasi_nama'];
?>

<p align="center" style="font-size: 30px;font-weight: bold;">Rincian Kode Realisasi</p>
<br><hr><br>

<p style="margin-left: -900px;"><a class="tombol" href="tampil/laporan/laporanrealisasi2.php?realisasi_id=<?php echo $realisasi_id; ?>" target="_NEW"><span class="fa fa-print" style="font-size: 12pt"></span>&nbsp;CETAK</a></p>
<br>
<table border="0" class="" align="left" style="margin-left: 20px;">
  <tr>
    <th>Kode Realisasi</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $a;  ?>"</td>

  </tr>
  <tr>
    <th>Kode Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $b;  ?>"</td>
  </tr>
  <tr>
   <th>Kode Pengajuan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $row['pengajuan_no'];  ?>"></td>
  </tr>
  <tr>
    <th>Kode Pelaporan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $d;  ?>"</td>
  </tr>
  <tr>
    <th>Anggaran Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php $angka=$e;
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan) ;?>"</td>
  </tr>
  <tr>
    <th>Realisasi Anggaran</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php $angka=$f;
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan) ;?>"</td>
  </tr>
    <th>Anggaran Sisa</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php $angka=$g;
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan) ;?>"</td>
  </tr>
</table>