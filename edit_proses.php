
 <?php 
include"koneksi.php";

if (isset($_POST['submit'])) {
	$id_hewan= htmlspecialchars($_POST['id_hewan']);
	$nama_hewan= htmlspecialchars($_POST['nama_hewan']);
	$kategori= htmlspecialchars($_POST['kategori']);
	$jumlah_hewan= htmlspecialchars($_POST['jumlah_hewan']);
	$deskripsi_hewan= htmlspecialchars($_POST['deskripsi_hewan']);
	$id_wilayah= htmlspecialchars($_POST['id_wilayah']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$kota = htmlspecialchars($_POST['kota']);
	$latitude = htmlspecialchars($_POST['latitude']);
	$longitude = htmlspecialchars($_POST['longitude']);

	$foto_hewan=$_FILES['foto_hewan']['name'];
	$tmp = $_FILES['foto_hewan']['tmp_name'];

	$fotobaru = date('dmYHis').$foto_hewan;
	$path = "foto_hewan/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
	

	$query = mysqli_query($koneksi,"UPDATE hewan set  id_hewan='$id_hewan', nama_hewan='$nama_hewan',kategori='$kategori',jumlah_hewan='$jumlah_hewan',deskripsi_hewan='$deskripsi_hewan',id_wilayah='$id_wilayah',alamat='$alamat',kota='$kota',foto_hewan='$fotobaru', latitude='$latitude',longitude='$longitude' where id_hewan='$id_hewan' ")or die(mysqli_error($koneksi));
	if ($query) {
		$message = 'Berhasil edit data';
	}
	}else{
		$message = 'Gagal edit data ';
	}
	header("Location: indexcrud.php?message=$message");
}
?>