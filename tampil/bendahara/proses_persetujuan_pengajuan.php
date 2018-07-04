<?php
$pengajuan_id=$_POST['pengajuan_id'];
$pengajuan_status=$_POST['status'];
$pengguna_id=$_SESSION['pengguna_id'];
$update="UPDATE pengajuan SET pengajuan_statusben='$pengajuan_status', pengajuan_ben='$pengguna_id',pengajuan_tangsetuju=NOW() where pengajuan_id='$pengajuan_id'";
$result=mysql_query($update) or die(mysql_error());
?>
<script type="text/javascript">
	window.location.href="index.php?page=pengajuanditerimapumk";
</script>