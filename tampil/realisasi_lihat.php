<style type="text/css">
    .btn{
        border-radius: 30px;
        background-color: blue;
        width: 130px;
        text-align:center;
        color : white;
        text-decoration-line: none;
    }
    p a{
        text-decoration-line: none;
        color: white;
    }
</style>
<?php
$query="SELECT * FROM realisasi INNER JOIN kegiatan ON realisasi.kegiatan_id = kegiatan.kegiatan_id INNER JOIN pengajuan ON realisasi.pengajuan_id = pengajuan.pengajuan_id INNER JOIN pelaporan ON realisasi.pelaporan_id = pelaporan.pelaporan_id ";
$result=mysql_query($query) or die(mysql_error());
?>
<!--
<div style="margin-bottom: 15px;" align="right">
    <form action="" method="post">
      <input type="text" name="inputan_pencarian" style="width:200px;padding: 5px;">
      <input type="submit" name="cari_kegiatan" value="CARI" style="padding: 3px;" />
    </form>
    </div>
-->

<!--<button onclick="window.print()">Cetak</button>-->

<p align="left"><a href="index.php?page=realisasikegiatan" class="btn">Tambah Realisasi Kegiatan</a></p>
<table id="realisasi" border="0" width="100%" bgcolor="lightgreen">
  <thead>
	<tr>
    <th>Nomor Realisasi</th>
		<th>Nomor Kegiatan</th>
		<th>Nomor Pengajuan</th>
		<th>Nomor Pelaporan</th>
    <th>Kegiatan Anggaran</th>
		<th>Realisasi Anggaran</th>
		<th>Realisasi Anggaran Sisa</th>
		<th>Realisasi Rincian</th>
        <th>Berkas Pengajuan</th>
        <th>Berkas Pelaporan</th>
	</tr>
  </thead>
  <tbody>
<?php
while ($data=mysql_fetch_array($result)) {
?>
    <tr>
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
        <td><?php echo $data['realisasi_rincian'];  ?></td>
        <td><a download href="assetsdoc/realisasi/pengajuan/<?php echo $data['realisasi_pengajuan'];   ?>">Unduh</td>
        <td><a download href="assetsdoc/realisasi/pelaporan/<?php echo $data['realisasi_pelaporan'];   ?>">Unduh</td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#realisasi').DataTable();
    });
</script>
</table>