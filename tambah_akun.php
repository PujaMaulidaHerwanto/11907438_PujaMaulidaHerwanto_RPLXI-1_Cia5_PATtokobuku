<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akun</title>
</head>
<body>

<br> <br> <br>
    <div class="container">
        <div class="card">
            <h5 class="card-header">Form Tambah Akun</h5>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" placeholder="masukan Judul Buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No Telfon</label>
                        <input class="form-control" type="number" name="telp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">status</label>
                        <select class="form-control input-lg" name="status" required>
                            <option></option>
                            <option value="mnkh">Sudah Menikah</option>
                            <option value="blmmnkh">Belum Menikah</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="masukan username" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">password</label>
                        <input class="form-control" type="password" name="pass1" placeholder="masukan password" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ulangi Masukan Password</label>
                        <input class="form-control" type="text" name="pass2" placeholder="Ulangi Masukan Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">akses</label>
                        <select class="form-control input-lg" name="akses" required>
                            <option></option>
                            <option value="Manager">Manager</option>
                            <option value="admin">Admin</option>
                            <option value="kasir">kasir</option>
                        </select>
                    </div>
                    <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> 
                            <input class="btn btn-outline-primary" type="submit" name="tambah" value="Tambah Akun">
                        </td>
                    </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<br> <br> <br>
</body>
</html>