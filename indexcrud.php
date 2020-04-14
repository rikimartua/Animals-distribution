<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("location:login.php");
	exit;
}
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>HEWAN</title>
	<link rel="stylesheet" href="css/bootstrap.min.data.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
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
      
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
	<div class="container my-10">
		<center>
			<h1><b> Data Hewan</b></h1><br>
		</center>
		<h3><a href="form.php">+ Tambah</a></h3>
		<table class="table table-striped" >
			<thead class="table-primary">
				<tr>
					<th scope="col">Nama Hewan</th>
					<th scope="col">ID Hewan</th>
					<th scope="col">Kategori</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Alamat</th>
					<th scope="col">Kota</th>
					<th scope="col">Foto</th>
					<th scope="col">latitude</th>
					<th scope="col">longitude</th>
					<th scope="col">Opsi</th>
					<th scope="col"></th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				include 'koneksi.php';
				$sql = mysqli_query($koneksi," select nama_hewan,id_hewan,kategori,jumlah_hewan,foto_hewan,alamat,kota,latitude,longitude from hewan;");
				
				while ($data = mysqli_fetch_array($sql)) { ?>

					<tr>
						<td> <?= $data['nama_hewan']; ?></td>
						<td> <?= $data['id_hewan']; ?></td>
						<td> <?= $data['kategori']; ?></td>
						<td> <?= $data['jumlah_hewan']; ?></td>
						<td> <?= $data['alamat']; ?></td>
						<td> <?= $data['kota']; ?></td>
						<td> <?php echo "<img src='foto_hewan/".$data['foto_hewan']."' width='60' >";?> </td>
						<td> <?= $data['latitude']; ?></td>
						<td> <?= $data['longitude']; ?></td>



						<th><a href="edit.php?id_hewan=<?= $data['id_hewan']; ?>" class="btn btn-info">Edit</a>
							<a href="hapus.php?id_hewan=<?= $data['id_hewan'] ;?>" class="btn btn-danger">Hapus</a></th>
							<th><a href="detailcrud.php?id_hewan=<?= $data['id_hewan'] ;?>" class="btn btn-info">Detail</a></th>

						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
	</body>

	</html>
