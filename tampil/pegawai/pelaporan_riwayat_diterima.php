<style type="text/css">
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
    .tombol{
        background:brown;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 5px brown;
        padding: 4px 9px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 11pt;
    }
</style>
<?php
$pengguna_id=$_SESSION['pengguna_id'];
$result2=mysql_query("SELECT * FROM pelaporan LEFT JOIN pengguna ON pelaporan.pengguna_id = pengguna.pengguna_id WHERE pelaporan.pelaporan_status='1' AND pelaporan.pengguna_id = '$pengguna_id'");
?>
<table id="riwayat" border="0"width="100%" bgcolor="#036d0a">
  <thead>
	<tr style="color: white;">
	<th>Kode Pelaporan</th>
	<th>Nama Pelaporan</th>
    <th>Tanggal Pelaporan</th>
    <th>Cetak Bukti</th>
    
    
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
      <td><a class="tombol" href="tampil/laporan/laporanbuktipelaporan.php?pelaporan_id=<?php echo $data['pelaporan_id']; ?>" target="_NEW"><span class="fa fa-print"></span>&nbsp;CETAK</a></td>
      
    	
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