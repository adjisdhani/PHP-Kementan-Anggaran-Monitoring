<style type="text/css">
  .tombol{
        background:orange;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 0;
        padding: 10px 20px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 11pt;
    }
  .s {
    width: 200px;
    padding: 3px 20px;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}
  input[type=button], input[type=submit], input[type=reset] {
    background-color: #036d0a;
    border: none;
    color: white;
    padding: 8px 18px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<p align="center" style="font-size: 25px; font-weight: bold">CETAK DATA KEGIATAN</p>
<hr><br><br>
<form action="index.php" method="GET" id="validasi">
<input type="hidden" name="page" value="kegiatanpumk_cetak">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="d1" class="s" required="required"><input type="date" name="d2" class="s" required="required"><select name="d4" class="s" required="required">
      <option value="">--</option>
            <?php $tampil=mysql_query("SELECT * FROM subbidang ORDER BY subbidang_id ASC");
            while($t=mysql_fetch_array($tampil)){
             echo "<option value='$t[subbidang_id]'>$t[subbidang_nama]</option>";
             }
      ?>
      </select><select name="kegiatan_status" class="s" required="required">
            <option value="">--</option>
        	<option value="0">Belum Dilaksanakan</option>
        	<option value="1">Sudah Dilaksanakan</option>
        	</select><input type="submit" value="Kirim" target='_blank'><br>



</form>




<!--batassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->
<?php
include '../../../koneksi.php';
$bidang_id=$_SESSION['bidang_id'];
$subbidang_id=$_SESSION['subbidang_id'];
$d1 = $_GET['d1'];
$d2 = $_GET['d2'];
$d3 = $_GET['kegiatan_status'];
$d4 = $_GET['d4'];
$query="SELECT * FROM kegiatan LEFT JOIN judul ON kegiatan.judul_id=judul.judul_id LEFT JOIN subjudul ON kegiatan.subjudul_id=subjudul.subjudul_id LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip LEFT JOIN bidang ON pengguna.bidang_id =bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id=subbidang.subbidang_id WHERE pengguna.bidang_id='$bidang_id' AND pengguna.subbidang_id IN ('$d4%') AND kegiatan.kegiatan_status IN ('$d3%') AND kegiatan.kegiatan_tanggal BETWEEN '$d1' AND '$d2'";
$result=mysql_query($query) or die(mysql_error());
?>

<table id="example" border="0" width="100%" bgcolor="#036d0a">
<?php
if ($d1 != '' ) {
?>
<br>
<p style="margin-left: -950px;"><a class="tombol" href="tampil/laporan/laporankegiatanpumk.php?d1=<?php echo $d1;?>&d2=<?php echo $d2;?>&kegiatan_status=<?php echo $d3;?>&d4=<?php echo $d4;?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;CETAK</a></p>
<br><br>
  <thead>
  <tr style="color: white;">
	<th>Kode Kegiatan</th>
    <!--<th>Nama Pegawai</th>-->
    <th>Judul Kegiatan</th>
    <th>Sub Judul Kegiatan</th>
    <th>Tanggal Awal Kegiatan</th>
    <th>Tanggal Akhir Kegiatan</th>
    <th>Anggaran Kegiatan</th>
  </tr>
  </thead>
  <tbody align="center">
<?php
while ($data=mysql_fetch_array($result)) {
?>
<tr>
    	<td><a href="index.php?page=detail_kegiatan&kegiatan_id=<?php echo $data['kegiatan_id']; ?>"><?php echo $data['kegiatan_no'];  ?></td>
    	<!--<td><?php echo $data['pengguna_nama'];  ?></td>-->
        <td><?php echo $data['judul_nama'];  ?></td>
        <td><?php echo $data['subjudul_nama'];  ?></td>
        <td><?php $timestamp=strtotime($data['kegiatan_tanggal']);
                $tanggal = date('d F Y',$timestamp);
                echo $tanggal;

      ?></td>
      <td><?php $timestamp=strtotime($data['kegiatan_tangakhir']);
                $tanggal = date('d F Y',$timestamp);
                echo $tanggal;

      ?></td>
        <td><?php $angka=$data['kegiatan_anggaran'];
                $jumlah_desimal='2';
                $pemisah_desimal=',';
                $pemisah_ribuan='.';

           echo "Rp.".number_format($angka,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan);

       ?></td>
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
           "search": "Cari:",
           "emptyTable":"DATA TIDAK DITEMUKAN"
            }
            } );
            } );
</script>
</table>