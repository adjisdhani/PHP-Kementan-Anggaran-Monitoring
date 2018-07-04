<?php 
include '../../koneksi.php';
$pelaporan=$_POST['pelaporan_no'];

$login=mysql_query("SELECT * FROM pelaporan WHERE pelaporan_no LIKE '$pelaporan'");
$ketemu=mysql_num_rows($login);
$maka=mysql_fetch_array($login);

if($ketemu>0)
{
     echo "false";
}else{
	echo 'true';
}
?>