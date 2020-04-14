<?php 
include 'koneksi.php';
$id_hewan=$_GET['id_hewan']; 
$sql = mysqli_query($koneksi,"DELETE from hewan where id_hewan='$id_hewan' ");
	if ($sql){
		$message = "berhasil hapus data";

	}else{
		$message = "gagal hapus data!!";
	}
	header("location:indexcrud.php")
 ?>