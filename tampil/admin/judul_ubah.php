<style type="text/css">
	input[type=text], input[type=number], .lg {
    width: 500px;
    padding: 3px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

    .a{
    	font-weight: bold;
    }

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

<p align="center" style="font-size: 25px; font-weight: bold">UBAH DATA JUDUL KEGIATAN</p>
<hr><br><br>
<form action="index.php?page=judul_ubah_proses" method="post" enctype="multipart/form-data">
<?php
$judul_id=$_GET['judul_id'];
$tampil="SELECT * FROM judul WHERE judul_id='$judul_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['judul_nama'];
$b=$row['judul_id'];
?>
<input type="hidden" name="judul_id" value="<?php echo $b;  ?>">
<table align="center" style="margin-left: 55px;" class="a">
	<tr>
		<td>Nama Judul Kegiatan</td>
		<td>:</td>
		<td><input type="text" name="judul_nama" value="<?php echo $a;  ?>"></td>
	</tr>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="judul_ubah" value="UBAH"><input type="reset" name="judul_reset" value="BATAL"></td>
	</tr>
</table>
</form>
