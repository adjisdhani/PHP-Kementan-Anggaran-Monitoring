<style>
    .tombol{
    	background:orange;
    	color: white;
    	border-top: 0;
    	border-right: 0;
    	border-left: 0;
    	border-bottom: 0;
    	padding: 10px 20px;
    	text-decoration: none;
    	font-family: sans-serif;
    	font-size: 11pt;
    }
    .tombol2{
    	background:blue;
    	color: white;
    	border-top: 0;
    	border-right: 0;
    	border-left: 0;
    	border-bottom: 0;
    	padding: 10px 20px;
    	text-decoration: none;
    	font-family: sans-serif;
    	font-size: 11pt;
    }

	.lg {
    width: 100%;
    padding: 3px 20px;
    margin: 1px 0;
    font-size: 20px;
    font-weight: bold;

    p a{
        text-decoration-line: none;
        color: white;
    }
</style>
<?php 
$pengguna_id=$_GET['pengguna_id'];
$tampil="SELECT * FROM pengguna LEFT JOIN bidang ON pengguna.bidang_id = bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id = subbidang.subbidang_id WHERE pengguna_id='$pengguna_id' ";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['pengguna_nip'];
$b=$row['pengguna_nama'];
$c=$row['pengguna_tgllahir'];
$d=$row['pengguna_alamat'];
$e=$row['pengguna_telepon'];
$f=$row['bidang_nama'];
$g=$row['pengguna_status'];
$h=$row['pengguna_katasandi'];
$j=$row['subbidang_nama'];
?>


<h2 align="center">RINCIAN IDENTITAS PENGGUNA</h2>
<br><hr><br>
<table style="margin-left: 20px;" class="lg">
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><?php echo $a;  ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $b;  ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php $timestamp=strtotime($c);
                $tanggal = date('d-m-Y',$timestamp);
                echo $tanggal;?></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td>:</td>
		<td><?php echo $e;  ?></td>
	</tr>
	<tr>
		<td>Bidang</td>
		<td>:</td>
		<td><?php echo $f;  ?></td>
	</tr>
	<tr>
		<td>Sub Bidang</td>
		<td>:</td>
		<td><?php echo $j;  ?></td>
	</tr>
	<!--<tr>
		<td>Status</td>
		<td>:</td>
		<td><?php
         if ($row['pengguna_status']=='1') {
         	 echo "Admin";
         }
    	 elseif ($row['pengguna_status']=='2'){
    	 	echo "Pegawai";
    	 } 
    	 elseif ($row['pengguna_status']=='3'){
    	 	echo "PUMK";
    	 } 
    	 elseif ($row['pengguna_status']=='4'){
    	 	echo "Bendahara";
    	 } 

    	 ?></td>
	</tr>-->
	<!--<tr>
		<td>Kata Sandi</td>
		<td>:</td>
		<td><?php echo $h;  ?></td>
	</tr>-->
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $d;  ?></td>
	</tr>
	<!--<tr>
		<td>Foto</td>
		<td>:</td>
		<td><img src="assetsdoc/foto/<?php echo $i;  ?>" width="30%"></td>
	</tr>-->
</table>
<br>
<?php 
 if($_SESSION['pengguna_status']==1)
 {
 	?>
<p style="margin-left: -890px;"><a class="tombol" href="tampil/laporan/laporandetail2.php?pengguna_id=<?php echo $pengguna_id ;?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;CETAK</a>
&nbsp;&nbsp;&nbsp;
<?php
 }
 else
 {
 	?>
<p style="margin-left: -890px;"><a class="tombol" href="tampil/laporan/laporandetail.php?pengguna_id=<?php echo $pengguna_id ;?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;CETAK</a>
&nbsp;&nbsp;&nbsp;
<?php
 }
?>
<!--<?php
 if ($_SESSION['pengguna_status']==1) {
 	?>
    <a class="tombol2" href="tampil/laporan/laporandetail2.php?pengguna_id=<?php echo $pengguna_id ;?>" target="_NEW"><span class="fa fa-print" style="font-size: 15pt;"></span>&nbsp;CETAK KATA SANDI</a></p>
 	<?php
 }
?>-->
