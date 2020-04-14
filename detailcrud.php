
<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("location:login.php");
	exit();
}
include "koneksi.php";
$id_hewan= $_GET['id_hewan'];
$sql = mysqli_query($koneksi," select nama_hewan,kategori,jumlah_hewan,foto_hewan, deskripsi_hewan,id_wilayah,alamat,kota,latitude,longitude from hewan where id_hewan='$id_hewan'");
$detail=$sql->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<link rel="stylesheet" href="css/bootstrap.min.data.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/logo-fauna.png">
	<link rel="icon" type="image/png" href="img/logo-fauna.png">

</head>
<body>
	<!--Navbar -->
	<nav class="navbar fixed navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="indexcrud.php">WEBSIDE FAUNA</a>
			</div>
			<ul class="nav navbar-nav navbar-right">

				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	<!--/.Navbar -->
	<div class="container" style="width: 800px;">
		<center>
			<table class="table table-striped">
				<tr>
					 <?php echo "<img src='foto_hewan/".$detail['foto_hewan']."' width='100' height='100' >";?> 
				</tr> 
				<tr>
					<th style="width: 400px;">Detail</th>
					<th>Keterangan</th>
				</tr>

				<tr>
					<td>Nama Hewan </td>
					<td><?php echo $detail["nama_hewan"]; ?></td>
				</tr>
				<tr>
					<td>Kategori </td>
					<td><?php echo $detail["kategori"]; ?></td>
				</tr>
				<tr>
					<td>Jumlah Hewan </td>
					<td><?php echo $detail["jumlah_hewan"]; ?></td>
				</tr>
				<tr>
					<td>Deskripsi Hewan </td>
					<td><?php echo $detail["deskripsi_hewan"]; ?></td>
				</tr>
				<tr>
					<td>ID Wilayah </td>
					<td><?php echo $detail["id_wilayah"]; ?></td>
				</tr>
				<tr>
					<td>Alamat </td>
					<td><?php echo $detail["alamat"]; ?></td>
				</tr>
				<tr>
					<td>Kota </td>
					<td><?php echo $detail["kota"]; ?></td>
				</tr>
				<tr>
					<td>Latitude </td>
					<td><?php echo $detail["latitude"]; ?></td>
				</tr>
				<tr>
					<td>Longitude </td>
					<td><?php echo $detail["longitude"]; ?></td>
				</tr>


			</table>
		</center>
	</div>
</body>
</html>