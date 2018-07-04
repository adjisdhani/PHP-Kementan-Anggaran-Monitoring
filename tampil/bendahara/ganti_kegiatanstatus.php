<?php
$kegiatan_id=$_POST['kegiatan_id'];
$kegiatan_status=$_POST['status'];
$pengguna_id=$_SESSION['pengguna_id'];
$update="UPDATE kegiatan SET kegiatan_status='$kegiatan_status',kegiatan_ceknama='$pengguna_id',kegiatan_tangcek=NOW() where kegiatan_id='$kegiatan_id'";
$result=mysql_query($update) or die(mysql_error());
?>
<script type="text/javascript">
	window.location.href="index.php?page=kegiatan_lihat_pumk";
</script>