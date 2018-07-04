<script type="text/javascript" src="../../assetsjs/tabel/jquery.dataTables.js"></script>
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
$no=1;
$query="SELECT * FROM kegiatan LEFT JOIN judul ON kegiatan.judul_id=judul.judul_id LEFT JOIN subjudul ON kegiatan.subjudul_id=subjudul.subjudul_id LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip LEFT JOIN bidang ON pengguna.bidang_id =bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id=subbidang.subbidang_id";
$result=mysql_query($query) or die(mysql_error());
?>
<p align="left"><a href="index.php?page=kegiatan_tambah" class="tombol2"><span class="fa fa-plus" style="font-size: 15pt;"></span>&nbsp;TAMBAH</a></p>
<br>
<!--<p align="center">Jumlah Anggaran :  <?php
                                          $a=mysql_query("SELECT SUM(kegiatan_anggaran) FROM kegiatan");
                                          $data=mysql_fetch_array($a);
                                          $jumlah=$data[0];
                                          $angka=$jumlah;
                                                  $jumlah_desimal='2';
                                                  $pemisah_desimal=',';
                                                  $pemisah_ribuan='.';

                                             echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

                                      ?>
</p>-->
<table id="lihatkegiatan2" border="0" width="100%" bgcolor="#036d0a">
  <thead>
	<tr style="color: white;" align="center"> 
		<th>Kode Kegiatan</th>
		<th>Nama Pegawai</th>
		<th>Judul Kegiatan</th>
		<th>Sub Judul Kegiatan</th>
		<th>Tanggal Awal Kegiatan</th>
		<th>Tanggal Akhir Kegiatan</th>
		<th>Anggaran Kegiatan</th>
		<th>Status Kegiatan</th>
    <th>Aksi</th>
	</tr>
  </thead>
  <tbody>
<?php

while ($data=mysql_fetch_array($result)) {
?>
    <tr align="center">
    	<td><a href="index.php?page=detail_kegiatan&kegiatan_id=<?php echo $data['kegiatan_id']; ?>"><?php echo $data['kegiatan_no'];  ?></td>
    	<td><?php echo $data['pengguna_nama'];  ?></td>
        <td><?php echo $data['judul_nama'];  ?></td>
        <td><?php echo $data['subjudul_nama'];  ?></td>
        <td><?php $timestamp=strtotime($data['kegiatan_tanggal']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;
        
      ?></td>
      <td><?php $timestamp=strtotime($data['kegiatan_tangakhir']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;
        
      ?></td>
        <td><?php $angka=$data['kegiatan_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       ?></td>
        <td>
        <?php
         if ($data['kegiatan_status']=='0') {
           echo "Belum dilaksanakan";
          }
          elseif ($data['kegiatan_status']=='1'){
          echo "Sudah dilaksanakan";
          } 
          elseif ($data['kegiatan_status']=='2'){
          echo "Sedang dilaksanakan";
          } 
        ?>
        
      </td>
      <td><a class="tombol" href="index.php?page=kegiatan_hapus&kegiatan_id=<?php echo $data['kegiatan_id'];  ?>" onclick="return confirm('Yakin akan hapus')">HAPUS<a class="tombol3" href="index.php?page=kegiatan_ubah&kegiatan_id=<?php echo $data['kegiatan_id'];?>">UBAH</a></td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lihatkegiatan2').DataTable({
            "language": {
           "search": "Cari:"

            }
            } );
            } );
</script>
</table>