function search(){
	$("#loading").show(); // Tampilkan loadingnya
	
	$.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "../tampil/pumk/carikegiatan.php", // Isi dengan url/path file php yang dituju
        data: {kegiatan_no : $("#kegiatan_no").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
		},
		success: function(response){ // Ketika proses pengiriman berhasil
            $("#loading").hide(); // Sembunyikan loadingnya
            
            if(response.status == "success"){ // Jika isi dari array status adalah success
				$("#kegiatan_anggaran").val(response.realisasi_anggaran); // set textbox dengan id nama
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
	$("#loading").hide(); // Sembunyikan loadingnya
    
    $("#kegiatan_no").keyup(function(){ // Ketika user menekan tombol di keyboard
		if(event.keyCode == 13){ // Jika user menekan tombol ENTER
			search(); // Panggil function search
		}
	});
});
