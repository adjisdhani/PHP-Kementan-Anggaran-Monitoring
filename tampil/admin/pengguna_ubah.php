<style type="text/css">
	input[type=text], input[type=number],input[type=date], .lg {
    width: 100%;
    padding: 3px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}
    textarea{
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
<form action="index.php?page=pengguna_ubah_proses" method="post" enctype="multipart/form-data">
<?php
$pengguna_id=$_GET['pengguna_id'];
$tampil="SELECT * FROM pengguna LEFT JOIN bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id where pengguna_id='$pengguna_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pengguna_nip'];
$b=$row['pengguna_nama'];
$c=$row['pengguna_tgllahir'];
$d=$row['pengguna_alamat'];
$e=$row['pengguna_telepon'];
$f=$row['bidang_nama'];
$g=$row['pengguna_status'];
$i=$row['pengguna_id'];
$j=$row['subbidang_nama'];
?>
<script src="../../assetsjs/js/jquery-3.2.1.js"></script>
<input type="hidden" name="pengguna_id" value="<?php echo $i;  ?>">
<h2 align="center">UBAH DATA PENGGUNA</h2>
<br><hr><br><br><br>
<table align="center">
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><input type="text" name="pengguna_nip" value="<?php echo $a;  ?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="pengguna_nama" value="<?php echo $b;  ?>"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="pengguna_tgllahir" value="<?php echo $c;  ?>"></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td>:</td>
		<td><input type="number" name="pengguna_telepon" value="<?php echo $e;  ?>"></td>
	</tr>
	<tr>
		<td>Bidang</td>
		<td>:</td>
		<td>
		<select name="pengguna_bidang" id="pengguna_bidang" class="lg">
		<option value="0">--</option>
				<?php
				$query="SELECT * FROM bidang";
				$result=mysql_query($query) or die(mysql_error());
                ?>
                <?php
				while ($data=mysql_fetch_array($result)) {
				?> 
					<option 
					<?php
					if ($data['bidang_id'] == $row['bidang_id']) {
						echo 'selected="selected"';
					}
					?>
					 value="<?php echo $data['bidang_id'];?>"><?php echo $data['bidang_nama']; ?></option>
				<?php
				}
				?>
	    </select>
		</td>
	</tr>
	<tr>
		<td>Sub Bidang</td>
		<td>:</td>
		<td>
		<select name="pengguna_subbidang" class="lg" id="pengguna_subbidang">
		<option value="0">--</option>
        <?php echo 'selected="selected"' ?>
	    </select>
		</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td>
		<select name="pengguna_status" class="lg">
        	<option value="1"
            <?php
            if ($g==1) {
                echo "selected='selected'";
            }
            ?>
        	>Admin</option>
        	<option value="2"
            <?php
            if ($g==2) {
                echo "selected='selected'";
            }
            ?>
        	>Pegawai</option>
        	<option value="3"
            <?php
            if ($g==3) {
                echo "selected='selected'";
            }
            ?>
        	>PUMK</option>
        	<option value="4"
            <?php
            if ($g==4) {
                echo "selected='selected'";
            }
            ?>
        	>Bendahara</option>
        </select>
         </option>
         </select>
    	 </td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="pengguna_alamat" rows="5" cols="50"><?php echo $d;  ?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="pengguna_ubah" value="UBAH"><input type="reset" name="pengguna_reset" value="BATAL"></td>
	</tr>
<script type="text/javascript">
	$("#pengguna_bidang").change(function(){
    
        // variabel dari nilai combo box provinsi
        var bidang_id = $("#pengguna_bidang").val();
        
        
        // mengirim dan mengambil data
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "tampil/admin/combo/subbidangcari.php",
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
</table>
</form>
