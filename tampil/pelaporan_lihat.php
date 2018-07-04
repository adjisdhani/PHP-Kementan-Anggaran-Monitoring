<?php
$query="SELECT * FROM pelaporan LEFT JOIN tb_pengguna ON tb_pelaporan.pengguna_id = tb_pengguna.pengguna_id";
$result=mysql_query($query) or die(mysql_error());
?>

<!--<div style="margin-bottom: 15px;" align="right">
    <form action="" method="post">
      <input type="text" name="inputan_pencarian" style="width:200px;padding: 5px;">
      <input type="submit" name="cari_pelaporan" value="CARI" style="padding: 3px;" />
    </form>
    </div>-->
<table border="1" width="100%" id="pelaporan">
<thead>
	<tr>
		<th>Nomor Pelaporan</th>
		<th>Nama Pegawai</th>
		<th>Nama Pelaporan</th>
		<th>Tanggal Pelaporan</th>
		<th>Rincian Pelaporan</th>
    <th>Pelaporan Status</th>
	</tr>
  </thead>
  </tbody>
<?php
while ($data=mysql_fetch_array($result)) {
?>
    <tr>
    	<td><a href="index.php?page=detail_pelaporan&pelaporan_id=<?php echo $data['pelaporan_id']; ?>"><?php echo $data['pelaporan_no'];  ?></td>
    	<td><a href="index.php?page=detail_pengguna&pengguna_id=<?php echo $data['pengguna_id']; ?>"><?php echo $data['pengguna_nama'];  ?></td>
    	<td><?php echo $data['pelaporan_nama'];  ?></td>
    	<td><?php $timestamp=strtotime($data['pelaporan_tanggal']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal ;?></td>
      <td><a download href="assetsdoc/pelaporan/<?php echo $data['pelaporan_rincian'];   ?>">Unduh</td>
      <td>
      <?php
         if ($data['pelaporan_status']=='0') {
           echo "Blom diperiksa";
         }
       elseif ($data['pelaporan_status']=='1') {
        echo "Pelaporan Diterima";
       } 
         elseif ($data['pelaporan_status']=='2') {
            echo "Pelaporan Ditolak";
         }  
       ?>
        
      </td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#pelaporan').DataTable();
    });
</script>
</table>