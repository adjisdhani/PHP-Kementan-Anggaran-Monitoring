<?php
$subbidang_id=$_GET['subbidang_id'];
$query="DELETE FROM subbidang WHERE subbidang_id='$subbidang_id'";
$hapus=mysql_query($query);
if($hapus){
?>
<script type="text/javascript">
window.location.href='index.php?page=subbidang_lihat';
</script>
<?php
}
else{
?>
<script type="text/javascript">
alert('Data Gagal Dihapus');
window.location.href='index.php?page=subbidang_lihat';
</script>
<?php
}
?>
