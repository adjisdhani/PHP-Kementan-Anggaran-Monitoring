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

<p align="center" style="font-size: 25px; font-weight: bold">UBAH KEGIATAN</p>
<hr><br><br>
<form action="index.php?page=update_pengajuan_ditolak_pegawai" method="post" enctype="multipart/form-data">
<?php
$pengajuan_id=$_GET['pengajuan_id'];
$tampil="SELECT * FROM pengajuan LEFT JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id WHERE pengajuan_id = '$pengajuan_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pengajuan_no'];
$b=$row['pengajuan_id'];
$d=$row['pengajuan_nama'];
$e=$row['pengajuan_anggaran'];
$f=$row['pengajuan_rincian'];
?>
<input type="hidden" name="pengajuan_id" value="<?php echo $b;  ?>">
<table align="center">
	<tr>
		<td>Kode Pengajuan</td>
		<td></td>
		<td><input type="text" name="pengajuan_no" readonly="readonly" value="<?php echo $a; ?>"></td>
	</tr>
    <tr>
		<td>Nama Pengajuan</td>
		<td></td>
		<td><input type="text" name="pengajuan_nama" value="<?php echo $d; ?>"></td>
	</tr>
	<tr>
		<td>Anggaran Pengajuan</td>
		<td></td>
		<td><input type="number" name="pengajuan_anggaran" value="<?php echo $e; ?>"/></td>
	</tr>
	<tr>
		<td>Rincian Pengajuan</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<textarea name="pengajuan_rincian" cols="60px;" rows="10px"><?php echo $f; ?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="kegiatan_ubah" value="SIMPAN"><input type="reset" name="kegiatan_reset" value="BATAL"></td>
	</tr>
</table>
</form>
