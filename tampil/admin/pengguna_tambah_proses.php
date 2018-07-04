<?php
$pengguna_nip=$_POST['pengguna_nip'];
$pengguna_nama=$_POST['pengguna_nama'];
$pengguna_bidang=$_POST['pengguna_bidang'];
$pengguna_subbidang=$_POST['pengguna_subbidang'];
$pengguna_tgllahir=$_POST['pengguna_tgllahir'];
$pengguna_alamat=$_POST['pengguna_alamat'];
$pengguna_telepon=$_POST['pengguna_telepon'];
$pengguna_status=$_POST['pengguna_status'];
$pengguna_katasandi=$_POST['pengguna_katasandi'];

$query="INSERT INTO pengguna VALUES ('','$pengguna_nip','$pengguna_nama','$pengguna_bidang','$pengguna_subbidang','$pengguna_tgllahir','$pengguna_alamat','$pengguna_telepon','$pengguna_status','$pengguna_katasandi')";

$result=mysql_query($query) or die(mysql_error());

if ($result) {
?>
<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	window.location.href="index.php?page=pengguna_lihat";
</script>
<?php
}
else{
	?>
    <script type="text/javascript">
    	alert('Data Gagal Disimpan');
    	window.location.href="index.php?page=pengguna_lihat";
    </script>
	<?php
}
?>

