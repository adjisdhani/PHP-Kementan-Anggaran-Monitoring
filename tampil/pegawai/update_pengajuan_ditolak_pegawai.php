<?php
$pengajuan_id=$_POST['pengajuan_id'];
$pengajuan_nama=$_POST['pengajuan_nama'];
$pengajuan_anggaran=$_POST['pengajuan_anggaran'];
$pengajuan_rincian=$_POST['pengajuan_rincian'];
$update="UPDATE pengajuan SET pengajuan_nama='$pengajuan_nama', pengajuan_anggaran='$pengajuan_anggaran', pengajuan_rincian='$pengajuan_rincian' WHERE pengajuan_id='$pengajuan_id'";
$result=mysql_query($update) or die(mysql_error());
?>
<script type="text/javascript">
    alert('Data Berhasil Diubah');
	window.location.href="index.php?page=pengajuan_riwayat_ditolak";
</script>