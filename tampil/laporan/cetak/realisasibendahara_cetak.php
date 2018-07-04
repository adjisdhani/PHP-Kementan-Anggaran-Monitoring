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
  .s {
    width: 200px;
    padding: 3px 20px;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}
  input[type=button], input[type=submit], input[type=reset] {
    background-color: #036d0a;
    border: none;
    color: white;
    padding: 8px 18px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<p align="center" style="font-size: 25px; font-weight: bold">CETAK DATA REALISASI KEGIATAN</p>
<hr><br><br>

<form action="index.php" method="GET">
<input type="hidden" name="page" value="realisasibendahara_cetak">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="d1" class="s"><input type="date" name="d2" class="s"><input type="submit" value="Kirim" target='_blank'>
</form>
<!--batassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->
<?php
include '../../../koneksi.php';
$d1 = $_GET['d1'];
$d2 = $_GET['d2'];
$query="SELECT * FROM realisasi INNER JOIN kegiatan ON realisasi.kegiatan_id = kegiatan.kegiatan_id INNER JOIN pengajuan ON realisasi.pengajuan_id = pengajuan.pengajuan_id INNER JOIN pelaporan ON realisasi.pelaporan_id = pelaporan.pelaporan_id  WHERE realisasi.realisasi_tanggal BETWEEN '$d1' AND '$d2'";
$result=mysql_query($query) or die(mysql_error());
?>
<table id="example" border="0" width="100%" bgcolor="#036d0a">
<?php
if ($d1 != '' ) {
?>
<p style="margin-left: -970px;"><a class="tombol" href="tampil/laporan/laporanrealisasi3.php?d1=<?php echo $d1;?>&d2=<?php echo $d2;?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;CETAK</a></p>
<br><br>
  <thead>
  <tr style="color: white;">
	<th>Kode Realisasi</th>
	<th>Kode Kegiatan</th>
	<th>Kode Pengajuan</th>
	<th>Kode Pelaporan</th>
    <th>Kegiatan Anggaran</th>
	<th>Realisasi Anggaran</th>
	<th>Anggaran Sisa</th>
	<th>Berkas Pelaporan</th>
  </tr>
  </thead>
  <tbody align="center">
<?php
while ($data=mysql_fetch_array($result)) {
?>
<tr align="center">
    	<td><a href="index.php?page=detail_realisasi&realisasi_id=<?php echo $data['realisasi_id']; ?>"><?php echo $data['realisasi_no'];  ?></td>
    	<td><a href="index.php?page=detail_kegiatan&kegiatan_id=<?php echo $data['kegiatan_id']; ?>"><?php echo $data['kegiatan_no'];  ?></td>
    	<td><a href="index.php?page=detail_pengajuan&pengajuan_id=<?php echo $data['pengajuan_id']; ?>"><?php echo $data['pengajuan_no'];  ?></td>
    	<td><a href="index.php?page=detail_pelaporan&pelaporan_id=<?php echo $data['pelaporan_id']; ?>"><?php echo $data['pelaporan_no'];  ?></td>
    	<td><?php $angka=$data['kegiatan_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       ?></td>
      <td><?php $angka=$data['realisasi_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       ?></td>
        <td><?php $angka=$data['realisasi_sisa'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       ?></td>
        <td><a download href="assetsdoc/pelaporan/<?php echo $data['pelaporan_berkas'];   ?>">Unduh</td>
    </tr>
<?php
}
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