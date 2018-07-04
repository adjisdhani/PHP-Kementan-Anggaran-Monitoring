<?php
$realisasi_no=$_POST['realisasi_no'];
$kegiatan_no=$_POST['kegiatan_id'];
$pengajuan_no=$_POST['pengajuan_id'];
$pelaporan_no=$_POST['pelaporan_id'];
$realisasi_anggaran=$_POST['realisasi_anggaran'];
$realisasi_rincian=$_POST['realisasi_rincian'];
$anggaran_sisa=$_POST['anggaran_sisa'];
$pengguna_id=$_POST['realisasi_pengguna'];
$pengguna_nama=$_POST['realisasi_penggunanama'];
$pengguna_nip=$_POST['realisasi_penggunanip'];

$query="INSERT INTO realisasi VALUES ('','$realisasi_no','$kegiatan_no','$pengajuan_no','$pelaporan_no','$realisasi_anggaran','$anggaran_sisa','$realisasi_rincian',NOW(),'$pengguna_id','$pengguna_nama','$pengguna_nip')";

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
