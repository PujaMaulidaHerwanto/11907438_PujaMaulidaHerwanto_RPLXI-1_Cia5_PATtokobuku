<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <title>Kasir</title>
  </head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="kasir.php">Starlight</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Transaksi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="?menu=penjualan">Penjualan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Laporan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="?menu=cetak_faktur">Cetak Faktur</a></li>
                        <li><a class="dropdown-item" href="?menu=semua_penjualan">Semua Penjualan</a></li>
                        <li><a class="dropdown-item" href="?menu=penjualan_pertanggal">Penjualan Pertanggal</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
        <ul class="nav navbar-expand-lg justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color:black;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kasir
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="?menu=ubah_pass">Ganti Password</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color:black;" onclick="return confirm('Yakin keluar?');" href="logout.php" >Logout</a>
            </li>
        </ul>
    </nav>
    
<!-- end navbar -->
    <br><br>
<!-- jumbotron -->
    <div class="container mt-2">
        <div class="jumbotron">
            <div class="text-center">
                <h1 class="display-4 center">NEONEWAY</h1>
                <p class="lead center">This is a simple hero unit, a comfortable books store.</p>
                <hr class="my-4">
                <strong class="center">Copyright &copy; 2021 <a href="#">Puja Maulida Herwanto</a>.</strong> All rights reserved.
            </div>
        </div>
    </div>
<!-- end jumbotron -->
<?php 
    switch(@$_GET['menu']){
        case 'cetak_faktur';
        include 'cetak_faktur.php';
        break;

        case 'semua_penjualan';
        include 'semua_penjualan.php';
        break;

        case 'penjualan_pertanggal';
        include 'penjualan_pertanggal.php';
        break;

        case 'semua_data_buku';
        include 'semua_data_buku.php';
        break;

        case 'penjualan';
        include 'penjualan.php';
        break;

        case 'ubah_pass';
        include 'ubah_pass.php';
        break;
        
        break;
    }
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    
  </body>
</html>