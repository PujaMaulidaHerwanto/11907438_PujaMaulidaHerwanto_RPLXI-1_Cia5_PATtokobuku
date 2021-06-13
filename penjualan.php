<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penjualan</title>
  </head>
<body>
    <!-- nav -->
<!-- end navbar -->
    <br><br>
    <div class="container">
        <div class="card">
            <h5 class="card-header">Form Buku</h5>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">No Faktur</label>
                        <input type="text" name="no_faktur" class="form-control" id="exampleFormControlInput1" readonly value="AP081586649396" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Judul Buku</label>
                        <input type="text" name="Judul_buku" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <button class="btn btn-primary me-2 mb-2" type="submit">Lihat</button> 
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Jumlah Beli</label>
                        <input type="text" name="jml_beli" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Total Harga</label>
                        <input type="text" name="tot_harga" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <button class="btn btn-primary me-2" type="submit">Tambah Buku</button>            
                </form>
            </div>
        </div>
    </div>
<br> <br> <br>
  </body>
</html>