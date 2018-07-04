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
$a="SELECT * FROM pengajuan LEFT JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id WHERE pengajuan.pengajuan_status='1' AND pengajuan.pengguna_id = '$pengguna_id'";
$result2=mysql_query($a) or die (mysql_error());
?>
<table id="example" border="0" width="100%" bgcolor="#036d0a">
<thead>
	<tr style="color: white;">
		<th>Kode Pengajuan</th>
		<th>Nama Pengajuan</th>
    <th>Tanggal Pengajuan</th>
    <th>Anggaran Pengajuan</th>
    <th>Cetak Bukti</th>
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
       <td><a class="tombol" href="tampil/laporan/laporanbuktipengajuan.php?pengajuan_id=<?php echo $data['pengajuan_id']; ?>" target="_NEW"><span class="fa fa-print"></span>&nbsp;Cetak</a></td>
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