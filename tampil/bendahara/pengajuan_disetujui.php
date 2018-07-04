<?php
$query="SELECT * FROM pengajuan INNER JOIN pengguna ON pengajuan.pengguna_id = pengguna.pengguna_id INNER JOIN bidang ON pengguna.bidang_id = bidang.bidang_id INNER JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id where pengajuan.pengajuan_status='1' AND pengajuan.pengajuan_statusben='1'";
$result=mysql_query($query);
?>
<table id="pengajuanterima" border="0" width="100%" bgcolor="#036d0a">
    <thead>
    <tr style="color: white;">
         <th>Kode Pengajuan</th>
        <th>Nama Pegawai</th>
        <th>Nama Pengajuan</th>
        <th>Tanggal Pengajuan</th>
        <th>Pengajuan Anggaran</th>
    </tr>
    </thead>
    <tbody>
<?php
while ($data=mysql_fetch_array($result)) {
?>
    <tr align="center">
        <td><a href="index.php?page=detail_pengajuan&pengajuan_id=<?php echo $data['pengajuan_id']; ?>"><?php echo $data['pengajuan_no'];  ?></td>
        <td><?php echo $data['pengguna_nama'];  ?></td>
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
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#pengajuanterima').DataTable({
            "language": {
           "search": "Cari:"

            }
            } );
            } );
</script>
</table>