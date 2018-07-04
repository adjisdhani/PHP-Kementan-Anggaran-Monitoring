<?php 
$penggguna_id = $_GET['pengguna_id'];
$pengguna_id=$_GET['pengguna_id'];
$tampil="SELECT * FROM pengguna where pengguna_id='$pengguna_id' ";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pengguna_nip'];
$b=$row['pengguna_nama'];
$c=$row['pengguna_tgllahir'];
$d=$row['pengguna_alamat'];
$e=$row['pengguna_telepon'];
$f=$row['pengguna_bidang'];
$g=$row['pengguna_status'];
$h=$row['pengguna_katasandi'];
$i=$row['pengguna_foto'];
?>

<table>
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><input type="text" name="pengguna_nip" value="<?php echo $a;  ?>" disabled=disabled></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="pengguna_nama" value="<?php echo $b;  ?>"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="text" name="pengguna_tgllahir" value="<?php echo $c;  ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="pengguna_alamat"><?php echo $d;  ?></textarea></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td>:</td>
		<td><input type="text" name="pengguna_telepon" value="<?php echo $e;  ?>"></td>
	</tr>
	<tr>
		<td>Bidang</td>
		<td>:</td>
		<td><input type="text" name="pengguna_bidang" value="<?php echo $f;  ?>"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><input type="text" name="pengguna_status" value="<?php
         echo $g;
    	 ?>"></td>
	</tr>
	<tr>
		<td>Kata Sandi</td>
		<td>:</td>
		<td><input type="text" name="pengguna_password" value="<?php echo $h;  ?>"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>:</td>
		<td><img src="assets/data/<?php echo $i;  ?>"></td>
	</tr>
</table>
