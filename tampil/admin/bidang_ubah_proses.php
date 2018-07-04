<?php
$bidang_id=$_POST['bidang_id'];
$bidang_nama=$_POST['bidang_nama'];

$query="UPDATE bidang SET bidang_id='$bidang_id',bidang_nama='$bidang_nama'  where bidang_id='$bidang_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Diubah');
	window.location.href="index.php?page=bidang_lihat";
</script>
<?php
}
?>

