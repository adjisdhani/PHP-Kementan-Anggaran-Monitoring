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
$pengajuan_id=$_GET['pengajuan_id'];
$a="SELECT * FROM pengajuan WHERE pengajuan_id='$pengajuan_id'";
$result=mysql_query($a);
$data=mysql_fetch_array($result);
?>
<body>
<form action="index.php?page=update_pengajuan_ditolak" method="post" id="form_status">
<h2 align="center">UBAH STATUS PENGAJUAN</h2>
<br><hr><br>
<table style="margin-left: 100px;">
<input type="hidden" name="pengajuan_id" value="<?php $data['pengajuan_id']; ?>">
<tr>
    <td> Ganti Status</td>
    <td>
        <input type="hidden" value="<?php echo $data['pengajuan_id']; ?>" name="pengajuan_id">
        <select name="status">
        <option value="0">----</option>
        <option value="1">Diterima</option>
        </select>
    </td>
</tr>
<tr>
	<td>Alasan Ganti Status</td>
	<td><textarea name="alasan_status" cols="50" rows="10"><?php echo $data[pengajuan_catatan]; ?></textarea></td>
</tr>
<tr>
	<td><input type="submit" name="pengajuan_status" value="Simpan"></input><input type="reset" name="pelaporan_status" value="Batal"></input></td>
</tr>
        
</form>
</table>
</body>