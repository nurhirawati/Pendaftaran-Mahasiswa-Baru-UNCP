<?php 	
//koneksi database
$koneksi	= mysqli_connect("localhost","root","","univdb");
//pesan kesalahan
if(mysqli_connect_errno()){
	echo "Gagal koneksi database".mysqli_connect_error();
}
