$(function(){

	$('.tombolTambahData').on("click",function(){
		$('#judulModalLabel').html("Tambah Data Mahasiswa");
		$('.modal-footer button[type=submit]').html("Tambah Data");
	});

	$('.tombolUbahData').on("click",function(){
		$('#judulModalLabel').html("Ubah Data Mahasiswa");
		$('.modal-footer button[type=submit]').html("Ubah Data");
		$('.modal-body form').attr("action","http://localhost/latihan/phpmvc/public/mahasiswa/ubah");

		const id = $(this).data("id");

		$.ajax({
			url : "http://localhost/latihan/phpmvc/public/mahasiswa/getUbah",
			data : {id :id},
			method : "post",
			dataType : "json",
			success : function(data){
				console.log(data);
				$("#nama").val(data.nama);
				$("#nim").val(data.nim);
				$("#email").val(data.email);
				$("#jurusan").val(data.jurusan);
				$("#id").val(data.id);

			}



		});
		// $.ajax({
		// 	console.log('oke');

		// });

	});




});