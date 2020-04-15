<?php
	$no = $_GET['no'];
	
	//koneksi database
	$host = "localhost"; 
	$user = "root"; //sesuai kan user phpmyadmin
	$pass = ""; //sesuaikan pass phpmyadmin, biasanya kosong
	$db = "pengantar_basisdata"; //sesuiakan db yg digunakan pada phpmyadmin
	$konek = mysqli_connect($host,$user,$pass,$db);
	
	$ambil_data_mahasiswa = "select * from mahasiswa where no='$no'";
	$query_data_mahasiswa = mysqli_query($konek, $ambil_data_mahasiswa);
	$data_mahasiswa = mysqli_fetch_array($query_data_mahasiswa);
	
?>
	<!-- form ubah -->
	<h1>Proses Ubah Data Mahasiswa</h1>
	<form action="proses_ubah.php" method="get">
		<input type="text" name="no" value="<?php echo $data_mahasiswa['no']; ?>" placeholder="no"><br/>
		<input type="text" name="nama" value="<?php echo $data_mahasiswa['nama']; ?>" placeholder="nama"><br/>
		<input type="text" name="nim" value="<?php echo $data_mahasiswa['nim']; ?>" placeholder="nim"><br/>
		<input type="text" name="kelas" value="<?php echo $data_mahasiswa['kelas']; ?>" placeholder="kelas"><br/>
		<input type="submit" value="Ubah Data">
	</form>
