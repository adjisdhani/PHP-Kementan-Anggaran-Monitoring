<style type="text/css">
    .tombol{
        background:#2C97DF;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 5px #2A80B9;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 11pt;
    }
    .tombol2{
        background:#036d0a;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 0;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 11pt;
    }
    .btn{
        border-radius: 30px;
        background-color: blue;
        width: 130px;
        text-align:center;
        color : white;
        text-decoration-line: none;
    }
    p a{
        text-decoration-line: none;
        color: white;
    }
</style>
<?php
$pengguna_id=$_SESSION['pengguna_id'];
$result2=mysql_query("SELECT * FROM pelaporan LEFT JOIN pengguna ON pelaporan.pengguna_id = pengguna.pengguna_id WHERE pelaporan.pengguna_id = '$pengguna_id' AND pelaporan_status='0'");
?>
<p align="left"><a href="index.php?page=pelaporan_tambah" class="tombol"><span class="fa fa-plus" style="font-size: 15pt;"></span>&nbsp;TAMBAH</a></p>
<br>
<table id="riwayat" border="0"width="100%" bgcolor="#036d0a">
  <thead>
	<tr style="color: white;">
	<th>Kode Pelaporan</th>
	<th>Nama Pelaporan</th>
    <th>Tanggal Pelaporan</th>
    <th>Pelaporan Status</th>
    <th>Aksi</th>
    
	</tr>
  </thead>
  <tbody>
<?php
while ($data=mysql_fetch_array($result2)) {
?>
    <tr align="center">
    	<td><a href="index.php?page=detail_pelaporan&pelaporan_id=<?php echo $data['pelaporan_id']; ?>"><?php echo $data['pelaporan_no'];  ?></a></td>
    	<td><?php echo $data['pelaporan_nama'];  ?></td>
    	<td><?php $timestamp=strtotime($data['pelaporan_tanggal']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;

      ?></td>
      <td>
      <?php
         if ($data['pelaporan_status']=='0') {
           echo "Belum diperiksa";
         }
       elseif ($data['pelaporan_status']=='1') {
        echo "Pelaporan Diterima";
       } 
         elseif ($data['pelaporan_status']=='2') {
            echo "Pelaporan Ditolak";
         }  
       ?>
        
      </td>   
      <td><!--<a href="index.php?page=pelaporan_hapus&pelaporan_id=<?php echo $data['pelaporan_id'];  ?>" onclick="return confirm('Yakin akan hapus')">HAPUS--> <a class="tombol2" href="index.php?page=pelaporan_ubah&pelaporan_id=<?php echo $data['pelaporan_id'];?>">UBAH</a></td>
    	
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#riwayat').DataTable({
            "language": {
           "search": "Cari:"

            }
            } );
            } );
</script>
</table>