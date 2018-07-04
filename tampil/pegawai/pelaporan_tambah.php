<?php
				$pengguna_id = $_SESSION['pengguna_id'];
				$query="SELECT * FROM pengguna WHERE pengguna.pengguna_id = '$pengguna_id'";
				$result=mysql_query($query) or die(mysql_error());
				$datapengguna = mysql_fetch_array($result);
?>
<?php 
	  // membuat query max untuk kode barang
	  $carikode = mysql_query("select max(pelaporan_no) from pelaporan") or die (mysql_error());
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
	   $hasilkode = "PLP".str_pad($kode, 3, "0", STR_PAD_LEFT);
	  } else {
	   $hasilkode = "PLP001";
	  }
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
          pelaporan_nama: {
            required: true,
          },
          pelaporan_rincian: {
            required: true,
          },
          pelaporan_berkas: {
            required: true,
          }
        },
        messages: {
          pelaporan_nama: {
            required: "Nama pelaporan harap diisi",
          },
          pelaporan_rincian: {
            required: "Harap rincian pelaporan diisi",
          },
          pelaporan_berkas: {
            required: "Harap mengunggah berkas pelaporan Anda",
          }
        }
      });
    });
    
    </script>
<form action="index.php?page=pelaporan_tambah_proses" method="post" enctype="multipart/form-data" id="validasi">
<h2 align="center">TAMBAH DATA PELAPORAN</h2>
<br><hr><br>
<table style="margin-left: 20px;">
    <tr>
    	<td>Kode Pelaporan</td>
    	<td>:</td>
    	<td><input type="text" name="pelaporan_no" readonly="readonly" value="<?php echo $hasilkode;  ?>"></td>
    </tr>
	<tr>
		<td>Nama Pegawai</td>
		<td>:</td>
		<td><input type="text" name="pengguna_nama" readonly="readonly" value="<?php echo $_SESSION['pengguna_nama'];?>" ></td>
	</tr>
	<tr>
		<td>Nama Pelaporan</td>
		<td>:</td>
		<td>
			<input type="text" name="pelaporan_nama" required="required">
		</td>
	</tr>
	<tr>
		<td>Rincian Pelaporan</td>
		<td>:</td>
		<td><textarea name="pelaporan_rincian" required="required" cols="60px;" rows="10px"></textarea></td>
	</tr>
	<tr>
		<td>Berkas Pelaporan</td>
		<td>:</td>
		<td><input type="file" name="pelaporan_berkas" required="required"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="pengajuan_submit" value="SIMPAN"><input type="reset" name="pengajuan_reset" value="BATAL"></td>
	</tr>
</table>
</form>
</fieldset>