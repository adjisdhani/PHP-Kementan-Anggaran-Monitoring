<style type="text/css">
    input[type=text], input[type=number], .lg {
    width: 530px;
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

<h2  style="margin-left: -130px;">UBAH DATA SUB JUDUL KEGIATAN</h2>
<hr><br><br>
<form action="index.php?page=subjudul_ubah_proses" method="post" enctype="multipart/form-data">
<?php
$subjudul_id=$_GET['subjudul_id'];
$tampil="SELECT * FROM subjudul WHERE subjudul_id='$subjudul_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['subjudul_nama'];
$b=$row['subjudul_id'];
?>
<input type="hidden" name="subjudul_id" value="<?php echo $b;  ?>">
<table align="center" style="margin-left: 20px;" class="a">
	<tr>
		<td>Nama Sub Judul Kegiatan</td>
		<td>:</td>
		<td><input type="text" name="subjudul_nama" value="<?php echo $a;  ?>"></td>
	</tr>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="subjudul_ubah" value="UBAH"><input type="reset" name="subjudul_reset" value="BATAL"></td>
	</tr>
</table>
</form>
