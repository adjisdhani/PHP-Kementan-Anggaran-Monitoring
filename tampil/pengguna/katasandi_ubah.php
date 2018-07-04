<style type="text/css">
	input[type=text], input[type=number], .lg {
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
<form action="index.php?page=katasandi_ubah_proses" method="POST">
<h2 align="center">UBAH KATA SANDI</h2>
<br><hr><br><br>
<table style="margin-left: 12px;">
	<tr>
		<td>Kata sandi lama</td>
		<td><input type="text" name="katasandi_lama" required="required"></td>
	</tr>
	<tr>
		<td>Kata sandi baru</td>
		<td><input type="text" name="katasandi_baru" required="required"></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="SIMPAN"><input type="reset" value="BATAL"></td>
	</tr>
</table>
</form>