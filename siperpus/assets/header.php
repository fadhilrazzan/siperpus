<?php
session_start();

if(!(isset($_SESSION['id_petugas'])))
{
    header("Location: http://localhost/siperpus/login/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/siperpus/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/assets/css/font-awesome.css">
    <title>SiPERPUS</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#"><i class="fas fa-book-reader mr-2"></i>Hai, <?php echo (isset($_SESSION['nama_petugas'])?$_SESSION['nama_petugas']:'Admin')?></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
<a class="nav-item nav-link" href="./../index.php">Dashboard</a>
<a class="nav-item nav-link" href="http://localhost/siperpus/buku/index.php">Buku</a>
<a class="nav-item nav-link" href="http://localhost/siperpus/anggota/index.php">Anggota</a>
<a class="nav-item nav-link" href="http://localhost/siperpus/transaksi/index.php">Peminjaman</a>
<a class="nav-item nav-link" href="http://localhost/siperpus/login/logout.php">Logout</a>
</div>
</div>
</nav>