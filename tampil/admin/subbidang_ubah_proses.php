<?php
$subbidang_id=$_POST['subbidang_id'];
$subbidang_nama=$_POST['subbidang_nama'];

$query="UPDATE subbidang SET subbidang_id='$subbidang_id',subbidang_nama='$subbidang_nama'  where subbidang_id='$subbidang_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=subbidang_lihat";
</script>
<?php
}
?>

