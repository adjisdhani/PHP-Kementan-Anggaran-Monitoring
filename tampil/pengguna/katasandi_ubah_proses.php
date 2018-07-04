<?php
$pengguna_id = $_SESSION['pengguna_id'];
$katasandi_lama = $_POST['katasandi_lama'];
$katasandi_baru = $_POST['katasandi_baru'];
$querycek = "SELECT pengguna_katasandi FROM pengguna WHERE pengguna_id = '$pengguna_id'";
$resultcek = mysql_query($querycek);
$datacek = mysql_fetch_array($resultcek);
$passlamadb = $datacek['pengguna_katasandi'];


if ($katasandi_lama == $passlamadb) {
	$queryupdate = "UPDATE pengguna SET pengguna_katasandi = '$katasandi_baru' WHERE pengguna_id = '$pengguna_id'";
	$resultupdate = mysql_query($queryupdate);
?>
<script type="text/javascript">
	alert('Kata sandi berhasil diubah');
	window.location.href="index.php";
</script>
<?php
}
else {
?>
<script type="text/javascript">
	alert('Kata sandi gagal diubah');
	window.location.href="index.php?page=katasandi_ubah";
</script>
<?php
}
?>