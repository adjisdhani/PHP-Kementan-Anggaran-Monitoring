<?php
$pengguna_id=$_POST['pengguna_id'];
$pengguna_nip=$_POST['pengguna_nip'];
$pengguna_nama=$_POST['pengguna_nama'];
$pengguna_tgllahir=$_POST['pengguna_tgllahir'];
$pengguna_alamat=$_POST['pengguna_alamat'];
$pengguna_telepon=$_POST['pengguna_telepon'];
$pengguna_bidang=$_POST['pengguna_bidang'];
$pengguna_subbidang=$_POST['pengguna_subbidang'];
$pengguna_status=$_POST['pengguna_status'];

$query="UPDATE pengguna SET pengguna_nip='$pengguna_nip', pengguna_nama='$pengguna_nama',bidang_id='$pengguna_bidang',subbidang_id='$pengguna_subbidang',pengguna_tgllahir='$pengguna_tgllahir',pengguna_alamat='$pengguna_alamat',pengguna_telepon='$pengguna_telepon',pengguna_status='$pengguna_status' where pengguna_id='$pengguna_id'";
$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=pengguna_lihat";
</script>
<?php
}
?>

