<?php
$pengajuan_no=$_POST['pengajuan_no'];
$pengguna_id=$_SESSION['pengguna_id'];
$pengajuan_nama=$_POST['pengajuan_nama'];
$pengajuan_tanggal=$_POST['pengajuan_tanggal'];
$pengajuan_anggaran=$_POST['pengajuan_anggaran'];
$pengajuan_rincian=$_POST['pengajuan_rincian'];

$query="INSERT INTO pengajuan VALUES ('','$pengajuan_no','$pengguna_id','$pengajuan_nama',NOW(),'$pengajuan_anggaran','$pengajuan_rincian','','','','','','','')";
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

