<?php
$pelaporan_id=$_POST['pelaporan_id'];
$pelaporan_no=$_POST['pelaporan_no'];
$pelaporan_rincian=$_POST['pelaporan_rincian'];
$pelaporan_nama=$_POST['pelaporan_nama'];
$pelaporan_berkas=$_POST['pelaporan_berkas'];

$query="UPDATE pelaporan SET pelaporan_id='$pelaporan_id', pelaporan_no='$pelaporan_no', pelaporan_rincian='$pelaporan_rincian', pelaporan_nama='$pelaporan_nama',pelaporan_berkas='$pelaporan_berkas' WHERE pelaporan_id='$pelaporan_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=pelaporan_riwayat";
</script>
<?php
}
?>

