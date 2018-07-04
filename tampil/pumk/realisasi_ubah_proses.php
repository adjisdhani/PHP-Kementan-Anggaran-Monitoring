<?php
$realisasi_id=$_POST['realisasi_id'];
$realisasi_no=$_POST['realisasi_no'];
$kegiatan_no=$_POST['kegiatan_id'];
$pengajuan_no=$_POST['pengajuan_id'];
$pelaporan_no=$_POST['pelaporan_id'];
$realisasi_anggaran=$_POST['realisasi_anggaran'];
$realisasi_rincian=$_POST['realisasi_rincian'];
$anggaran_sisa=$_POST['anggaran_sisa'];
$pengguna_id=$_POST['pengguna_id'];

$query="UPDATE realisasi SET kegiatan_id='$kegiatan_no', pengajuan_id='$pengajuan_no', pelaporan_id='$pelaporan_no', realisasi_anggaran='$realisasi_anggaran', realisasi_nama='$realisasi_rincian',realisasi_tanggal=NOW(),realisasi_tangpen=NOW() WHERE realisasi_id='$realisasi_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=realisasi_lihat_pumk";
</script>
<?php
}
?>
