<?php
include "../../../koneksi.php"; // Load file koneksi.php

$no = $_POST['kegiatan_nippegawai']; // Ambil data NIS yang dikirim lewat AJAX

$query = mysql_query("SELECT * FROM pengguna WHERE pengguna_status='2' AND pengguna_nip='".$no."'"); // Tampilkan data siswa dengan NIS tersebut
$row = mysql_num_rows($query); // Hitung ada berapa data dari hasil eksekusi $query

if($row > 0){ // Jika data lebih dari 0
	$data = mysql_fetch_array($query); // ambil data siswa tersebut
	
	// BUat sebuah array
	$callback = array(
		'status' => 'success', // Set array status dengan success
		'kegiatan_namapegawai' => $data['pengguna_nama'], // Set array nama dengan isi kolom nama pada tabel siswa
	);
}else{
	$callback = array('status' => 'failed'); // set array status dengan failed
}

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>
