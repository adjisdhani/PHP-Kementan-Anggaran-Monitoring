<?php
$subjudul_id=$_GET['subjudul_id'];
$query="DELETE FROM subjudul WHERE subjudul_id='$subjudul_id'";
$hapus=mysql_query($query);
if($hapus){
?>
<script type="text/javascript">
window.location.href='index.php?page=subjudul_lihat';
</script>
<?php
}
else{
?>
<script type="text/javascript">
alert('Data Gagal Dihapus');
window.location.href='index.php?page=subjudul_lihat';
</script>
<?php
}
?>
