<?php
$bidang_nama=$_POST['bidang_nama'];

$query="INSERT INTO bidang VALUES ('','$bidang_nama')";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=bidang_lihat";
</script>
<?php
}
?>

