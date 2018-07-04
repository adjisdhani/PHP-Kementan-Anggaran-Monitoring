<?php
$judul_id=$_POST['judul_id'];
$judul_nama=$_POST['judul_nama'];

$query="UPDATE judul SET judul_id='$judul_id',judul_nama='$judul_nama'  where judul_id='$judul_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Diubah');
	window.location.href="index.php?page=judul_lihat";
</script>
<?php
}
?>

