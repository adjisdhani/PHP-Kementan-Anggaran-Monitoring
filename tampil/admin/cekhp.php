<?php 
include '../../koneksi.php';
$nip=$_POST['pengguna_telepon'];

$login=mysql_query("SELECT * FROM pengguna WHERE pengguna_telepon LIKE '$nip'");
$ketemu=mysql_num_rows($login);
$maka=mysql_fetch_array($login);

if($ketemu>0)
{
     echo "false";
}else{
	echo 'true';
}
?>