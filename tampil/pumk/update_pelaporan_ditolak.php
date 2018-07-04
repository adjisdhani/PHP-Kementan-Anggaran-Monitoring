<?php
$pelaporan_id=$_POST['pelaporan_id'];
$pelaporan_status=$_POST['status'];
$pelaporan_catatan=$_POST['alasan_status'];
$pengguna_id=$_SESSION['pengguna_id'];
$update="UPDATE pelaporan SET pelaporan_status='$pelaporan_status',pelaporan_catatan='$pelaporan_catatan',pelaporan_pengterima='$pengguna_id',pelaporan_tangterima=NOW() where pelaporan_id='$pelaporan_id'";
$result=mysql_query($update) or die(mysql_error());
?>
<script type="text/javascript">
    alert('Status Berhasil Diubah');
	window.location.href="index.php?page=pelaporan_ditolak";
</script>