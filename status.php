<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rental Mobil (Kelompok 4)</title>
	<meta charset="utf-8">
	<meta name="author" content="uin-alauddin.ac.id">
	<meta name="description" content="Website ini di buat oleh kelompok 4"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Pilih Mobil yang ingin di rental</h2>
				<h3 class="properties" style="text-align: center">Avanza-Innova-Mercedez-Grand Livina</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Your Booking Status</h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2"><span style="font-size:25px; color: #FF0000">Booking Status:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	
	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>TIPE MOBIL</li>
						<li><a href="#">TOYOTA</a></li>
						<li><a href="#">NISSAN</a></li>
						<li><a href="#">KIJANG</a></li>
						<li><a href="#">HONDA</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>NAMA KELOMPOK</li>
						<li><a href="#">Ahmad Muyassar Ibrahim</a></li>
						<li><a href="#">Syahrullah</a></li>
						<li><a href="#">Elma Ariana Hamzah</a></li>
						<li><a href="#">Ardiansyah</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Web untuk rental Mobil yang dibuat oleh kelompok 4</p>
					<ul>
						<li><a href="http://facebook.com/klp4" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+sonko" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Kelompok 4.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>