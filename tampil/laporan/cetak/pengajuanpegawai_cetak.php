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
    width: 300px;
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

<p align="center" style="font-size: 25px; font-weight: bold">CETAK DATA PENGAJUAN</p>
<hr><br><br>
<form action="index.php" method="GET">
<input type="hidden" name="page" value="pengajuanpegawai_cetak">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="d1" class="s" required="required"><input type="date" name="d2" class="s" required="required"><select name="pengajuan_status" class="s" required="required">
            <option value="">--</option>
        	<option value="0">Belum Diperiksa</option>
        	<option value="1">Diterima</option>
        	<input type="submit" value="Kirim" target='_blank'><br>
</form>
<br>
<!--batassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->
<?php
include '../../../koneksi.php';
$pengguna_id=$_SESSION['pengguna_id'];
$d1 = $_GET['d1'];
$d2 = $_GET['d2'];
$d3 = $_GET['pengajuan_status'];
$query="SELECT * FROM pengajuan LEFT JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id  WHERE pengguna.pengguna_id='$pengguna_id' AND pengajuan.pengajuan_status IN ('$d3%') AND pengajuan.pengajuan_tanggal BETWEEN '$d1' AND '$d2'";
$result=mysql_query($query) or die(mysql_error());
?>
<table id="example" border="0" width="100%" bgcolor="#036d0a">
<?php
if ($d1 != '' ) {
?>
<p style="margin-left: -970px;"><a class="tombol" href="tampil/laporan/laporanpengajuanpegawai.php?d1=<?php echo $d1;?>&d2=<?php echo $d2;?>&pengajuan_status=<?php echo $d3;?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;CETAK</a></p>
<br><br>
  <thead>
  <tr style="color: white;">
	<th>Kode Pengajuan</th>
		<th>Nama Pengajuan</th>
    <th>Tanggal Pengajuan</th>
    <th>Anggaran Pengajuan</th>
  </tr>
  </thead>
  <tbody align="center">
<?php
while ($data=mysql_fetch_array($result)) {
?>
<tr>
    	<td><a href="index.php?page=detail_pengajuan&pengajuan_id=<?php echo $data['pengajuan_id']; ?>"><?php echo $data['pengajuan_no'];  ?></a></td>
        <td><?php echo $data['pengajuan_nama'];  ?></td>
        <td><?php $timestamp=strtotime($data['pengajuan_tanggal']);
                $tanggal = date('d F Y',$timestamp);
                echo $tanggal;

      ?></td>
      <td><?php $angka=$data['pengajuan_anggaran'];
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