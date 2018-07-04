function search(){
	
	$.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "tampil/admin/json/cari.php", // Isi dengan url/path file php yang dituju
        data: {kegiatan_nippegawai : $("#kegiatan_nippegawai").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
		},
		success: function(response){ // Ketika proses pengiriman berhasil
            
            if(response.status == "success"){ // Jika isi dari array status adalah success
				$("#kegiatan_namapegawai").val(response.kegiatan_namapegawai); // set textbox dengan id nama
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
    
    $("#kegiatan_nippegawai").keyup(function(){ // Ketika user menekan tombol di keyboard
		if(event.keyCode == 13){ // Jika user menekan tombol ENTER
			search(); // Panggil function search
		}
	});
});
