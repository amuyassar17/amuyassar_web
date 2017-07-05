<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">Rental Mobil Klp 4</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="#">Help</a>
				<span>|</span>
				<a href="#">Profile Settings</a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="tambah_kendaraan.php"><span>Dashboard</span></a></li>
			    <li><a href="permintaan.php"><span>Permintaan Sewa</span></a></li>
			    <li><a href="index.php"><span>Pesan</span></a></li>
			    <li><a href="indexx.php"><span>Buat Artikel</span></a></li>
			    <li><a href="registrasi.php"><span>Tambah Admin</span></a></li>
			</ul>
		</div>