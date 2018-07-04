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
<form action="index.php?page=judul_tambah_proses" method="post" enctype="multipart/form-data">
<h2 style="margin-left: -130px;">TAMBAH DATA JUDUL KEGIATAN</h2>
<br><hr><br>
<table style="margin-left: 20px;" class="a">
	<tr>
		<td>Nama Judul Kegiatan</td>
		<td>:</td>
		<td><input type="text" name="judul_nama" required="required" class="anu"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="bidang_submit" value="SIMPAN"><input type="reset" name="bidang_reset" value="BATAL"></td>
	</tr>
</table>
</form>
