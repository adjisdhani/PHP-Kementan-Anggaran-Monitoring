<?php
$pengguna_id = $_SESSION['pengguna_id'];
$pengguna_nama=$_POST['pengguna_nama'];
$pengguna_tgllahir=$_POST['pengguna_tgllahir'];
$pengguna_alamat=$_POST['pengguna_alamat'];
$pengguna_telepon=$_POST['pengguna_telepon'];


$query="UPDATE pengguna SET pengguna_nama='$pengguna_nama',pengguna_tgllahir='$pengguna_tgllahir',pengguna_alamat='$pengguna_alamat',pengguna_telepon='$pengguna_telepon'where pengguna_id='$pengguna_id'";

$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php";
</script>
<?php
}
else 
{
?>
<script type="text/javascript">
	alert('Data Gagal Diubah');
    window.location.href="index.php?page=identitas_ubah";
</script>
<?php
}
?>

