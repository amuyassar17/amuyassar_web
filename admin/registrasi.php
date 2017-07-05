<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Tambah Data Admin 
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Tambah Data Admin</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Nama Lengkap <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="nama" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Username <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="uname" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Alamat <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="Almat" required />
								</p>
								<p>
									<span class="req">Current Images</span>
									<label>Foto <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Email<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="email" required />
								</p>	
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Password<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="pass" required />
								</p>	
							
						</div>
						
						<div class="buttons">
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								$foto = basename($_FILES['image']['name']);
								$pass=$_POST['pass'];
								$user=$_POST['uname'];
								$alamat = $_POST['Almat'];
								$email = $_POST['email'];
								$nama = $_POST['nama'];
								$qr = "INSERT INTO admin (uname,pass,Foto,Almat,email,nama) 
													VALUES ('$user','$pass','$foto','$alamat','$email','$nama')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Berhasil Tambah Admin\");
											window.location = (\"registrasi.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					<div class="box-content">
						<a href="registrasi.php" class="add-button"><span>Lihat Data Admin</span></a>
						<div class="cl">&nbsp;</div>
						
						
						
					</div>
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - Rental Mobil (Klp 4)</span>
		<span class="right">
			Design by Klp 4</a>
		</span>
	</div>
</div>
	
</body>
</html>