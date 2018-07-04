<?php
include "koneksi.php" ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
<link rel="stylesheet" href="menu/font/css/font-awesome.css" />
<style type="text/css">
	body{
	font-family: arial;
	font-size: 14px;
	background-image: url(assetsjs/lapkeu.jpg);
	background-position: bottom -40px left -10px;
	background-repeat: no-repeat;
	margin-top: 0%;
	}
	#utama{
		margin: 0 auto;
		width: 300px;
		margin-top:10%;
		margin-right: 9%;
	}
	#judul{
		padding: 15px;
		text-align: center;
        color:white;
        font-size: 20px;
        background-color: #036d0a;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        border-bottom: 3px solid black;
	}
	#inputan{
		background-color: #bfbfbf;
		padding: 20px;
		border : 1px;
		border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
	}
	input{
		padding: 10px;
		border: 0;
	}
	.lg{
		width: 240px;
	}
	.btn{
		border-radius: 10px;
		background-color: #036d0a;
		width: 130px;
		text-align:center;
		color : white;
	}
	.btn:hover{
		background-color: #000;
		cursor: pointer;
	}
</style>
</head>
<div style="font-size:50px" align="center"><img src="assetsjs/header.jpg" width="100%" ></div></td>
<body>

  <div id="utama">
     <div id="judul">
      <span class="fa fa-user"></span> &nbsp;Login
     </div>
     <div id="inputan">
	       <form action="ceklogin.php" method="post">
	       <div>
	         <input type="text" name="pengguna_nip" placeholder="NIP" class="lg" required="required" />
	       </div>
	       <div style="margin-top: 10px;">
	         <input type="password" name="pengguna_katasandi" placeholder="Kata Sandi" class="lg" required="required" />
	       </div>
	        <div style="margin-top: 10px;">
	         <input type="submit" name="login" value="MASUK" class="btn"><input type="reset" name="reset" value="BATAL" class="btn">
	       </div>
	       </form>
</body>
</html>