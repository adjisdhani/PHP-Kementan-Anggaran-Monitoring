<?php
$pelaporan_id=$_POST['pelaporan_id'];
$pelaporan_nama=$_POST['pelaporan_nama'];
$pelaporan_rincian=$_POST['pelaporan_rincian'];
$pelaporan_berkas=$_POST['pelaporan_berkas'];
$update="UPDATE pelaporan SET pelaporan_nama='$pelaporan_nama', pelaporan_rincian='$pelaporan_rincian', pelaporan_berkas='$pelaporan_berkas' WHERE pelaporan_id='$pelaporan_id'";
$result=mysql_query($update) or die(mysql_error());
?>
<script type="text/javascript">
    alert('Data Berhasil Diubah');
	window.location.href="index.php?page=pelaporan_riwayat_ditolak";
</script>