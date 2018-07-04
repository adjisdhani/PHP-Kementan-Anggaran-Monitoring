<?php
$judul_id=$_GET['judul_id'];
$query="DELETE FROM judul WHERE judul_id='$judul_id'";
$hapus=mysql_query($query);
if($hapus){
?>
<script type="text/javascript">
window.location.href='index.php?page=judul_lihat';
</script>
<?php
}
else{
?>
<script type="text/javascript">
alert('Data Gagal Dihapus');
window.location.href='index.php?page=judul_lihat';
</script>
<?php
}
?>
