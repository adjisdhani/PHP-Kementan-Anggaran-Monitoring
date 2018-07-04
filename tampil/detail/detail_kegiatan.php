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
    width: 80%;
    padding: 10px 50px;
    margin: 1px 0;
    border: none;
}
</style>

<?php
$kegiatan_id=$_GET['kegiatan_id'];
$query="SELECT * FROM kegiatan LEFT JOIN judul ON kegiatan.judul_id=judul.judul_id LEFT JOIN subjudul ON kegiatan.subjudul_id=subjudul.subjudul_id LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip LEFT JOIN bidang ON pengguna.bidang_id =bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id=subbidang.subbidang_id WHERE kegiatan_id='$kegiatan_id'";
$result=mysql_query($query) or die(mysql_error());

$row=mysql_fetch_array($result);

$k=$row['kegiatan_no'];
$a=$row['pengguna_nama'];
$b=$row['bidang_nama'];
$c=$row['subbidang_nama'];
$d=$row['judul_nama'];
$e=$row['subjudul_nama'];
$g=$row['kegiatan_tanggal'];
$l=$row['kegiatan_tangakhir'];
$h=$row['kegiatan_anggaran'];
$i=$row['kegiatan_berkas'];
$j=$row['kegiatan_status'];
?>
<input type="hidden" name="pengguna_id" value="<?php echo $i;  ?>">
<p align="center" style="font-size: 30px;font-weight: bold;">Rincian Kode Kegiatan</p>
<br><hr><br>
<table border="0" class="" align="left" style="margin-left: 20px;">
  <tr>
    <th>Kode Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $k;  ?>"</td>
  </tr>
  <tr>
    <th>Nama Pegawai</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $a;  ?>"</td>
  </tr>
  <tr>
   <th>Bidang Pegawai</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $b;  ?>"</td>
  </tr>
  <tr>
    <th>Sub Bidang Pegawai</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $c;  ?>"</td>
  </tr>
  <tr>
    <th>Judul Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $d;  ?>"</td>
  </tr>
  <tr>
    <th>Sub Judul Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $e;  ?>"</td>
  </tr>
  <tr>
    <th>Tanggal Awal Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php $timestamp=strtotime($g);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;?>"</td>
  </tr>
  <tr>
    <th>Tanggal Akhir Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php $timestamp=strtotime($l);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;?>"</td>
  </tr>
  <tr>
    <th>Anggaran Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php $angka=$h;
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan) ;?>"</td>
  </tr>
  <tr>
    <th>Status Kegiatan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php
         if ($row['kegiatan_status']=='0') {
           echo "Belum Dilaksanakan";
         }
         elseif ($row['kegiatan_status']=='1') {
           echo "Sudah  Dilaksanakan";
        } 
        elseif ($row['kegiatan_status']=='2') {
           echo "Sedang Dilaksanakan";
        } 
       ?>"</td>
  </tr>
  <tr>
    <th>Rincian Kegiatan</th>
    <td>&nbsp;:</td>
    <td class="lg"><a class="tombol" href="tampil/laporan/laporankegiatan2.php?kegiatan_id=<?php echo $kegiatan_id; ?>" target="_NEW"><span class="fa fa-print" style="font-size: 12pt"></span>&nbsp;CETAK</a></td>
  </tr>
</table>  