<!doctype>
<head>
	<title>Aplikasi CRUD Berbasis WEB</title>
</head>
<body>
	<h1>Data mahasiswa</h1>
	<?php 
		$host = "localhost"; 
		$user = "root"; //sesuai kan user phpmyadmin
		$pass = ""; //sesuaikan pass phpmyadmin, biasanya kosong
		$db = "pengantar_basisdata"; //sesuiakan db yg digunakan pada phpmyadmin
		$konek = mysqli_connect($host,$user,$pass,$db);
		
		if($konek){
			echo "koneksi berhasil";
		}else{
			echo "koneksi tidak berhasil";
		}
	?>
	<h4>Tambah Data Biodata Mahasiswa<h4>
	<form action="simpan.php" method="get">
		<input type="text" name="nama" placeholder="nama"><br/>
		<input type="text" name="nim" placeholder="nim"><br/>
		<input type="text" name="kelas" placeholder="kelas"><br/>
		<input type="submit" value="Tambah"><br/>
	</form>
	<h4>Data Biodata Mahasiswa<h4>
	<table>
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>NIM</td>
			<td>Kelas</td>
			<td>Fungsi</td>
		</tr>
		<?php 
			$ambil_data_mahasiswa = "select * from mahasiswa";
			$query_data_mahasiswa = mysqli_query($konek, $ambil_data_mahasiswa);
			while($data_mahasiswa = mysqli_fetch_array($query_data_mahasiswa)){
		?>
		<tr>
			<td><?php echo $data_mahasiswa['no']; ?></td>
			<td><?php echo $data_mahasiswa['nama']; ?></td>
			<td><?php echo $data_mahasiswa['nim']; ?></td>
			<td><?php echo $data_mahasiswa['kelas']; ?></td>
			<td>
				<a href="ubah.php?no=<?php echo $data_mahasiswa['no']; ?>">Ubah</a>
				<a href="hapus.php?no=<?php echo $data_mahasiswa['no']; ?>">hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	
</body>