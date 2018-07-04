<?php
$tampil=mysql_query("SELECT * FROM subbidang WHERE bidang_id='$_POST[bidang_nama]'");
$jml=mysql_num_rows($tampil);
if($jml > 0){
    echo"
     <option selected>- Pilih Sub Bidang -</option>";
     while($r=mysql_fetch_array($tampil)){
         echo "<option value=$r[subbidang_id]>$r[subbidang_nama]</option>";
		 
     }
}else{
    echo "
     <option selected>- Data Tidak Ada -</option>";
}
?>