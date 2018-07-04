<?php
$pelaporan_no=$_POST['pelaporan_no'];
$pengguna_id=$_SESSION['pengguna_id'];
$pelaporan_nama=$_POST['pelaporan_nama'];
$pelaporan_tanggal=$_POST['pelaporan_tanggal'];
$pelaporan_rincian=$_POST['pelaporan_rincian'];
$pelaporan_berkas=$_FILES['pelaporan_berkas']['name'];

$query="INSERT INTO pelaporan VALUES ('','$pelaporan_no','$pengguna_id','$pelaporan_nama',NOW(),'$pelaporan_rincian','$pelaporan_berkas','','','','')";

copy($_FILES['pelaporan_berkas']['tmp_name'], "assetsdoc/pelaporan/".$pelaporan_berkas);
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

