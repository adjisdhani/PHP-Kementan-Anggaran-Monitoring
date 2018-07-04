<?php
$kegiatan_id=$_POST['kegiatan_id'];
$kegiatan_no=$_POST['kegiatan_no'];
$kegiatan_nippegawai=$_POST['kegiatan_nippegawai'];
$kegiatan_judul=$_POST['kegiatan_judul'];
$kegiatan_subjudul=$_POST['kegiatan_subjudul'];
$kegiatan_tanggal=$_POST['kegiatan_tanggal'];
$kegiatan_tanggalakhir=$_POST['kegiatan_tanggalakhir'];
$kegiatan_anggaran=$_POST['kegiatan_anggaran'];
$kegiatan_berkas=$_POST['kegiatan_berkas'];

$query="UPDATE kegiatan SET kegiatan_id='$kegiatan_id',kegiatan_no='$kegiatan_no',judul_id='$kegiatan_judul',subjudul_id='$kegiatan_subjudul',pengguna_id='$kegiatan_nippegawai', kegiatan_tanggal='$kegiatan_tanggal', kegiatan_anggaran='$kegiatan_anggaran',kegiatan_rincian='$kegiatan_berkas',kegiatan_tangakhir='$kegiatan_tanggalakhir'  WHERE kegiatan_id='$kegiatan_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Diubah');
	window.location.href="index.php?page=kegiatan_lihat_admin";
</script>
<?php
}
?>

