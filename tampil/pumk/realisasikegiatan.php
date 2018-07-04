<head>
    <script src="../../assetsjs/js/jquery-3.2.1.js"></script>
	<script src="tampil/pumk/json/proses.js"></script>
</head>
<?php 
	  // membuat query max untuk kode barang
	  $carikode = mysql_query("select max(realisasi_no) from realisasi") or die (mysql_error());
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
	   $hasilkode = "REA".str_pad($kode, 3, "0", STR_PAD_LEFT);
	  } else {
	   $hasilkode = "REA001";
	  }
?>
<style type="text/css">
	input[type=text], input[type=number], textarea,select,input[type=date],.lg {
    width: 100%;
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
<body>
<script type="text/javascript">
    $(document).ready(function() {
      $('#validasi').validate({
        rules: {
          kegiatan_no: {
            required: true,
            remote: {
              url:"Tampil/pumk/cekkegiatan.php",
              type:'post',
              data:{
                nip: function(){
                  return $('#kegiatan_no').val();
                }
              }
            }
          },
          pengajuan_no: {
            required: true,
            remote: {
              url:"Tampil/pumk/cekpengajuan.php",
              type:'post',
              data:{
                nip: function(){
                  return $('#pengajuan_no').val();
                }
              }
            }
          },
          pelaporan_no: {
            required: true,
            remote: {
              url:"Tampil/pumk/cekpelaporan.php",
              type:'post',
              data:{
                nip: function(){
                  return $('#pelaporan_no').val();
                }
              }
            }
          },
          realisasi_anggaran: {
            required: true,
          },
          anggaran_sisa: {
            required: true,
          },
          realisasi_rincian: {
            required: true,
          }
        },
        messages: {
          kegiatan_no: {
            required: " Kode Kegiatan harap diisi",
            remote: jQuery.validator.format(" Kode Kegiatan sudah diinput"),
          },
          pengajuan_no: {
            required: " Kode Pengajuan harap diisi",
            remote: jQuery.validator.format(" Kode Pengajuan sudah diinput"),
          },
          pelaporan_no: {
            required: " Kode Pelaporan harap diisi",
            remote: jQuery.validator.format(" Kode Pelaporan sudah diinput"),
          },
          realisasi_anggaran: {
            required: " Realisasi Anggaran harap diisi sesuai dengan yang dilaporkan",
          },
          anggaran_sisa: {
            required: " Anggaran Sisa harap diisi",
          },
          realisasi_rincian: {
            required: " Harap isi nama realisasi",
          }
        }
      });
    });
    
    </script>
<?php
$pengguna_id=$_SESSION['pengguna_id'];
$pengguna_nama=$_SESSION['pengguna_nama'];
$pengguna_nip=$_SESSION['pengguna_nip'];
?>
<form action="index.php?page=realisasikegiatan_proses" method="post" enctype="multipart/form-data" id="validasi">
<h2 align="center">TAMBAH DATA REALISASI KEGIATAN</h2>
<br><hr><br>

<input type="hidden" name="realisasi_pengguna" value="<?php echo $_SESSION['pengguna_id'] ; ?>">
<input type="hidden" name="realisasi_penggunanama" value="<?php echo $_SESSION['pengguna_nama'] ; ?>">
<input type="hidden" name="realisasi_penggunanip" value="<?php echo $_SESSION['pengguna_nip'] ; ?>">
<table style="margin-left: 100px;">
    <tr>
		<td>Kode Realisasi</td>
		<td></td>
		<td><input type="text" name="realisasi_no" readonly="readonly" value="<?php echo $hasilkode; ?>"></td>
		<td><input type="hidden" id="kegiatan_id" name="kegiatan_id"></td>
		<td><input type="hidden" id="pengajuan_id" name="pengajuan_id"></td>
		<td><input type="hidden" id="pelaporan_id" name="pelaporan_id"></td>
	</tr>
	<tr>
		<td>Kode Kegiatan</td>
		<td></td>
		<td><input type="text" name="kegiatan_no" id="kegiatan_no" required="required"><button type="button" id="btn-search" style="width: 50px; font-weight: bold;">Cari</button></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anggaran Kegiatan</td>
		<td></td>
		<td><input type="text" id="kegiatan_anggaran" readonly="readonly"></td>
	</tr>
	<tr>
		<td>Kode Pengajuan</td>
		<td></td>
		<td><input type="text" name="pengajuan_no" id="pengajuan_no" required="required"><button type="button" id="btn-search2" style="width: 50px; font-weight: bold;">Cari</button></td></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Pengajuan</td>
		<td></td>
		<td><input type="text" id="pengajuan_nama" readonly="readonly"></td>
	</tr>
	<tr>
		<td>Kode Pelaporan</td>
		<td></td>
		<td><input type="text" name="pelaporan_no" id="pelaporan_no" required="required"><button type="button" id="btn-search3" style="width: 50px; font-weight: bold;">Cari</button></td></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Pelaporan</td>
		<td></td>
		<td><input type="text" id="pelaporan_nama" readonly="readonly"></td>
	</tr>
	<tr>
		<td>Realisasi Anggaran</td>
		<td></td>
		<td><input type="number" name="realisasi_anggaran" required="required"></td>
	</tr>
	<tr>
		<td>Anggaran Sisa</td>
		<td></td>
		<td><input type="number" name="anggaran_sisa" required="required"></td>
		<!--<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berkas Pengajuan</td>
		<td></td>
		<td><input type="file" name="realisasi_pengajuan" required="required"></td>-->
	</tr>
	<tr>
		<td>Nama Realisasi</td>
		<td></td>
		<td><textarea name="realisasi_rincian" required="required" cols="50" rows="10"></textarea></td>
		<!--<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berkas Pelaporan</td>-->
		<!--<td></td>-->
		<!--<td><input type="file" name="realisasi_pelaporan" required="required"></td>-->

	</tr>
	<tr>
		
	</tr>
	<tr>
		
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="pengguna_submit" value="SIMPAN"><input type="reset" name="pengguna_reset" value="BATAL"></td>
	</tr>
</table>
</form>
</fieldset>
</body>