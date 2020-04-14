<?php 

include 'koneksi.php';
$nama_hewan = htmlspecialchars($_POST['nama_hewan']);
$id_hewan = htmlspecialchars($_POST['id_hewan']);
$kategori = htmlspecialchars($_POST['kategori']);
$jumlah_hewan = htmlspecialchars($_POST['jumlah_hewan']);
$deskripsi_hewan = htmlspecialchars($_POST['deskripsi_hewan']);
$id_wilayah = htmlspecialchars($_POST['id_wilayah']);
$alamat = htmlspecialchars($_POST['alamat']);
$kota = htmlspecialchars($_POST['kota']);
$latitude = htmlspecialchars($_POST['latitude']);
$longitude = htmlspecialchars($_POST['longitude']);
$foto_hewan=$_FILES['foto_hewan']['name'];
$tmp = $_FILES['foto_hewan']['tmp_name'];

$fotobaru = date('dmYHis').$foto_hewan;
$path = "foto_hewan/".$fotobaru;

if(move_uploaded_file($tmp, $path)){

$result = mysqli_query($koneksi, "INSERT INTO hewan (nama_hewan,id_hewan,kategori,jumlah_hewan,deskripsi_hewan,id_wilayah,foto_hewan,alamat,kota,latitude,longitude) VALUES ('$nama_hewan','$id_hewan','$kategori','$jumlah_hewan','$deskripsi_hewan','$id_wilayah','$fotobaru','$alamat','$kota','$latitude','$longitude')");

if ($result) {
	echo "oke";
	$message = 'Berhasil input data';
	header("Location: indexcrud.php?");
}
}else{
	echo "gagal";
	$message = 'Gagal menyimpan data ';
	header("Location: form.php?");
}

?> 
