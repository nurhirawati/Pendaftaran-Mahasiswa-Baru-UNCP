<?php

include('config.php');

if(isset($_GET['nim'])){
	$nim = $_GET['nim'];
    $query="SELECT * FROM tb_daftar WHERE nim='$nim'";
	$ambil=mysqli_query($koneksi,$query);
    $data=mysqli_fetch_assoc($ambil);
    $nim=$data['nim'];
    $nama_mhs=$data['nama_mhs'];
    $tempat_lahir=$data['tempat_lahir'];
    $jk=$data['jk'];
    $alamat=$data['alamat'];
    $tanggal_lahir=$data['tanggal_lahir'];
    $kode_fakultas=$data['kode_fakultas'];
    $kode_prodi=$data['kode_prodi'];
    $gelombang=$data['gelombang'];
    	$add = mysqli_query($koneksi,  "INSERT INTO  tb_biodata(id_mhs,nim, nama_mhs, tempat_lahir, jk, alamat, tanggal_lahir,kode_fakultas,kode_prodi,gelombang) VALUES ('','$nim', '$nama_mhs', '$tempat_lahir', '$jk', '$alamat','$tanggal_lahir','$kode_fakultas','$kode_prodi','$gelombang')") or die(mysqli_error($koneksi));		
        if($add){
        $del = mysqli_query($koneksi, "DELETE FROM tb_daftar WHERE nim='$nim'") or die(mysqli_error($koneksi));
        echo"<script>
        alert('penerimaan mahasiswa baru selesai');
         document.location='index2.php?page=tampil_mhs';
        </script>";
    }else{
         echo"<script>
        alert('penerimaan mahasiswa baru gagal');
         document.location='index2.php?page=tampil_mhs';
        </script>";
    }
}else{
    echo"nim kosong";
}
	// if(mysqli_num_rows($cek) > 0){
	
?>
