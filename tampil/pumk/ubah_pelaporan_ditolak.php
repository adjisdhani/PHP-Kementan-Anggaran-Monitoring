<head>
	<style type="text/css">
	input[type=text], input[type=number], textarea,select,input[type=date],.lg {
    width: 100%;
    padding: 3px 20px;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}
	input[type=button], input[type=submit], input[type=reset] {
    background-color: black;
    border: none;
    color: white;
    padding: 8px 18px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<?php  
$pelaporan_id=$_GET['pelaporan_id'];
$a="SELECT * FROM pelaporan WHERE pelaporan_id='$pelaporan_id'";
$result=mysql_query($a);
$data=mysql_fetch_array($result);
?>
<body>
<form action="index.php?page=update_pelaporan_ditolak" method="post" id="form_status">
<h2 align="center">UBAH STATUS PELAPORAN</h2>
<br><hr><br>
<table style="margin-left: 100px;">
<input type="hidden" name="pelaporan_id" value="<?php $data['pelaporan_id']; ?>">
<tr>
    <td> Ganti Status</td>
    <td>
        <input type="hidden" value="<?php echo $data['pelaporan_id']; ?>" name="pelaporan_id">
        <select name="status">
        <option value="0">----</option>
        <option value="1">Diterima</option>
        </select>
    </td>
</tr>
<tr>
	<td>Alasan Ganti Status</td>
	<td><textarea name="alasan_status" cols="50" rows="10"><?php echo $data[pelaporan_catatan]; ?></textarea></td>
</tr>
<tr>
	<td><input type="submit" name="pelaporan_status" value="Simpan"></input><input type="reset" name="pelaporan_status" value="Batal"></input></td>
</tr>
        
</form>
</table>
</body>