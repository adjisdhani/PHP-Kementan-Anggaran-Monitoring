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
</style>
<?php
$bidang_id = $_SESSION['bidang_id'];
$query="SELECT * FROM kegiatan LEFT JOIN judul ON kegiatan.judul_id=judul.judul_id LEFT JOIN subjudul ON kegiatan.subjudul_id=subjudul.subjudul_id LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip LEFT JOIN bidang ON pengguna.bidang_id =bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id=subbidang.subbidang_id WHERE pengguna.bidang_id='$bidang_id'";
$result=mysql_query($query) or die(mysql_error());
?>
<p align="left"><a href="index.php?page=kegiatan_tambah" class="btn">Tambah Kegiatan</a></p>
<br>
<p align="center">Jumlah Anggaran :  <?php
                                          $a=mysql_query("SELECT SUM(kegiatan_anggaran) FROM kegiatan");
                                          $data=mysql_fetch_array($a);
                                          $jumlah=$data[0];
                                          $angka=$jumlah;
                                                  $jumlah_desimal='2';
                                                  $pemisah_desimal=',';
                                                  $pemisah_ribuan='.';

                                             echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

                                      ?>
</p>
<table id="lihatkegiatan" border="0" width="100%" bgcolor="lightgreen">
  <thead>
	<tr>
		<th>Kode Kegiatan</th>
		<th>Nama Pegawai</th>
		<!--<th>Bidang Pegawai</th>
		<th>Sub Bidang Pegawai</th>-->
		<th>Judul Kegiatan</th>
    <th>Sub Judul Kegiatan</th>
    <th>Tanggal Kegiatan</th>
    <th>Anggaran Kegiatan</th>
		<th>Berkas Kegiatan</th>
    <th>Status Kegiatan</th>
    <th>Ubah Status</th>
	</tr>
  </thead>
  <tbody>
<?php

while ($data=mysql_fetch_array($result)) {
?>
    <tr align="center">
    	<td><a href="index.php?page=detail_kegiatan&kegiatan_id=<?php echo $data['kegiatan_id']; ?>"><?php echo $data['kegiatan_no'];  ?></td>
    	<td><?php echo $data['pengguna_nama'];  ?></td>
    	<!--<td><?php echo $data['bidang_nama'];  ?></td>
    	<td><?php echo $data['subbidang_nama'];  ?></td>-->
        <td><?php echo $data['judul_nama'];  ?></td>
        <td><?php echo $data['subjudul_nama'];  ?></td>
        <td><?php $timestamp=strtotime($data['kegiatan_tanggal']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;

      ?></td>
        <td><?php $angka=$data['kegiatan_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       ?></td>
        <td><a download href="assetsdoc/kegiatan/<?php echo $data['kegiatan_berkas'];   ?>">Unduh</td>
        <td>
        <?php
         if ($data['kegiatan_status']=='0') {
           echo "Belum dilaksanakan";
          }
          elseif ($data['kegiatan_status']=='1'){
          echo "Sudah dilaksanakan";
          } 
        ?>
        
      </td>
        <td>
          <form action="index.php?page=update_kegiatanstatus" method="post" id="formkegiatan">
          <input type="hidden" value="<?php echo $data['kegiatan_id']; ?>" name="kegiatan_id">
          <select name="status">
          <option value="0">Belum Terlaksana</option>
          <option value="1">Sudah Terlaksana</option>
          </select>
          <input type="submit" name="kegiatan_status" value="Simpan"></input>  

          </form>
        </td>
        <td></td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lihatkegiatan').DataTable();
    });
</script>
</table>