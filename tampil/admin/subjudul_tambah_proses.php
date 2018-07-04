<?php
$subjudul_nama=$_POST['subjudul_nama'];

$query="INSERT INTO subjudul VALUES ('','$subjudul_nama')";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=subjudul_lihat";
</script>
<?php
}
?>

