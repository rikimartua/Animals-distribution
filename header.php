<?php 
session_start();
if (isset($_SESSION["login"])) {
  header("Location:indexcrud.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <link rel="icon" type="image/png" href="img/logo-fauna.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/datatable-bootstrap.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
  <!--Navbar -->
  <nav class="navbar fixed navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">WEBSIDE FAUNA</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<div class="container">
  <div class="row">
    <div class="tengah">
      <div class="head-depan tengah">
        <div class="row">
          <div class="col-md-1">
            <img class="img-responsive margin-b10" src="img/logo-fauna.png" width="100" height="100" alt="Logo SMA Karangan" />
          </div>
          <div class="col-md-11">
            <h1 class="judul-head">Sistem Informasi Persebaran Fauna </h1>
            <p><i class="fa fa-map-marker fa-fw"></i> Sistem Informasi persebaran Fauna di Beberapa Wilayah</p>
          </div>
        </div>
        <hr class="hr1 margin-b-10" />
      </div>
    </div>
  </div>
</div>
<div class="container margin-b70">
  <nav class="navbar navbar-default navbar-utama" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Status</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><i class="fa fa-home"></i> HALAMAN DEPAN</a></li>
        <li><a href="data.php"><i class="fa fa-list-ul"></i> DATA FAUNA</a></li>
        <li><a href="peta.php"><i class="fa fa-map-marker"></i> PETA PERSEBARAN FAUNA</a></li>
        <li><a href="about.php" data-toggle="modal" data-target="#about"><i class="fa fa-user"></i> ABOUT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>