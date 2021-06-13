<?php
    include "config/connection.php";
    include "library/controller.php";

    $go = new controller();
    $tabel = "tbl_buku";
    $redirect = "?menu=data_buku";

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Buku</title>
  </head>
<body>
    <!-- nav -->
    
<!-- end navbar -->
    <br><br>
    <div class="container">
        <div class="card">
            <h5 class="card-header">LAPORAN SEMUA BUKU</h5>
            <div class="card-body">
                <form class="d-flex">
                    <button class="btn btn-primary me-2" type="submit">Cetak</button>
                    <button class="btn btn-outline-success" type="submit">Export Excel</button>
                </form>
                <div class="container">
                    <table align="center" border="2"  class="display mt-4 table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>NO ISBN</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Stok</th>
                                <th>Harga Pokok</th>
                                <th>Harga Jual</th>
                                <th>PPN</th>
                                <th>Diskon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $data = $go->tampil($con, $tabel);
                                $no=0;
                                if ($data =="") {
                                    echo "<tr><td colspan='5'> no record </td></tr>";
                                }
                                else {
                                    foreach ($data as $r) {
                                        $no++
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $r['id_buku'] ?></td>
                                    <td><?php echo $r['judul'] ?></td>
                                    <td><?php echo $r['noisbn'] ?></td>
                                    <td><?php echo $r['penulis'] ?></td>
                                    <td><?php echo $r['penerbit'] ?></td>
                                    <td><?php echo $r['tahun'] ?></td>
                                    <td><?php echo $r['stok'] ?></td>
                                    <td><?php echo $r['harga_pokok'] ?></td>
                                    <td><?php echo $r['harga_jual'] ?></td>
                                    <td><?php echo $r['ppn'] ?></td>
                                    <td><?php echo $r['diskon'] ?></td>
                                    <td><a href="?menu=data_buku&hapus&id=<?php echo $r['id']?>" onclick="return confirm('Hapus Data?')">Hapus</a></td>
                                    <td><a href="?menu=data_buku&edit&id=<?php echo $r['id']?>">Edit</a>
                                </tr>

                            <?php  } } ?>
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>