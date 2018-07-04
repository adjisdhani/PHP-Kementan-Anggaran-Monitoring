<?php 
include '../../koneksi.php';
$pengajuan=$_POST['pengajuan_no'];

$login=mysql_query("SELECT * FROM pengajuan WHERE pengajuan_no LIKE '$pengajuan'");
$ketemu=mysql_num_rows($login);
$maka=mysql_fetch_array($login);

if($ketemu>0)
{
     echo "false";
}else{
	echo 'true';
}
?>