<?php
session_start();
if ($_SESSION['pengguna_nip'] =='') {
?>
<script type="text/javascript">
	alert('Silakan login terlebih dahulu');
	window.location.href='login.php';
</script>
<?php
}
error_reporting('0');
include 'koneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
 <?php 
 if ($_SESSION['pengguna_status'] == 1)
              {
	?>
	<title>Halaman Admin</title>
 <?php  
 }
 if ($_SESSION['pengguna_status'] == 2)
              {
	?>
	<title>Halaman Pegawai</title>
 <?php  
 }
 if ($_SESSION['pengguna_status'] == 3)
              {
	?>
	<title>Halaman PUMK</title>
 <?php  
 }
 if ($_SESSION['pengguna_status'] == 4)
              {
	?>
	<title>Halaman Bendahara</title>
 <?php  
 }
 ?>
 

 <link rel="stylesheet" type="text/css" href="assetsjs/jquery-ui.css" >
 <link rel="stylesheet" type="text/css" href="assetsjs/jquery-ui.theme.css" >
 <link rel="stylesheet" type="text/css" href="assetsjs/tabel/DataTables/media/css/jquery.dataTables.min.css">
 
</head>

<?php 
include "koneksi.php";
$nam=$_SESSION['pengguna_id'];
$querys=mysql_query("SELECT * FROM pengguna where pengguna_id='$nam'");
$datas=mysql_fetch_array($querys);
  ?>

<body style="background: white;">

<script type="text/javascript" src="assetsjs/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="assetsjs/tabel/jquery.dataTables.js"></script>
<script type="text/javascript" src="assetsjs/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assetsjs/jquery-ui.js"></script>
<script type="text/javascript" src="assetsjs/prosescari.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>


<table border="0" width="100%" cellpadding="5" align="center">	
	<tr>
		<td colspan="2" bgcolor="#000" align="right" ">
		<img src="assetsjs/header.jpg" width="100%" >
		<hr color='lightgreen'>
			<font color="#fff">Selamat Datang, <?php echo $datas['pengguna_nama'];?> | <a style="color: #fff" href="logout.php" onclick="return confirm('Apakah Anda Yakin Akan Keluar?')">Keluar</a></font>
		</td>
	</tr>
	<tr align="center">
		<td width="20%" style="vertical-align: top; border-left:1px solid black; " bgcolor="#FFF">
			<?php
			include 'nav.php';
			?>
		</td>
		<td width="80%" style="vertical-align: top; border-left: 1px solid black;border-right: 1px solid black;">
			<?php
			include 'page.php';
			?>
		</td>
	</tr>
</table>
</body>
</html>