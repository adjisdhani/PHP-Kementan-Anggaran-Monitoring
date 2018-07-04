<!--<?php
$query="SELECT * FROM pengajuan INNER JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id";
$result=mysql_query($query) or die(mysql_error());
?>-->

<!--
<div style="margin-bottom: 15px;" align="right">
    <form action="" method="post">
      <input type="text" name="inputan_pencarian" style="width:200px;padding: 5px;">
      <input type="submit" name="cari_pengajuan" value="CARI" style="padding: 3px;" />
    </form>
    </div>
-->
<table id="pengajuan" border="1" width="100%">
  <thead>
	<tr>
		<th>Nomor Pengajuan</th>
		<th>Nama Pegawai</th>
		<th>Nama Pengajuan</th>
    <th>Tanggal Pengajuan</th>
    <th>Anggaran Pengajuan</th>
    <th>Rincian Pengajuan</th>
    <th>Pengajuan Status</th>
	</tr>
  </thead>
  <tbody>
<?php
$inputan_pencarian=@$_POST['inputan_pencarian'];
        $cari_pengajuan=@$_POST['cari_pengajuan'];
        if ($cari_pengajuan) {
            if ($inputan_pencarian !="") {
                $result2=mysql_query("SELECT * From tb_pengajuan where pengajuan_no like'%$inputan_pencarian%' or pengguna_nama like'%$inputan_pencarian%'") or die (mysql_error());
                } else{
                $result2=mysql_query("SELECT * From  tb_pengajuan INNER JOIN tb_pengguna ON tb_pengajuan.pengguna_id = tb_pengguna.pengguna_id") or die (mysql_error());
                }
        } else {
             $result2=mysql_query("SELECT * From  pengajuan INNER JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id") or die (mysql_error());
        }
        $cek=mysql_num_rows($result2);
        if($cek<1){
         ?>
          <tr>
             <td colspan="12" align="center" style="padding:10px;">Data Tidak ditemukan</td>
          </tr>
         <?php
        }else{
while ($data=mysql_fetch_array($result2)) {
?>
    <tr>
    	<td><a href="index.php?page=detail_pengajuan&pengajuan_id=<?php echo $data['pengajuan_id']; ?>"><?php echo $data['pengajuan_no'];  ?></td>
    	<td><a href="index.php?page=detail_pengguna&pengguna_id=<?php echo $data['pengguna_id']; ?>"><?php echo $data['pengguna_nama'];  ?></td>
    	<td><?php echo $data['pengajuan_nama'];  ?></td>
    	<td><?php $timestamp=strtotime($data['pengajuan_tanggal']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;

      //echo $data['pengajuan_tanggal'];  ?></td>
    	<td><?php $angka=$data['pengajuan_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       //echo $data['pengajuan_anggaran'];  ?></td>
      <td><a download href="assetsdoc/pengajuan/<?php echo $data['pengajuan_rincian'];   ?>">Unduh</td>   
    	<td>
    	<?php
         if ($data['pengajuan_status']=='0') {
         	 echo "Blom diperiksa";
         }
    	 elseif ($data['pengajuan_status']=='1') {
    	 	echo "Pengajuan Diterima";
    	 } 
         elseif ($data['pengajuan_status']=='2') {
            echo "Pengajuan Ditolak";
         }  
    	 ?>
    		
    	</td>
    </tr>
<?php
}
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#pengajuan').DataTable();
    });
</script>
</table>