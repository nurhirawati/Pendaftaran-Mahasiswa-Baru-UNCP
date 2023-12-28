<?php
//memasukkan file config.php
include('config.php');
// tb_fakultas,tb_prodi
 
$sql = mysqli_query($koneksi, "SELECT * FROM tb_biodata
					INNER JOIN tb_fakultas ON tb_biodata.kode_fakultas = tb_fakultas.kode_fakultas
					INNER JOIN tb_prodi ON tb_biodata.kode_prodi = tb_prodi.kode_prodi") ;
?>

	
	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Kelamin</th>
					<th>Fakultas</th>
					<th>Program Studi</th>
					<th>Gelombang</th>
					<th>UKT</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// if(mysqli_num_rows($sql) > 0){
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['nim'].'</td>
							<td>'.$data['nama_mhs'].'</td>
							<td>'.$data['jk'].'</td>
							<td>'.$data['nama_fakultas'].'</td>
							<td>'.$data['nama_prodi'].'</td>
							<td>'.$data['gelombang'].'</td>
							<td>'.$data['ukt'].'</td>
							<td>
								<a href="delete.php?nim='.$data['nim'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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
