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

<h2 align="center">UBAH DATA SUB BIDANG</h2>
<hr><br><br>
<form action="index.php?page=subbidang_ubah_proses" method="post" enctype="multipart/form-data">
<?php
$subbidang_id=$_GET['subbidang_id'];
$tampil="SELECT * FROM subbidang WHERE subbidang_id='$subbidang_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['subbidang_nama'];
$b=$row['subbidang_id'];
?>
<input type="hidden" name="subbidang_id" value="<?php echo $b;  ?>">
<table align="center" style="margin-left: 20px;">
	<tr>
		<td>Nama Sub Bidang</td>
		<td>:</td>
		<td><input type="text" name="subbidang_nama" value="<?php echo $a;  ?>"></td>
	</tr>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="subbidang_ubah" value="UBAH"><input type="reset" name="subbidang_reset" value="BATAL"></td>
	</tr>
</table>
</form>
