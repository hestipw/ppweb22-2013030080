<?php
	session_start();

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis = $_POST['jenis'];

	echo $nama.' '.$alamat.' '.$jenis;

	$_SESSION['nama'] = $nama;
?>
<br>
<a href="mhs.php">Halaman Mahasiswa</a>
<br><a href="destroy.php">destroy session</a>