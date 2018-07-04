<fieldset>
	<legend>Ubah Pengguna</legend>

<form action="index.php?page=identitas_ubah_proses" method="post" enctype="multipart/form-data">
<?php
$pengguna_id = $_SESSION['pengguna_id'];
$tampil="SELECT * FROM pengguna where pengguna_id='$pengguna_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pengguna_nip'];
$b=$row['pengguna_nama'];
$c=$row['pengguna_tgllahir'];
$d=$row['pengguna_alamat'];
$e=$row['pengguna_telepon'];
$f=$row['bidang_id'];
$g=$row['pengguna_status'];
$h=$row['pengguna_password'];
$i=$row['pengguna_id'];
?>
<input type="hidden" name="pengguna_id" value="<?php echo $i;  ?>">
<table>
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><input type="text" name="pengguna_nip" value="<?php echo $a;  ?>" disabled="disabled"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="pengguna_nama" value="<?php echo $b;  ?>"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="pengguna_tgllahir" value="<?php echo $c;  ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="pengguna_alamat"><?php echo $d;  ?></textarea>
	</tr>
	<tr>
		<td>Telepon</td>
		<td>:</td>
		<td><input type="text" name="pengguna_telepon" value="<?php echo $e;  ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="pengguna_ubah" value="UBAH"><input type="reset" name="pengguna_reset" value="BATAL"></td>
	</tr>
</table>
</form>
</fieldset>		