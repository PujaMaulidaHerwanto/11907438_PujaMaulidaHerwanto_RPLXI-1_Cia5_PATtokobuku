<?php
include "config/connection.php";
include "library/controller.php";

$go = new controller();
$tabel = "tbl_distributor, tbl_buku, tbl_pasok";
$redirec ="?menu=pasok_buku";
@$where ="id_distributor = $_GET[id]";

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasok Buku</title>
  </head>
<body>
    <!-- nav -->

    
<!-- end navbar -->
    <br><br>
    <div class="container">
        <div class="card">
            <h5 class="card-header">Pasok Buku</h5>
            <div class="card-body">
            <form class="d-flex">
                <label class="me-3">Periode</label>
                <input class="form-control me-3" type="date" name="tglawal" aria-label="Search">
                <label class="me-3">Sd</label>
                <input class="form-control me-3" type="date" name="tglakhir" aria-label="Search">
                <button class="btn btn-primary me-2" type="submit">Tampilkan</button>
                <button class="btn btn-primary me-2" type="submit">Refresh</button>
                <button class="btn btn-outline-success" type="submit">cetak</button>
            </form>
                <div class="container">
                    <table align="center" border="2"  class="display mt-4 table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Distributor</th>
                                <th>Judul Buku</th>
                                <th>NO ISBN</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Harga Jual</th>
                                <th>Stok</th>
                                <th>Jumlah Pasok</th>
                                <th>Tanggal</th>
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
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $r['nama_distributor'] ?></td>
                                    <td><?php echo $r['judul'] ?></td>
                                    <td><?php echo $r['noisbn'] ?></td>
                                    <td><?php echo $r['penulis'] ?></td>
                                    <td><?php echo $r['penerbit'] ?></td>
                                    <td><?php echo $r['harga_jual']?></td>
                                    <td><?php echo $r['stok'] ?></td>
                                    <td><?php echo $r['jumlah'] ?></td>
                                    <td><?php echo $r['tanggal'] ?></td>
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