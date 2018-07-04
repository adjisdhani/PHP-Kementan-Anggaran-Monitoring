<style type="text/css">
	input[type=text], input[type=number], .lg {
    width: 300px;
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

<h2 align="center">UBAH DATA BIDANG</h2>
<hr><br><br>
<form action="index.php?page=bidang_ubah_proses" method="post" enctype="multipart/form-data">
<?php
$bidang_id=$_GET['bidang_id'];
$tampil="SELECT * FROM bidang WHERE bidang_id='$bidang_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['bidang_nama'];
$b=$row['bidang_id'];
?>
<input type="hidden" name="bidang_id" value="<?php echo $b;  ?>">
<table style="margin-left: 20px;">
	<tr>
		<td>Nama Bidang</td>
		<td>:</td>
		<td><input type="text" name="bidang_nama" value="<?php echo $a;  ?>"></td>
	</tr>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="bidang_ubah" value="UBAH"><input type="reset" name="bidang_reset" value="BATAL"></td>
	</tr>
</table>
</form>
