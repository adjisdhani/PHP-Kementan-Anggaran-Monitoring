<?php
$pengguna_id=$_GET['pengguna_id'];
$query="DELETE FROM pengguna WHERE pengguna_id='$pengguna_id'";
$hapus=mysql_query($query);
if($hapus){
?>
<script type="text/javascript">
window.location.href='index.php?page=pengguna_lihat';
</script>
<?php
}
else{
?>
<script type="text/javascript">
alert('Data Gagal Dihapus');
window.location.href='index.php?page=pengguna_lihat';
</script>
<?php
}
?>
