<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
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

			$cek = mysqli_query($koneksi, "SELECT * FROM tb_biodata WHERE nim='$nim'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO  tb_biodata(id_mhs,nim, nama_mhs, tempat_lahir, jk, alamat, tanggal_lahir,kode_fakultas,kode_prodi,gelombang) VALUES('','$nim', '$nama_mhs', '$tempat_lahir', '$jk', '$alamat','$tanggal_lahir','$kode_fakultas','$kode_prodi','$gelombang')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index2.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, nim sudah terdaftar.</div>';
			}
		}
		?>

		<form action="index2.php?page=tambah_mhs" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nim</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nim" class="form-control" size="4" required>
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
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
                        <td>
                            <input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
                        </td>
				</div>

			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="alamat" class="form-control" required>
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

			
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
