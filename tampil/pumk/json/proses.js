function search(){
	
	$.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "tampil/pumk/json/cari.php", // Isi dengan url/path file php yang dituju
        data: {kegiatan_no : $("#kegiatan_no").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
		},
		success: function(response){ // Ketika proses pengiriman berhasil
            
            if(response.status == "success"){ // Jika isi dari array status adalah success
				$("#kegiatan_anggaran").val(response.kegiatan_anggaran); 
                $("#kegiatan_id").val(response.kegiatan_id);// set textbox dengan id nama
			}else{ // Jika isi dari array status adalah failed
				alert("Data Tidak Ditemukan");
			}
		},
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
			alert(xhr.responseText);
        }
    });
}

function search2(){
    
    $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "tampil/pumk/json/cari2.php", // Isi dengan url/path file php yang dituju
        data: {pengajuan_no : $("#pengajuan_no").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
            
            if(response.status == "success"){ // Jika isi dari array status adalah success
                $("#pengajuan_nama").val(response.pengajuan_nama); // set textbox dengan id nama
                $("#pengajuan_id").val(response.pengajuan_id); // set textbox dengan id nama
            }else{ // Jika isi dari array status adalah failed
                alert("Data Tidak Ditemukan");
            }
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
            alert(xhr.responseText);
        }
    });
}

function search3(){
    
    $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "tampil/pumk/json/cari3.php", // Isi dengan url/path file php yang dituju
        data: {pelaporan_no : $("#pelaporan_no").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
            
            if(response.status == "success"){ // Jika isi dari array status adalah success
                $("#pelaporan_nama").val(response.pelaporan_nama); // set textbox dengan id nama
                $("#pelaporan_id").val(response.pelaporan_id); // set textbox dengan id nama
            }else{ // Jika isi dari array status adalah failed
                alert("Data Tidak Ditemukan");
            }
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
            alert(xhr.responseText);
        }
    });
}


$(document).ready(function(){
	
    $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
        search(); // Panggil function search
    });
    $("#btn-search2").click(function(){ // Ketika user mengklik tombol Cari
        search2(); // Panggil function search
    });
    $("#btn-search3").click(function(){ // Ketika user mengklik tombol Cari
        search3(); // Panggil function search
    });
});
