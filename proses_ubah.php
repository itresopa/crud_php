<?php
	$no = $_GET['no'];
	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$kelas = $_GET['kelas'];
	
	//koneksi database
	$host = "localhost"; 
	$user = "root"; //sesuai kan user phpmyadmin
	$pass = ""; //sesuaikan pass phpmyadmin, biasanya kosong
	$db = "pengantar_basisdata"; //sesuiakan db yg digunakan pada phpmyadmin
	$konek = mysqli_connect($host,$user,$pass,$db);
	
	//proses ubah ke database
	$ubah_data_mahasiswa = "update mahasiswa set nama='$nama', nim='$nim' where no='$no'";
	$query_data_mahasiswa = mysqli_query($konek, $ubah_data_mahasiswa);
	
	//jika proses ubah berhasil
	if($query_data_mahasiswa){
		echo "Proses Ubah data mahasiswa berhasil<br/>";
	}else{
		echo "Proses Ubah data mahasiswa tidak berhasil<br/>";	
	}
?>

<a href="index.php">Kembali</a>