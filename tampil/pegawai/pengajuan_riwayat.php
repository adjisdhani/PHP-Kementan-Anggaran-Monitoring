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
        display: inline-block;
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
        display: inline-block;
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
$a="SELECT * FROM pengajuan LEFT JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id WHERE pengajuan.pengguna_id = '$pengguna_id' AND pengajuan_status='0' ";
$result2=mysql_query($a) or die (mysql_error());
?>
<p align="left"><a href="index.php?page=pengajuan_tambah" class="tombol"><span class="fa fa-plus" style="font-size: 15pt;"></span>&nbsp;TAMBAH</a></p>
<br>
<table id="example" border="0" width="100%" bgcolor="#036d0a">
<thead>
	<tr style="color: white;">
		<th>Kode Pengajuan</th>
		<th>Nama Pengajuan</th>
    <th>Tanggal Pengajuan</th>
    <th>Anggaran Pengajuan</th>
    <th>Pengajuan Status</th>
    <!--<th>Lihat Pengajuan</th>-->
    <th>Aksi</th>
	</tr>
</thead>
<tbody>
<?php
while ($data=mysql_fetch_array($result2)) {
?>
    <tr align="center">
    	<td><a href="index.php?page=detail_pengajuan&pengajuan_id=<?php echo $data['pengajuan_id']; ?>"><?php echo $data['pengajuan_no'];  ?></td>
    	<td><?php echo $data['pengajuan_nama'];  ?></td>
    	<td><?php $timestamp=strtotime($data['pengajuan_tanggal']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;

      ?></td>
    	<td><?php $angka=$data['pengajuan_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       ?></td>   
    	<td>
    	<?php
         if ($data['pengajuan_status']=='0') {
         	 echo "Belum diperiksa";
         }
    	 elseif ($data['pengajuan_status']=='1') {
    	 	echo "Pengajuan Diterima";
    	 } 
    	 ?>
    		
    	</td>
      <!--<td><a href="index.php?page=detail_pengajuan&pengajuan_id=<?php echo $data['pengajuan_id']; ?>">Lihat</a></td>-->
      <td><!--<a href="index.php?page=pengajuan_hapus&pengajuan_id=<?php echo $data['pengajuan_id'];  ?>" onclick="return confirm('Yakin akan hapus')">HAPUS--> <a class="tombol2" href="index.php?page=pengajuan_ubah&pengajuan_id=<?php echo $data['pengajuan_id'];?>">UBAH</a></td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable({
            "language": {
           "search": "Cari:"

            }
            } );
            } );
</script>
</table>