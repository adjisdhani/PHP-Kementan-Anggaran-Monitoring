<?php
$bidang_id=$_GET['bidang_id'];
$query="DELETE FROM bidang WHERE bidang_id='$bidang_id'";
$hapus=mysql_query($query);
if($hapus){
?>
<script type="text/javascript">
window.location.href='index.php?page=bidang_lihat';
</script>
<?php
}
else{
?>
<script type="text/javascript">
alert('Data Gagal Dihapus');
window.location.href='index.php?page=bidang_lihat';
</script>
<?php
}
