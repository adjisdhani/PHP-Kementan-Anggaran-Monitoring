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
    width: 700px;
    padding: 10px 50px;
    margin: 1px;
    border: 0px solid black;
    font-weight: bold;
}
</style>

<?php
$pengajuan_id=$_GET['pengajuan_id'];
$query="SELECT * From  pengajuan LEFT JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id WHERE pengajuan_id='$pengajuan_id'  ";
$result=mysql_query($query) or die(mysql_error());

$row=mysql_fetch_array($result);

$a=$row['pengajuan_no'];
$b=$row['pengguna_nama'];
$c=$row['pengajuan_nama'];
$d=$row['pengajuan_tanggal'];
$e=$row['pengajuan_anggaran'];
$f=$row['pengajuan_rincian'];
?>
<input type="hidden" name="pengguna_id" value="<?php echo $i;  ?>">
<h2 style="margin-left: 40px;">Rincian Kode Pengajuan</h2>
<br><hr><br><br>
<table style="margin-left: 20px;" align="left">
  <tr>
    <th>Kode Pengajuan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $a;  ?>" readonly="readonly"></td>
  </tr>
  <tr>
    <th>Nama Pegawai</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $b;  ?>"readonly="readonly"></td>
  </tr>
  <tr>
    <th>Nama Pengajuan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php echo $c;  ?>"readonly="readonly"></td>
  </tr>
  <tr>
    <th>Tanggal Pengajuan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php $timestamp=strtotime($d);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;?>"readonly="readonly"></td>
  </tr>
  <tr>
    <th>Anggaran Pengajuan</th>
    <td>&nbsp;:</td>
    <td><input type='text' value="<?php $angka=$e;
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);?>"readonly="readonly"></td>
  </tr>
  <tr>
    <th>Rincian Pengajuan</th>
    <td>&nbsp;:</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="tombol" href="tampil/laporan/laporanpengajuan2.php?pengajuan_id=<?php echo $pengajuan_id; ?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;CETAK</a></td>
  </tr>
</table>  