<?php
$subbidang_nama=$_POST['subbidang_nama'];
$subbidang_bidang=$_POST['subbidang_bidang'];

$query="INSERT INTO subbidang VALUES ('','$subbidang_nama','$subbidang_bidang')";
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

