<head>
<style type="text/css">
	input[type=text], input[type=number], .lg {
    width: 100%;
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
    }
</style>
</head>
<body>
<script type="text/javascript" src="../../assetsjs/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="../../assetsjs/js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.anu').keypress(function(e){
      var regex = new RegExp(/^['a-zA-Z'.\\s]+$/);
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if(regex.test(str)){
        return true;
      }
      else{
        e.preventDefault();
        return false;
      }
    });
    });


    $(document).ready(function() {
      $('#validasi').validate({
        rules: {
          pengguna_nip: {
            required: true,
            digits: true, 
            minlength:19,
            remote: {
              url:"Tampil/admin/ceknip.php",
              type:'post',
              data:{
                nip: function(){
                  return $('#pengguna_nip').val();
                }
              }
            }
          },
          pengguna_nama: {
            required: true,
            maxlength: 50,
          },
          pengguna_bidang: {
            required: true,
          },
          pengguna_subbidang: {
            required: true,
          },
          pengguna_tgllahir: {
            required: true,
          },
          pengguna_alamat: {
            required: true,
          },
          pengguna_telepon: {
            required: true,
            minlength:10,
            maxlength:13,
            remote: {
              url:"Tampil/admin/cekhp.php",
              type:'post',
              data:{
                nip: function(){
                  return $('#hp').val();
                }
              }
            }
          },
          pengguna_status: {
            required: true,
          }
        },
        messages: {
          pengguna_nip: {
            required: " NIP harus diisi",
            minlength: " NIK harus terdiri dari 19 karakter",
            remote: jQuery.validator.format(" NIP sudah terdaftar"),
          },
          pengguna_nama: {
            required: " Nama harus diisi",
            maxlength: " Nama maksimal terdiri dari 50 karakter",
          },
          pengguna_bidang: {
            required: " Bidang harus dipilih",
          },
          pengguna_subbidang: {
            required: " Sub Bidang harus dipilih",
          },
          pengguna_tgllahir: {
            required: " Tanggal lahir harus dipilih",
          },
          pengguna_alamat: {
            required: " Alamat harus diisi",
          },
          pengguna_telepon: {
            required: " Telepon harus diisi",
            minlength: "Telepon minimal 10 karakter",
            maxlength: "Telepon maksimal 10 karakter",
            remote: jQuery.validator.format(" Telepon sudah terdaftar"),
          },
          pengguna_status: {
            required: " Status harus dipilih",
          }
        }
      });
    });
    
    </script>
<!--<script>
	tinymce.init({selector:'textarea'});
</script>-->
<form action="index.php?page=pengguna_tambah_proses" method="post" id="validasi">
<h2 align="center">TAMBAH DATA PENGGUNA</h2>
<br><br>
<hr>
<table align="center" style="margin-left: 20px;">
	<tr>
		<td>NIP</td>
		<td></td>
		<td><input type="number" id="pengguna_nip" name="pengguna_nip"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td></td>
		<td><input type="text" name="pengguna_nama" class="lg anu"></td>
	</tr>
	<tr>
		<td>Bidang</td>
		<td></td>
		<td>
			<select name="pengguna_bidang" id="pengguna_bidang" class="lg">
			<option value="">--</option>
            <?php $tampil=mysql_query("SELECT * FROM bidang");
            while($t=mysql_fetch_array($tampil)){
             echo "<option value='$t[bidang_id]'>$t[bidang_nama]</option>";
             }
		?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Sub Bidang</td>
		<td></td>
		<td>
			<select name="pengguna_subbidang" class="lg" id="pengguna_subbidang">
			<option value="">--</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td></td>
		<td><input type="date" name="pengguna_tgllahir" id="datepicker" class="lg"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td></td>
		<td><textarea name="pengguna_alamat" class="lg"></textarea></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td></td>
		<td><input type="number" name="pengguna_telepon" class="lg" id="hp"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td></td>
		<td>
        <select name="pengguna_status" class="lg">
            <option value="">--</option>
        	<option value="1">Admin</option>
        	<option value="2">Pegawai</option>
        	<option value="3">PUMK</option>
        	<option value="4">Bendahara</option>
        </select>
		</td>
	</tr>
	<tr>
		<td><input type="text" hidden="hidden" name="pengguna_katasandi" value="<?php
         function adjisganteng()
         {
         $karakter="abcdefghijklmnopqrstuvwxyz1234567890";
         $pass=array();
          $karakterpanjang=strlen($karakter)-1;

         for ($i=0; $i <8 ; $i++) { 
	     $pos=rand(0,$karakterpanjang);
	     $pass[]=$karakter[$pos];
         }
         return
         implode($pass);
         }
         echo adjisganteng();
         ?>" readonly="readonly"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<br>
		<td><input type="submit" name="pengguna_submit" value="SIMPAN"><input type="reset" name="pengguna_reset" value="BATAL"></td>
	</tr>
</table>
</form>
<script type="text/javascript">
	$("#pengguna_bidang").change(function(){
    
        // variabel dari nilai combo box provinsi
        var bidang_id = $("#pengguna_bidang").val();
        
        
        // mengirim dan mengambil data
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "tampil/admin/combo/subbidangcari.php",
            data: "pengguna_bidang="+bidang_id,
            success: function(msg){
                
                // jika tidak ada data
                if(msg == ''){
                    alert('Tidak ada data bidang');
                }
                
                // jika dapat mengambil data,, tampilkan di combo box kota
                else{
                    $("#pengguna_subbidang").html(msg);                                                      
                }
            }
        });     
    });
</script>
</body>