<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penjualan Pertanggal</title>
  </head>
<body>
    <!-- nav -->
    
<!-- end navbar -->
    <br><br>
    <div class="container">
        <div class="card">
            <h5 class="card-header">Filter Penjualan Pertanggal</h5>
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
                                <th>No Faktur</th>
                                <th>Judul Buku</th>
                                <th>NO ISBN</th>
                                <th>Jumlah Beli</th>
                                <th>Harga Satuan</th>
                                <th>PPN</th>
                                <th>Diskon</th>
                                <th>Total Harga</th>
                                <th>Tanggal Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>