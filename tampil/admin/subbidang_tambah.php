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

<script type="text/javascript">
    $(document).ready(function(){
      $('.anu').keypress(function(e){
      var regex = new RegExp(/^['a-zA-Z'.\\s]+$/);
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if(regex.test(str)){
        return true;
      }
      else{
        e.preventDefault();
        return false;
      }
    });
    });
    
    </script>
<form action="index.php?page=subbidang_tambah_proses" method="post" enctype="multipart/form-data">
<h2 align="center">TAMBAH DATA SUB BIDANG</h2>
<br><hr><br>
<table style="margin-left: 20px;">
	<tr>
		<td>Nama Sub Bidang</td>
		<td></td>
		<td><input type="text" name="subbidang_nama" required="required" class="
		anu"></td>
	</tr>
	<tr>
		<td>Dari Bidang</td>
		<td></td>
		<td>
			<select name="subbidang_bidang" class="lg" required="required">
			<option value="">-----</option>
            <?php $tampil=mysql_query("SELECT * FROM bidang ORDER BY bidang_id ASC");
            while($t=mysql_fetch_array($tampil)){
             echo "<option value='$t[bidang_id]'>$t[bidang_nama]</option>";
             }	
            ?>
			</select>

		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="subbidang_submit" value="SIMPAN"><input type="reset" name="bidang_reset" value="BATAL"></td>
	</tr>
</table>
</form>