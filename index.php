<?php
include 'config/connection.php';
include 'library/controller.php';

$table = 'tbl_user';
@$username = $_POST['user'];
@$password = $_POST['pass'];
@$akses    = $_POST['akses'];

$go = new Controller();

if (isset($_POST['login'])) {
    $go->login($con, $table, $username, $password, $akses);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Selamat Datang</title>
</head>
<body>
<div  class="card d-inline-flex p-2 bd-highlight position-absolute top-50 start-50 translate-middle">
    <div class="card-body">
        <form method="post">
            <table align="center">
                <h5 class="card-title mb-4" style="text-align:center;">Login</h5>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">username</label>
                    <input class="form-control" type="text" name="user" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input class="form-control" type="password" name="pass" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Akses</label>
                    <select class="form-control input-lg" name="akses" required>
                        <option></option>
                        <option value="Manager">Manager</option>
                        <option value="Admin">Admin</option>
                        <option value="Kasir">Kasir</option>
                    </select>
                </div>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input class="btn btn-primary mt-3" type="submit" name="login" value="LOGIN"></td>
                </tr>

            </table>
        </form>
    </div>
</div>
</body>
</html>

