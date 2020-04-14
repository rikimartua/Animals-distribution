<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("location:login.php");
	exit();
}
include "koneksi.php";
$id_hewan= $_GET['id_hewan'];
$sql = mysqli_query($koneksi," select nama_hewan,id_hewan,kategori,jumlah_hewan, deskripsi_hewan,id_wilayah,alamat,kota,latitude,longitude from hewan where id_hewan='$id_hewan'");
$ambil=$sql->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<link rel="icon" type="image/png" href="img/logo-fauna.png">
	<link rel="stylesheet" href="css/bootstrap.min.data.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>

<body class="bg-info">
	<!--Navbar -->
	<nav class="navbar fixed navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="indexcrud.php">WEBSIDE FAUNA</a>
			</div>
			<ul class="nav navbar-nav navbar-right">

				<li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	<!--/.Navbar -->
	<form method="POST" action="edit_proses.php" enctype="multipart/form-data">
		<div class="container">
			<link rel="stylesheet" href="bootstrap.min.data.css">
			<center>
				<h1><b>EDIT DATA HEWAN</b></h1><br>
			</center>


			<div class="form-group">
				<label>ID Hewan</label>
				<tr style="display: none;">
					<td> <input type="hidden" class="form-control" name="id_hewan" value="<?php echo $ambil['id_hewan']?>"> </td>
				</tr>
			</div>

			<div class="form-group">
				<label>Nama Hewan</label>
				<input type="text" class="form-control" value="<?php echo $ambil['nama_hewan']; ?>" name="nama_hewan">
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<select class="form-control"  name="kategori" >
					<option selected hidden value=""><?php echo $ambil['kategori']; ?> </option>
					<option value="punah">Punah</option>
					<option value="langka">Langka</option>
					<option value="tersedia">Ada</option>	
				</select>
			</div>
			<div class="form-group">
				<label>Jumlah</label>
				<input type="text" class="form-control" value="<?php echo $ambil['jumlah_hewan']; ?>" name="jumlah_hewan">
			</div>
			<div class="form-group">
				<label>Gambar</label>
				<input type="file" name="foto_hewan" class="form-control" accept="image/*">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<input type="text" class="form-control" value="<?php echo $ambil['deskripsi_hewan']; ?>" name="deskripsi_hewan">
			</div>
			<div class="form-group">
				<label>Provinsi</label>
				<input type="text" class="form-control" value="<?php echo $ambil['alamat']; ?>" name="alamat">
			</div>
			<div class="form-group">
				<label>Kota</label>
				<input type="text" class="form-control" value="<?php echo $ambil['kota']; ?>" name="kota">
			</div>
			<div class="form-group">
				<label>Latitude</label>
				<input type="text" class="form-control" value="<?php echo $ambil['latitude']; ?>" name="latitude">
			</div>
			<div class="form-group">
				<label>Longitude</label>
				<input type="text" class="form-control" value="<?php echo $ambil['longitude']; ?>" name="longitude">
			</div>
			<div class="form-group">
				<label>ID Wilayah</label>
				<select class="form-control" placeholder="Pilih" name="id_wilayah" >
					<option selected hidden value=""><?php echo $ambil['id_wilayah']; ?></option>
					<option value="A01">Aceh</option>
					<option value="A02">Sumatra Utara</option>
					<option value="A03">Sumatra Barat</option>
					<option value="A04">Riau</option>
					<option value="A05">Kepulauan Riau</option>
					<option value="A06">Jambi</option>
					<option value="A07">Sumatra Selatan</option>
					<option value="A08">Bangka Belitung</option>
					<option value="A09">Bengkulu</option>
					<option value="A10">Lampung</option>
					<option value="B01">Banten</option>
					<option value="B02">DKI Jakarta</option>	
					<option value="B03">Jawa Barat</option>	
					<option value="B04">Jawa Tengah</option>	
					<option value="B05">DI Yogyakarta</option>	
					<option value="B06">Jawa Timur</option>		
					<option value="C01">Bali</option>
					<option value="C02">Nusa Tenggara Barat</option>
					<option value="C03">Nusa Tenggara Timur</option>
					<option value="D01">Kalimantan Barat</option>
					<option value="D02">Kalimantan Tengah</option>	
					<option value="D03">Kalimantan Selatan</option>		
					<option value="E01">Kalimantan Timur</option>
					<option value="E02">Kalimantan Utara</option>
					<option value="E03">Sulawesi Utara</option>
					<option value="E04">Sulawesi Tengah</option>
					<option value="E05">Sulawesi Selatan</option>
					<option value="E06">Sulawesi Tenggara</option>	
					<option value="F01">Sulawesi Barat</option>
					<option value="F02">Gorontalo</option>
					<option value="F03">Maluku</option>
					<option value="F04">Maluku Utara</option>
					<option value="F05">Papua</option>
					<option value="F06">Papua Barat</option>
				</select>
			</div>	
			<td rowspan="3">
				<button type="submit" name="submit" class="btn btn-primary">Submit</button></td>
			</form>
		</div>
	</div>
</body>

</html> 