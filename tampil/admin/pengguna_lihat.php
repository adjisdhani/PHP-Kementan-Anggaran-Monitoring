<style type="text/css">
    .tombol{
        background:Red;
        color: white;
        border-top: 0;
        border-right:1px solid black;
        border-left: 0;
        border-bottom:0;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 8pt;
    }
    .tombol3{
        background:#036d0a;
        color: white;
        border-top: 0;
        border-right:1;
        border-left: 0;
        border-bottom:0;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 8pt;
    }
    .tombol2{
        background:#2C97DF;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom:0;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 12pt;
    }
    p a{
        text-decoration-line: none;
        color: white;
    }
</style>
<p align="left"><a href="index.php?page=pengguna_tambah" class="tombol2"><span class="fa fa-plus" style="font-size: 15pt;"></span>&nbsp;TAMBAH</a></p>
<br>
<table id="example" border="0" width="100%" bgcolor="#036d0a">
<thead>
	<tr style="color: white;" align="center">
        <!--<th>No</th>-->
		<th>NIP</th>
		<th>Nama</th>
		<!--<th>Tanggal Lahir</th>
		<th>Alamat</th>-->
		<th>Telepon</th>
		<th>Bidang</th>
        <th>Sub Bidang</th>
		<th>Status</th>
		<!--<th>Kata Sandi</th>-->
        <!--<th>Foto</th>-->
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
<?php
$no=1;
$inputan_pencarian=@$_POST['inputan_pencarian'];
        $cari_pengguna=@$_POST['cari_pengguna'];
        if ($cari_pengguna) {
            if ($inputan_pencarian !="") {
                $result=mysql_query("SELECT * From pengguna LEFT JOIN tb_bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id where pengguna_nip like'%$inputan_pencarian%' or pengguna_nama like'%$inputan_pencarian%'") or die (mysql_error());
                } else{
                $result=mysql_query("SELECT * FROM pengguna LEFT JOIN tb_bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id") or die (mysql_error());
                }
        } else {
             $result=mysql_query("SELECT * FROM pengguna LEFT JOIN bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id") or die (mysql_error());
        }
        $cek=mysql_num_rows($result);
        if($cek<1){
         ?>
          <tr>
             <td colspan="10" align="center" style="padding:10px;">Data Tidak ditemukan</td>
          </tr>
         <?php
        }else{
while ($data=mysql_fetch_array($result)) {
?>
    <tr align="center">
        <!--<td><?php echo $no;$no++ ?></td>-->
    	<td><a href="index.php?page=detail_pengguna&pengguna_id=<?php echo $data['pengguna_id']; ?>"><?php echo $data['pengguna_nip'];  ?></a></td>
    	<td><?php echo $data['pengguna_nama'];  ?></td>
    	<!--<td><?php echo $data['pengguna_tgllahir'];  ?></td>
    	<td><?php echo $data['pengguna_alamat'];  ?></td>-->
    	<td><?php echo $data['pengguna_telepon'];  ?></td>
    	<td><?php echo $data['bidang_nama'];  ?></td>
        <td><?php echo $data['subbidang_nama'];  ?></td>
    	<td>
    	<?php
         if ($data['pengguna_status']=='1') {
         	 echo "Admin";
         }
    	 elseif ($data['pengguna_status']=='2'){
    	 	echo "Pegawai";
    	 } 
    	 elseif ($data['pengguna_status']=='3'){
    	 	echo "PUMK";
    	 } 
    	 elseif ($data['pengguna_status']=='4'){
    	 	echo "Bendahara";
    	 } 

    	 ?>
    		
    	</td>
    	<!--<td><?php echo $data['pengguna_katasandi'];  ?></td>-->
        <!--<td>
        <a download href="assetsdoc/foto/<?php echo $data['pengguna_foto'];  ?>">Unduh</a>
        </td>-->
    	<td><a class="tombol" href="index.php?page=pengguna_hapus&pengguna_id=<?php echo $data['pengguna_id']; ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus?')">HAPUS<a class="tombol3"href="index.php?page=pengguna_ubah&pengguna_id=<?php echo $data['pengguna_id'];?>" >UBAH</a></td>
    </tr>
<?php
}
}
?>
</tbody>
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