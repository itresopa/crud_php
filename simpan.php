<?php
	$nama = $_GET['nama']; //ini untuk menampung data yg dikirim
	$nim = $_GET['nim']; //ini untuk menampung data yg dikirim
	$kelas = $_GET['kelas']; //ini untuk menampung data yg dikirim
	
	//ini bagian koneksi ke database
	$host = "localhost"; 
	$user = "root"; //sesuai kan user phpmyadmin
	$pass = ""; //sesuaikan pass phpmyadmin, biasanya kosong
	$db = "pengantar_basisdata"; //sesuiakan db yg digunakan pada phpmyadmin
	$konek = mysqli_connect($host,$user,$pass,$db);
		
	$simpan_data_mahasiswa = "insert into mahasiswa (nama,nim,kelas) values ('$nama','$nim','$kelas')";
	$query_simpan_mahasiswa = mysqli_query($konek, $simpan_data_mahasiswa);
	if($query_simpan_mahasiswa){
		echo "Simpan Data Berhasil<br/>";
	}else{
		echo "Simpan Data Gagal<br/>";
	}
?>
<a href="index.php">Kembali</a>