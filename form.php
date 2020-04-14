
<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("location:login.php");
	exit();
}
include'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="css/bootstrap.min.data.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/logo-fauna.png">
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
<div class="constrain">
	<form method="POST" action="insert.php" enctype="multipart/form-data">
		<div class="container">
			<center>
				<h1><b>DATA HEWAN</b></h1><br>
			</center>
			<div class="form-group">
				<label>Nama Hewan</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama Hewan" name="nama_hewan">
			</div>
			<div class="form-group">
				<label>ID Hewan</label>
				<input type="text" class="form-control" placeholder="Masukkan ID Hewan " name="id_hewan">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<select class="form-control" placeholder="Pilih" name="kategori">
					<option selected hidden value="">Pilih Kategori</option>
					<option value="punah">Punah</option>
					<option value="langka">Langka</option>
					<option value="tersedia">Ada</option>	
				</select>
			</div>
			<div class="form-group">
				<label>Jumlah</label>
				<input type="text" class="form-control" placeholder="Masukkan Jumlah " name="jumlah_hewan">
			</div>
			<div class="form-grup">
				<label>Gambar</label>
				<input type="file" name="foto_hewan" class="form-control" accept="image/*">
			</div>
			<div class="form-grup">
				<label>Deskripsi</label>
				<textarea class="form-control" name="deskripsi_hewan" rows="10" placeholder="Masukkan deskripsi hewan..."></textarea>
			</div>
			<div class="form-group">
				<label>Provinsi</label>
				<input type="text" class="form-control" placeholder="Masukkan Provinsi " name="alamat">
			</div>
			<div class="form-group">
				<label>kota</label>
				<input type="text" class="form-control" placeholder="Masukkan kota " name="kota">
			</div>
			<div class="form-group">
				<label>Latitude</label>
				<input type="text" class="form-control" placeholder="Masukkan Latitude " name="latitude">
			</div>
			<div class="form-group">
				<label>longitude</label>
				<input type="text" class="form-control" placeholder="Masukkan longitude " name="longitude">
			</div>
			<div class="form-group">
				<label> Wilayah</label>
				<select class="form-control" placeholder="Pilih" name="id_wilayah" required>
					<option selected hidden value="">Pilih ID Wilayah</option>
					
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
			<br>
			<button type="submit" class="btn btn-primary" >Submit</button>
		</div>
	</form>
	</div>
	</body>

	</html>
