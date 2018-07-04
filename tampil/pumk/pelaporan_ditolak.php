<style type="text/css">
    .tombol{
        background:#036d0a;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom: 5px solid #036d0a;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 11pt;
    }
</style>
<?php
$bidang_id = $_SESSION['bidang_id'];
$query="SELECT * FROM pelaporan LEFT JOIN pengguna ON pelaporan.pengguna_id = pengguna.pengguna_id LEFT JOIN bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id WHERE pelaporan.pelaporan_status='2' AND pengguna.bidang_id = '$bidang_id'";
$result=mysql_query($query);
?>

<table id="pelaporanterima" border="0" width="100%" bgcolor="#036d0a">
    <thead>
    <tr style="color: white;">
        <th>Kode Pelaporan</th>
        <th>Nama Pegawai</th>
        <th>Nama Pelaporan</th>
        <th>Tanggal Pelaporan</th>
        <th>Ubah Status</th>
    </tr>
    </thead>
    <tbody>
<?php
while ($data=mysql_fetch_array($result)) {
?>
    <tr align="center">
        <td><a href="index.php?page=detail_pelaporan&pelaporan_id=<?php echo $data['pelaporan_id']; ?>"><?php echo $data['pelaporan_no'];  ?></td>
        <td><?php echo $data['pengguna_nama'];  ?></td>
        <td><?php echo $data['pelaporan_nama'];  ?></td>
        <td><?php $timestamp=strtotime($data['pelaporan_tanggal']);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;

        ?></td>
        <td>
        <a href="index.php?page=ubah_pelaporan_ditolak&pelaporan_id=<?php echo $data['pelaporan_id'] ;?>" class="tombol"><span class="fa fa-edit"></span>&nbsp;UBAH</a>
        </td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#pelaporanterima').DataTable({
    "language": {
           "search": "Cari:"

            }
            } );
            } );
</script>
</table>