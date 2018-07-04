<head>
    <script src="../../assetsjs/js/jquery-3.2.1.js"></script>
	<script src="tampil/admin/json/proses.js"></script>
<style type="text/css">
	input[type=text], input[type=number], textarea,input[type=date],.lg {
    width: 100%;
    padding: 3px 20px;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}
    .a{
    width: 500px;
    padding: 3px 20px;
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
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
      $('#validasi').validate({
        rules: {
          kegiatan_nippegawai: {
            required: true,
            digits: true,
            minlength:19,
          },
          kegiatan_judul: {
            required: true,
            maxlength: 50,
          },
          kegiatan_subjudul: {
            required: true,
          },
          kegiatan_anggaran: {
            required: true,
          },
          kegiatan_tanggal: {
            required: true,
          },
          kegiatan_tanggalakhir: {
            required: true,
          },
          kegiatan_berkas: {
            required: true,
          }
        },
        messages: {
          kegiatan_nippegawai: {
            required: " NIP harus diisi",
            minlength: " NIK harus terdiri dari 19 karakter",
          },
          kegiatan_judul: {
            required: " Judul kegiatan harus dipilih",
          },
          kegiatan_subjudul: {
            required: " Sub Judul Kegiatan harus dipilih",
          },
          kegiatan_anggaran: {
            required: " Anggaran Kegiatan harus diisi",
          },
          kegiatan_tanggal: {
            required: " Tanggal Kegiatan harus dipilih",
          },
          kegiatan_tanggalakhir: {
            required: " Tanggal Kegiatan harus dipilih",
          },
          kegiatan_berkas: {
            required: " Rincian Kegiatan harus diisi",
          }
        }
      });
    });
    
    </script>
<!--<script>
    tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media save table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image|print preview media | forecolor backcolor emoticons",
    });
  </script>-->
</head>

<?php 
	  // membuat query max untuk kode barang
	  $carikode = mysql_query("select max(kegiatan_no) from kegiatan") or die (mysql_error());
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
	   $hasilkode = "KGT".str_pad($kode, 3, "0", STR_PAD_LEFT);
	  } else {
	   $hasilkode = "KGT001";
	  }
?>
<p style="font-size: 30px; font-weight: bold;" align="center">TAMBAH DATA KEGIATAN</p>
<hr>
<br><br>
<form action="index.php?page=kegiatan_tambah_proses" method="post" enctype="multipart/form-data" id="validasi">
<table>
    <tr>
		<td>Kode Kegiatan</td>
		<td></td>
		<td><input type="text" name="kegiatan_no" readonly="readonly" value="<?php echo $hasilkode; ?>"></td>
	</tr>
    <tr>
		<td>NIP</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<input type="text" name="kegiatan_nippegawai" id="kegiatan_nippegawai" required="required"><button type="button" id="btn-search" style="width: 50px; font-weight: bold;">Cari</button></td>
		<td></td>
		<td></td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;Nama Pegawai</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<input type="text" name="kegiatan_namapegawai" id="kegiatan_namapegawai" style="width:200px;"></td>
	</tr>
    <tr>
		<td>Judul Kegiatan</td>
		<td></td>
		<td>
			<select name="kegiatan_judul" id="kegiatan_judul" class="a" required="required">
			<option value="">--</option>
            <?php $tampil=mysql_query("SELECT * FROM judul ORDER BY judul_id ASC");
            while($t=mysql_fetch_array($tampil)){
             echo "<option value='$t[judul_id]'>$t[judul_nama]</option>";
             }
		?>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;Tanggal Awal Kegiatan</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<input type="date" name="kegiatan_tanggal" style="width: 200px;" required="required" /></td>
	</tr>
	<tr>
		<td>Sub Judul Kegiatan</td>
		<td></td>
		<td>
			<select name="kegiatan_subjudul" id="kegiatan_subjudul" class="a" required="required">
			<option value="">--</option>
            <?php $tampil=mysql_query("SELECT * FROM subjudul ORDER BY subjudul_id ASC");
            while($t=mysql_fetch_array($tampil)){
             echo "<option value='$t[subjudul_id]'>$t[subjudul_nama]</option>";
             }
		?>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;Tanggal Akhir Kegiatan</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<input type="date" name="kegiatan_tanggalakhir" style="width: 200px;" required="required" /></td>
	</tr>
	<tr>
		<td>Anggaran Kegiatan</td>
		<td></td>
		<td><input type="number" name="kegiatan_anggaran" required="required" /></td>
	</tr>
	<tr>
		<td>Rincian Kegiatan</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<textarea name="kegiatan_berkas" required="required" cols="60px;" rows="10px"></textarea></td>
	</tr>
</table>
<table style="margin-left: -600px;">
	<tr>
	<td valign="bottom"><input type="submit" name="kegiatan_tambah" value="SIMPAN"></td>
	<td valign="bottom"><input type="reset" name="kegiatan_batal" value="BATAL"></td>
	</tr>
</table>
</form>