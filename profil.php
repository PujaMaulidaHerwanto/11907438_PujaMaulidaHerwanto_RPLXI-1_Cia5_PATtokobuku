<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
<br> <br> <br>
    <div class="container">
        <div class="card">
                <div class="card-header">
                    Form Setting Laporan
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Perusahaan</label>
                            <input type="text" name="perusahaan" class="form-control" id="exampleFormControlInput1"  required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Alamat</label>
                            <textarea type="text" name="alamat" class="form-control" id="exampleFormControlInput1" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">No Telpon</label>
                            <input type="number" name="telp" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">No Handphone</label>
                            <input type="number" name="hp" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Web</label>
                            <input type="text" name="web" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
                            <input type="email" name="hp" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Logo Laporan</label>
                            <input type="file" name="logo" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <button class="btn btn-primary me-2" type="submit">Perbaharui</button>            
                    </form>
                </div>
        </div>
    </div>

    <br> <br> <br>
</body>
</html>