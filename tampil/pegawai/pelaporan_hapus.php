<?php
$pelaporan_id=$_GET['pelaporan_id'];
$query="DELETE FROM pelaporan WHERE pelaporan_id='$pelaporan_id'";
$hapus=mysql_query($query);
if($hapus){
?>
<script type="text/javascript">
window.location.href='index.php?page=pelaporan_riwayat';
</script>
<?php
}
else{
?>
<script type="text/javascript">
alert('Data Gagal Dihapus');
window.location.href='index.php?page=pelaporan_riwayat';
</script>
<?php
}
?>
