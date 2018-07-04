<?php
$kegiatan_no=$_POST['kegiatan_no'];
$kegiatan_nippegawai=$_POST['kegiatan_nippegawai'];
$kegiatan_judul=$_POST['kegiatan_judul'];
$kegiatan_subjudul=$_POST['kegiatan_subjudul'];
$kegiatan_tanggal=$_POST['kegiatan_tanggal'];
$kegiatan_tanggalakhir=$_POST['kegiatan_tanggalakhir'];
$kegiatan_anggaran=$_POST['kegiatan_anggaran'];
$kegiatan_berkas=$_POST['kegiatan_berkas'];

$query="INSERT INTO kegiatan VALUES ('','$kegiatan_no','$kegiatan_judul','$kegiatan_subjudul','$kegiatan_nippegawai','$kegiatan_tanggal','$kegiatan_anggaran','$kegiatan_berkas','','','','$kegiatan_tanggalakhir')";

$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=kegiatan_lihat_admin";
</script>
<?php
}
else{
	?>
    <script type="text/javascript">
    	alert('Data Gagal Disimpan');
    	window.location.href="index.php?page=kegiatan_lihat_admin";
    </script>
	<?php
}
?>

