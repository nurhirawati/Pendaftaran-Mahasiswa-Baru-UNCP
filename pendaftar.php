<center><font size="6">Pengajuan Daftar Mahasiswa</font></center>
<?php
//memasukkan file config.php
include('config.php');
// tb_fakultas,tb_prodi
 
$sql = mysqli_query($koneksi, "SELECT * FROM tb_daftar");
?>

	
	<div class="container" style="margin-top:20px">
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
                    <th>Tempat Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>Tanggal Lahir</th>
					<th>Kode Fakultas</th>
                    <th>Kode Prodi</th>
					<th>Gelombang</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no = 1;
					while($data = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['nim'].'</td>
							<td>'.$data['nama_mhs'].'</td>
                            <td>'.$data['tempat_lahir'].'</td>
							<td>'.$data['jk'].'</td>
							<td>'.$data['alamat'].'</td>
							<td>'.$data['tanggal_lahir'].'</td>
                            <td>'.$data['kode_fakultas'].'</td>
                            <td>'.$data['kode_prodi'].'</td>
							<td>'.$data['gelombang'].'</td>
		
							<td>
								<a href="accept.php?nim='.$data['nim'].'" class="btn btn-primary btn-sm" onclick="return confirm(\'pendaftar ini akan di terima\')">accept</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				// }else{
				// 	echo '
				// 	<tr>
				// 		<td colspan="6">Tidak ada data.</td>
				// 	</tr>
				// 	';
				// }
				?>
			<tbody>
		</table>
	</div>
	</div>
