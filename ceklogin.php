<?php
session_start();
include 'koneksi.php';
$pengguna_nip=$_POST['pengguna_nip'];
$pengguna_katasandi=$_POST['pengguna_katasandi'];

$query="SELECT * FROM pengguna WHERE pengguna_nip='$pengguna_nip' AND pengguna_katasandi='$pengguna_katasandi'";

$result=mysql_query($query);
$jumlah= mysql_num_rows($result);

if ($jumlah==1){

	$dataadmin=mysql_fetch_array($result);

	$_SESSION['pengguna_nip']=$dataadmin['pengguna_nip'];
	$_SESSION['pengguna_nama']=$dataadmin['pengguna_nama'];
	$_SESSION['pengguna_id']=$dataadmin['pengguna_id'];
	$_SESSION['pengguna_status']=$dataadmin['pengguna_status'];
	$_SESSION['bidang_id']=$dataadmin['bidang_id'];

           if ($_SESSION['pengguna_status'] == 1)
              {
			?>
			<script type="text/javascript">
			alert('Selamat Datang Admin');
			window.location.href='index.php';
			</script>
			<?php 
			}
			elseif ($_SESSION['pengguna_status'] == 2)
              {
            ?>
			<script type="text/javascript">
			alert('Selamat Datang Pegawai');
			window.location.href='index.php';
			</script>
			<?php 
			}
			elseif ($_SESSION['pengguna_status'] == 3)
              {
            ?>
			<script type="text/javascript">
			alert('Selamat Datang PUMK');
			window.location.href='index.php';
			</script>
			<?php 
			}
			elseif ($_SESSION['pengguna_status'] == 4)
              {
            ?>
			<script type="text/javascript">
			alert('Selamat Datang Bendahara');
			window.location.href='index.php';
			</script>
			<?php 
			}
			?>



<?php
}
else{
?>
<script type='text/javascript'>
alert('NIP atau Kata Sandi Anda Salah');
window.location.href='login.php';
</script>
<?php
}
?>