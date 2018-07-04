<?php
$subjudul_id=$_POST['subjudul_id'];
$subjudul_nama=$_POST['subjudul_nama'];

$query="UPDATE subjudul SET subjudul_id='$subjudul_id',subjudul_nama='$subjudul_nama'  where subjudul_id='$subjudul_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Diubah');
	window.location.href="index.php?page=subjudul_lihat";
</script>
<?php
}
?>

