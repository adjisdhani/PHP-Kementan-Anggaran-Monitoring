<?php
$kegiatan_id=$_GET['kegiatan_id'];
$query="DELETE FROM kegiatan WHERE kegiatan_id='$kegiatan_id'";
$hapus=mysql_query($query);
if($hapus){
?>
<script type="text/javascript">
window.location.href='index.php?page=kegiatan_lihat_admin';
</script>
<?php
}
else{
?>
<script type="text/javascript">
alert('Data Gagal Dihapus');
window.location.href='index.php?page=kegiatan_lihat_admin';
</script>
<?php
}
?>
