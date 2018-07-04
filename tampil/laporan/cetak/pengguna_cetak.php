<style type="text/css">
  .tombol{
      background:orange;
      color: white;
      border-top: 0;
      border-right: 0;
      border-left: 0;
      border-bottom: 0;
      padding: 10px 20px;
      text-decoration: none;
      font-family: sans-serif;
      font-size: 11pt;
    }
  .s {
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
    padding: 10px 20px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-bottom: 0;
    font-size: 11pt;
}
</style>

<body>
<p align="center" style="font-size: 25px; font-weight: bold">CETAK DATA PENGGUNA</p>
<hr><br>
<form action="index.php" method="GET">
<!--<p style="font-weight: bold; margin-left: -100px;">BIDANG &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBBIDANG  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSTATUS</p>-->
<input type="hidden" name="page" value="pengguna_cetak">
  			<select name="pengguna_bidang" id="pengguna_bidang" class="s" required="required">
			<option value="0">--</option>
            <?php $tampil=mysql_query("SELECT * FROM bidang ORDER BY bidang_id ASC");
            while($t=mysql_fetch_array($tampil)){
             echo "<option value='$t[bidang_id]'>$t[bidang_nama]</option>";
             }
			?>
			</select><select name="pengguna_subbidang" id="pengguna_subbidang" class="s">
			<option value="">--</option>
			</select><select name="pengguna_status" class="s">
            <option value="">--</option>
        	<option value="2">Pegawai</option>
        	<option value="3">PUMK</option>
          <option value="4">Bendahara</option>
        </select><input type="submit" value="Kirim"><br>
</form>
<!--batassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->
<?php
include '../../../koneksi.php';
$d1 = $_GET['pengguna_bidang'];
$d2 = $_GET['pengguna_subbidang'];
$d3 = $_GET['pengguna_status'];
$query="SELECT * FROM pengguna LEFT JOIN bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id WHERE pengguna.bidang_id IN ('$d1') AND pengguna.subbidang_id IN ('$d2%') AND pengguna.pengguna_status IN ('$d3%') ";
$result=mysql_query($query) or die(mysql_error());
?>

<table id="example" border="0" width="100%" bgcolor="#036d0a">
<?php
if ($d1 != '') {
?>
<br>
<p style="margin-left: -970px;"><a class ='tombol' href="tampil/laporan/laporanpegawai.php?pengguna_bidang=<?php echo $d1;?>&pengguna_subbidang=<?php echo $d2;?>&pengguna_status=<?php echo $d3;?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;CETAK</a></p>
<br>
  <thead>
  <tr style="color: white;">
		<th>NIP</th>
		<th>Nama</th>
		<th>Telepon</th>
  </tr>
  </thead>
  <tbody align="center">
<?php
while ($data=mysql_fetch_array($result)) {
?>
<tr>
    	<td><?php echo $data['pengguna_nip'];  ?></a></td>
    	<td><?php echo $data['pengguna_nama'];  ?></td>
    	<td><?php echo $data['pengguna_telepon'];  ?></td>
    	<!--<td><?php echo $data['pengguna_katasandi'];  ?></td>-->
    </tr>
<?php
}
}
?>
</tbody>
<script type="text/javascript">
$("#pengguna_bidang").change(function(){
    
        // variabel dari nilai combo box provinsi
        var bidang_id = $("#pengguna_bidang").val();
        
        
        // mengirim dan mengambil data
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "tampil/laporan/cetak/combo/subbidangcari.php",
            data: "pengguna_bidang="+bidang_id,
            success: function(msg){
                
                // jika tidak ada data
                if(msg == ''){
                    alert('Tidak ada data bidang');
                }
                
                // jika dapat mengambil data,, tampilkan di combo box kota
                else{
                    $("#pengguna_subbidang").html(msg);                                                      
                }
            }
        });     
    });
</script>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable( {
          "language": {
           "search": "Cari:"

            }
            } );
            } );
</script>
</table>