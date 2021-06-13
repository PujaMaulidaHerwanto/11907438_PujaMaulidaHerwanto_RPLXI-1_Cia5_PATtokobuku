<?php
include "config/connection.php";
include "library/controller.php";

$go = new controller();
$tabel = "tbl_distributor";
@$field = array('nama_distributor'=>$_POST['nama_distributor'],
                'alamat'=>$_POST['almt'], 
                'telpon'=>$_POST['telp']);
$redirect = "?menu=input_distributor";
@$where = "id_distributor = $_GET[id]";

if (isset($_POST['simpan'])) {
    $go->simpan($con, $tabel, $field, $values, $redirect);
}
if (isset($_GET['hapus'])) {
    $go->hapus($con, $tabel, $where, $redirect);
}
if (isset($_GET['edit'])) {
    $edit = $go->edit($con, $tabel, $where);
}
if (isset($_POST['ubah'])) {
    $go->ubah($con, $tabel, $field, $where, $redirect);
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Distributor</title>
</head>
<body>
    <!-- nav -->
    
<!-- end navbar -->
<br><br>
<!-- isi -->
    <div class="container">
        <div class="card">
            <h5 class="card-header">Form Distributor</h5>
            <div class="card-body">
                <form action=""  method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Distributor</label>
                        <input class="form-control" type="text" name="nama_distributor" value = "<?php echo @$edit['nama_distributor'] ?>" placeholder="masukan nama distributor" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea name="almt" class="form-control" id="exampleFormControlTextarea1"><?php echo @$edit['alamat'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No Telfon</label>
                        <input class="form-control" type="number" name="telp" value = "<?php echo @$edit['telpon'] ?>" placeholder="masukan no telfon" required>
                    </div>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><?php if(@$_GET['id']==""){ ?>
                                    <input class="btn btn-outline-primary" type="submit" name="simpan" value="SIMPAN">
                                <?php }else{ ?>
                                    <input class="btn btn-outline-success" type="submit" name="ubah" value="UBAH">
                                <?php } ?></td>
                        </tr> 
                    </table>
                </form>
            </div>
        </div>
    </div>
<!-- end isi -->
<br> <br> <br>
    <div class="container">
        <table align="center" border="2"  class="display mt-4 table table-striped table-hover table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Distributor</th>
                    <th>Alamat</th>
                    <th>Telpon</th>
                    <th colspan="2">Aksi</th>
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
                    <td><?php echo $r['nama_distributor'] ?></td>
                    <td><?php echo $r['alamat'] ?></td>
                    <td><?php echo $r['telpon'] ?></td>
                    <td><a href="?menu=input_distributor&hapus&id=<?php echo $r['id_distributor']?>" onclick="return confirm('Hapus Data?')">Hapus</a></td>
                    <td><a href="?menu=input_distributor&edit&id=<?php echo $r['id_distributor']?>">Edit</a>
                </tr>

                <?php  } } ?>
            </tbody> 
        </table>
    </div>

</body>
</html>