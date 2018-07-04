<?php 
include '../../koneksi.php';
$kegiatan=$_POST['kegiatan_no'];

$login=mysql_query("SELECT * FROM kegiatan WHERE kegiatan_no LIKE '$kegiatan'");
$ketemu=mysql_num_rows($login);
$maka=mysql_fetch_array($login);

if($ketemu>0)
{
     echo "false";
}else{
	echo 'true';
}
?>