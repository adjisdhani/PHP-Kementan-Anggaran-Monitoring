<?php
				$pengguna_id = $_SESSION['pengguna_id'];
				$query="SELECT * FROM pengguna WHERE pengguna.pengguna_id = '$pengguna_id'";
				$result=mysql_query($query) or die(mysql_error());
				$datapengguna = mysql_fetch_array($result);
?>
<style>
input[type=text], input[type=number],textarea,input[type=date],input[type=number], .lg {
    width: 500px;
    padding: 3px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}

	input[type=button], input[type=submit], input[type=reset] {
    background-color: #036d0a;
    border: none;
    color: white;
    padding: 8px 18px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
.labelfrm {
      display:block;
      font-size:small;
      margin-top:5px;
    }
    .error {
      font-size:small;
      color:red;
</style>
<script type="text/javascript">
    $(document).ready(function() {
      $('#validasi').validate({
        rules: {
          pengajuan_nama: {
            required: true,
          },
          pengajuan_anggaran: {
            required: true,
          },
          pengajuan_rincian: {
            required: true,
          }
        },
        messages: {
          pengajuan_nama: {
            required: "Nama pengajuan harap diisi",
          },
          pengajuan_anggaran: {
            required: "Anggaran yang diajukan harap diisi",
          },
          pengajuan_rincian: {
            required: "Rincian pengajuan harap diisi",
          }
        }
      });
    });
    
    </script>

<form action="index.php?page=pengajuan_tambah_proses" method="post" enctype="multipart/form-data" id="validasi">
<h2 align="center">TAMBAH DATA PENGAJUAN</h2>
<br><hr><br>
<table style="margin-left: 20px;">
<!-- Membuat Penomoran Otomatis -->
<?php 
	  // membuat query max untuk kode barang
	  $carikode = mysql_query("select max(pengajuan_no) from pengajuan") or die (mysql_error());
	  // menjadikannya array
	  $datakode = mysql_fetch_array($carikode);
	  // jika $datakode
	  if ($datakode) {
	   // membuat variabel baru untuk mengambil kode barang mulai dari 1
	   $nilaikode = substr($datakode[0], 3);
	   // menjadikan $nilaikode ( int )
	   $kode = (int) $nilaikode;
	   // setiap $kode di tambah 1
	   $kode = $kode + 1;
	   // hasil untuk menambahkan kode 
	   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
	   // atau angka sebelum $kode
	   $hasilkode = "PGJ".str_pad($kode, 3, "0", STR_PAD_LEFT);
	  } else {
	   $hasilkode = "PGJ001";
	  }
?>
    <tr>
    	<td>Nomor Pengajuan</td>
    	<td>:</td>
    	<td><input type="text" name="pengajuan_no" readonly="readonly"  value="<?php echo $hasilkode;  ?>"></td>
    </tr>
	<tr>
		<td>Nama Pegawai</td>
		<td>:</td>
		<td><input type="text" name="pengguna_nama" value="<?php echo $_SESSION['pengguna_nama'];?>" readonly="readonly"></td>
	</tr>
	<tr>
		<td>Nama Pengajuan</td>
		<td>:</td>
		<td>
			<input type="text" name="pengajuan_nama" required="required">
		</td>
	</tr>
	<tr>
		<td>Anggaran Pengajuan</td>
		<td>:</td>
		<td>
			<input type="number" name="pengajuan_anggaran" class="lg" required="required">
		</td>
	</tr>
	<tr>
		<td>Rincian Pengajuan</td>
		<td>:</td>
		<td><textarea name="pengajuan_rincian" required="required" cols="60px;" rows="10px"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="pengajuan_submit" value="SIMPAN"><input type="reset" name="pengajuan_reset" value="BATAL"></td>
	</tr>
</table>
</form>