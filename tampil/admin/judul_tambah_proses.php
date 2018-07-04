<?php
$judul_nama=$_POST['judul_nama'];

$query="INSERT INTO judul VALUES ('','$judul_nama')";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=judul_lihat";
</script>
<?php
}
?>

