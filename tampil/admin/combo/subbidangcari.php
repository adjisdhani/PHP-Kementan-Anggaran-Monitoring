<?php 
    include "../../../koneksi.php";
    
    $sel_prov="SELECT * FROM subbidang WHERE bidang_id='".$_POST["pengguna_bidang"]."'";
    $q=mysql_query($sel_prov);
    while($data=mysql_fetch_array($q)){
    
    ?>
        <option value="<?php echo $data["subbidang_id"] ?>"><?php echo $data["subbidang_nama"] ?></option><br>
    
    <?php
    }
    ?>