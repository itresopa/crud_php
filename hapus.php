<?php
	$no = $_GET['no'];
	
	//koneksi ke database
	$host = "localhost"; 
	$user = "root"; //sesuai kan user phpmyadmin
	$pass = ""; //sesuaikan pass phpmyadmin, biasanya kosong
	$db = "pengantar_basisdata"; //sesuiakan db yg digunakan pada phpmyadmin
	$konek = mysqli_connect($host,$user,$pass,$db);
	
	//proses hapus
	$hapus_data_mahasiswa = "delete from mahasiswa where no='$no'";
	$query_hapus_data_mahasiswa = mysqli_query($konek, $hapus_data_mahasiswa);
	
	//jika proses hapus berhasil
	if($query_hapus_data_mahasiswa){
		echo "Berhasil hapus data mahasiswa<br/>";
	}else{
		echo "Tidak berhasil hapus data mahasiswa<br/>";	
	}
?>

<a href="index.php">Kembali</a>