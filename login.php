<?php 
include "config.php";

if(isset($_POST["submit"])){
	$nama = $_POST['username'];
	$pw = $_POST['password'];
	$query = "SELECT * FROM tb_admin WHERE username ='$nama' AND pw ='$pw'";
	$ada = mysqli_query($koneksi,$query);
	if($ada->num_rows > 0){
		   header("Location:index2.php?nama='$nama'");
}else{
	echo '<script>alert("login gagal."); 
	document.location="login.php";</script>';
}

}

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Laman Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">login admin</h3>

		      	<form action="" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name ="username" required>
		      		</div>
	            <div class="form-group">
	              <input type="password" class="form-control" placeholder="Password" name="password" required>
	            </div>
	            <div class="form-group">
					<center>
	            	<div class="tombol" >
    			<button type="submit" name="submit">Masuk</button>
			</div>
			</center>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; OPSI &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="" class="px-2 py-2 mr-md-1 rounded tombol"><span class="ion-logo-facebook mr-2"></span>Admin</a>
	          	<a href="pendaftaran.php" class="px-2 py-2 ml-md-1 rounded tombol"><span class="ion-logo-twitter mr-2"></span>Form Daftar</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

