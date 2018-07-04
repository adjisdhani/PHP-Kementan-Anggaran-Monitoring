<form action="index.php" method="GET">
<input type="hidden" name="page" value="laporanpengajuan">
  <input type="date" name="d1"><input type="date" name="d2"><input type="submit" value="Cetak" target='_blank'><br>
</form>
<?php
include '../../koneksi.php';
$pengguna_id=$_SESSION['pengguna_id'];
$d1 = $_GET['d1'];
$d2 = $_GET['d2'];
$query="SELECT * FROM kegiatan LEFT JOIN judul ON kegiatan.judul_id=judul.judul_id LEFT JOIN subjudul ON kegiatan.subjudul_id=subjudul.subjudul_id LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip LEFT JOIN bidang ON pengguna.bidang_id =bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id=subbidang.subbidang_id WHERE pengguna.pengguna_id='$pengguna_id' AND kegiatan.kegiatan_tanggal BETWEEN '$d1' AND '$d2'";
$result=mysql_query($query) or die(mysql_error());
?>
<table id="lihatkegiatan" border="1" width="100%">
<?php
if ($d1 != '') {
?>
<a href="tampil/laporan/laporankegiatan.php?d1=<?php echo $d1; ?>&d2=<?php echo $d2; ?>" target="_NEW">CETAK</a>
  <thead>
  <tr>
    <th>Kode Kegiatan</th>
    <th>Nama Pegawai</th>
    <th>Bidang Pegawai</th>
    <th>Sub Bidang Pegawai</th>
    <th>Judul Kegiatan</th>
    <th>Sub Judul Kegiatan</th>
    <th>Tanggal Kegiatan</th>
    <th>Anggaran Kegiatan</th>
    <th>Status Kegiatan</th>
  </tr>
  </thead>
<?php
}
?>
  <tbody>
<?php
while ($data=mysql_fetch_array($result)) {
?>
    <tr>
      <td><a href="index.php?page=detail_kegiatan&kegiatan_id=<?php echo $data['kegiatan_id']; ?>"><?php echo $data['kegiatan_no'];  ?></td>
      <td><?php echo $data['pengguna_nama'];  ?></td>
      <td><?php echo $data['bidang_nama'];  ?></td>
      <td><?php echo $data['subbidang_nama'];  ?></td>
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
    </tr>
<?php
}
?></tbody></table>