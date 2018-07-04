<?php
$pengajuan_id=$_POST['pengajuan_id'];
$pengajuan_status=$_POST['status'];
$pengajuan_catatan=$_POST['alasan_status'];
$pengguna_id=$_SESSION['pengguna_id'];
$update="UPDATE pengajuan SET pengajuan_status='$pengajuan_status',pengajuan_catatan='$pengajuan_catatan', pengajuan_pengterima='$pengguna_id',pengajuan_tangterima=NOW() where pengajuan_id='$pengajuan_id'";
$result=mysql_query($update) or die(mysql_error());
?>
<script type="text/javascript">
    alert('Data Berhasil Diubah');
	window.location.href="index.php?page=pengajuan_diterima";
</script>