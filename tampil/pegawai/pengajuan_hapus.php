<?php
$pengajuan_id=$_GET['pengajuan_id'];
$query="DELETE FROM pengajuan WHERE pengajuan_id='$pengajuan_id'";
$hapus=mysql_query($query);
if($hapus){
?>
<script type="text/javascript">
window.location.href='index.php?page=pengajuan_riwayat';
</script>
<?php
}
else{
?>
<script type="text/javascript">
alert('Data Gagal Dihapus');
window.location.href='index.php?page=pengajuan_riwayat';
</script>
<?php
}
?>
