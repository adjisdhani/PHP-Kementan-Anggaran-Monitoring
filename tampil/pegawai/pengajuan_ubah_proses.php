<?php
$pengajuan_id=$_POST['pengajuan_id'];
$pengajuan_no=$_POST['pengajuan_no'];
$pengajuan_anggaran=$_POST['pengajuan_anggaran'];
$pengajuan_berkas=$_POST['pengajuan_rincian'];
$pengajuan_nama=$_POST['pengajuan_nama'];

$query="UPDATE pengajuan SET pengajuan_id='$pengajuan_id', pengajuan_no='$pengajuan_no', pengajuan_anggaran='$pengajuan_anggaran', pengajuan_rincian='$pengajuan_berkas', pengajuan_nama='$pengajuan_nama' WHERE pengajuan_id='$pengajuan_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=pengajuan_riwayat";
</script>
<?php
}
?>

