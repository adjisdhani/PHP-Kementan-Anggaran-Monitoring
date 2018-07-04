<style type="text/css">
	input[type=text], input[type=number],textarea,select,input[type=date],input[type=number], .lg {
    width: 100%;
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

<p align="center" style="font-size: 25px; font-weight: bold">UBAH DATA PELAPORAN</p>
<hr><br><br>
<form action="index.php?page=update_pelaporan_ditolak_pegawai" method="post" enctype="multipart/form-data">
<?php
$pelaporan_id=$_GET['pelaporan_id'];
$tampil="SELECT * FROM pelaporan LEFT JOIN pengguna ON pelaporan.pengguna_id = pengguna.pengguna_id WHERE pelaporan_id = '$pelaporan_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pelaporan_no'];
$b=$row['pelaporan_id'];
$d=$row['pelaporan_nama'];
$e=$row['pelaporan_rincian'];
$f=$row['pelaporan_berkas'];
?>
<input type="hidden" name="pelaporan_id" value="<?php echo $b;  ?>">
<table align="center">
	<tr>
		<td>Kode Pelaporan</td>
		<td></td>
		<td><input type="text" name="pelaporan_no" readonly="readonly" value="<?php echo $a; ?>"></td>
	</tr>
    <tr>
		<td>Nama Pelaporan</td>
		<td></td>
		<td><input type="text" name="pelaporan_nama" value="<?php echo $d; ?>"></td>
	</tr>
	<tr>
		<td>Rincian Pelaporan</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<textarea name="pelaporan_rincian" cols="60px;" rows="10px"><?php echo $e; ?></textarea></td>
	</tr>
	<tr>
		<td>Berkas Pelaporan</td>
		<td></td>
		<td><input type="file" name="pelaporan_berkas"><?php echo $row['pelaporan_berkas'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="kegiatan_ubah" value="SIMPAN"><input type="reset" name="kegiatan_reset" value="BATAL"></td>
	</tr>
</table>
</form>
