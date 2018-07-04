<?php
include "../../../koneksi.php"; // Load file koneksi.php

$no = $_POST['kegiatan_no']; // Ambil data NIS yang dikirim lewat AJAX

$query = mysql_query("SELECT * FROM kegiatan WHERE kegiatan_no='".$no."'"); // Tampilkan data siswa dengan NIS tersebut
$row = mysql_num_rows($query); // Hitung ada berapa data dari hasil eksekusi $query

if($row > 0){ // Jika data lebih dari 0
	$data = mysql_fetch_array($query); // ambil data siswa tersebut
	
	// BUat sebuah array
	$callback = array(
		'status' => 'success', // Set array status dengan success
		'kegiatan_anggaran' => $data['kegiatan_anggaran'], // Set array nama dengan isi kolom nama pada tabel siswa
		'kegiatan_id' => $data['kegiatan_id'],
	);
}else{
	$callback = array('status' => 'failed'); // set array status dengan failed
}

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>
