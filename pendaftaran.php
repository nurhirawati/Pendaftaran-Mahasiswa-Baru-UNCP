<?php include('config.php'); 

		if(isset($_POST['submit'])){
			$nim			= $_POST['nim'];
			$nama_mhs		= $_POST['nama_mhs'];
			$tempat_lahir   = $_POST['tempat_lahir'];
			$tanggal_lahir  = $_POST['tanggal_lahir'];
			$jk				= $_POST['jk'];
			$alamat			= $_POST['alamat'];
			$kode_fakultas	= $_POST['kode_fakultas'];
			$kode_prodi		= $_POST['kode_prodi'];
			$gelombang		= $_POST['gelombang'];
		
$query="SELECT * FROM tb_biodata WHERE nim = $nim";
$check = mysqli_query($koneksi,$query);
if(mysqli_num_rows($check)==0){
				$sql = mysqli_query($koneksi, "INSERT INTO  tb_daftar(id_mhs,nim, nama_mhs, tempat_lahir, jk, alamat, tanggal_lahir,kode_fakultas,kode_prodi,gelombang) VALUES('','$nim', '$nama_mhs', '$tempat_lahir', '$jk', '$alamat','$tanggal_lahir','$kode_fakultas','$kode_prodi','$gelombang')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("pendaftaran berhasil tunggu notifikasi melalui email"); 
					document.location="login.php";
					</script>';
				}else{
					echo '<script>alert("pendaftaran gagal, mohon hubungi cs"); 
					document.location="login.php";
					</script>';
				}
	}else{
	echo '<script>alert("NIM yang anda inputkan sudah terdaftar"); 
					document.location="login.php";
					</script>';
}}
		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar</title>
	<link rel="stylesheet" href="assets/css/daftar.css">
</head>
<body>
	<section class="box-formulir">
	<center><h1>Formulir Pendaftaran</h1></center>
<!-- daftar -->
<div class="box">
	<form action="pendaftaran.php" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" name="nim">Nim</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nim" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama_mhs" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="tempat_lahir" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="date" name="tanggal_lahir" class="form-control" size="4" required>
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label><br>
				<select name="jk" id="jk">
					<option value="">jenis kelamin</option>
					<option value="laki-laki">laki-laki</option>
					<option value="Perempuan">perempuan</option>
				</select>
				</div>
	<div class="item ">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
	<textarea class="alamat" type="text" name="alamat" rows="5" required placeholder="tuliskan alamat lengkap anda di sini....."></textarea>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kode Fakultas</label>
				<div class="col-md-6 col-sm-6">
				<select class="input-control" name="kode_fakultas">
                                <option value="">--Pilih--</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                </select>
			</div>
			</div>
				<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kode Prodi</label>
				<div class="col-md-6 col-sm-6">
				<select class="input-control" name="kode_prodi">
                                <option value="">--Pilih--</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                </select>
			</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Gelombang</label>
				<div class="col-md-6 col-sm-6">
				<select class="input-control" name="gelombang">
                                <option value="">--Pilih--</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                </select>
				</div>
			</div>
			<div ontouchstart="">
<center>  
		<div class="tombol" >
    	<button type="submit" name="submit">Daftar</button>
  		</div>
</center>
  </div>
  </form>
</div>
<!-- end daftar -->
	</section>

</body>
</html>