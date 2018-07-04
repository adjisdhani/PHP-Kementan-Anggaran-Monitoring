<style type="text/css">
	input[type=text], input[type=number], .lg {
    width: 100%;
    padding: 3px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}
    textarea{
    padding: 3px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

    }
	input[type=button], input[type=submit], input[type=reset] {
    background-color: #036d0a;
    border: none;
    color: white;
    padding: 8px 18px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

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
<h2 align="center">UBAH IDENTITAS</h2>
<br><hr><br><br><br>
<table style="margin-left: 18px;">
	<tr>
		<td>NIP</td>
		<td><input type="text" name="pengguna_nip" value="<?php echo $a;  ?>" disabled="disabled"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="pengguna_nama" required="required" value="<?php echo $b;  ?>"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="date" name="pengguna_tgllahir" class="lg" required="required" value="<?php echo $c;  ?>"></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td><input type="number" name="pengguna_telepon" class="lg" required="required" value="<?php echo $e;  ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="pengguna_alamat" cols="40" rows="4" required="required"><?php echo $d;  ?></textarea>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="pengguna_ubah" value="SIMPAN"><input type="reset" name="pengguna_reset" value="BATAL"></td>
	</tr>
</table>
</form>
</fieldset>		