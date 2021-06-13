<?php
include "config/connection.php";
include "library/controller.php";

$go = new controller();
$tabel = "tbl_buku";
@$field = array('id_buku'=>$_POST['id'],
                'judul'=>$_POST['jdl'], 
                'noisbn'=>$_POST['isbn'], 
                'penulis'=>$_POST['pnls'],
                'penerbit'=>$_POST['pnrbt'],
                'tahun'=>$_POST['thn_terbit'],
                'harga_pokok'=>$_POST['hr_pokok'],
                'harga_jual'=>$_POST['hr_jual'],
                'diskon'=>$_POST['dskn']);
$redirect = "?menu=input_buku";
@$where = "id_buku = $_GET[id]";

if (isset($_POST['simpan'])) {
    $go->simpan($con, $tabel, $field, $redirect);
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
    <title>Input Buku</title>
  </head>
<body>

<br><br>
<!-- isi -->
<div class="container">
    <div class="card">
        <h5 class="card-header">Form Buku</h5>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
                    <input class="form-control" type="text" name="id" readonly value = "<?php echo @$edit['id_buku'] ?>"" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                    <input class="form-control" type="text" name="jdl" value = "<?php echo @$edit['judul'] ?>"" placeholder="masukan Judul Buku" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NO ISBN</label>
                    <input class="form-control" type="text" name="isbn" value = "<?php echo @$edit['noisbn'] ?>"" placeholder="masukan ISBN" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Penulis</label>
                    <input class="form-control" type="text" name="pnls" value = "<?php echo @$edit['penulis'] ?>"" placeholder="masukan nama Penulis" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                    <input class="form-control" type="text" name="pnrbt" value = "<?php echo @$edit['penerbit'] ?>"" placeholder="masukan nama Penerbit" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
                    <input class="form-control" type="number" name="thn_terbit" value = "<?php echo @$edit['tahun'] ?>"" placeholder="masukan Tahun Terbit" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga Pokok</label>
                    <input class="form-control" type="text" name="hr_pokok" value = "<?php echo @$edit['harga_pokok'] ?>"" placeholder="masukan harga pokok" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga Jual</label>
                    <input class="form-control" type="text" name="hr_jual" value = "<?php echo @$edit['harga_jual'] ?>"" placeholder="masukan harga jual" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Diskon </label>
                    <input class="form-control col col-2" type="number" name="dskn" value = "<?php echo @$edit['diskon'] ?>"" placeholder="masukan diskon" required>
                    <span>%</span>
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
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>No ISBN</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>Diskon</th>
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
                <td><?php echo $r['id_buku'] ?></td>
                <td><?php echo $r['judul'] ?></td>
                <td><?php echo $r['noisbn'] ?></td>
                <td><?php echo $r['penulis'] ?></td>
                <td><?php echo $r['penerbit'] ?></td>
                <td><?php echo $r['tahun'] ?></td>
                <td><?php echo $r['harga_pokok'] ?></td>
                <td><?php echo $r['harga_jual'] ?></td>
                <td><?php echo $r['diskon'] ?></td>
                <td><a href="?menu=input_buku&hapus&id=<?php echo $r['id_buku']?>" onclick="return confirm('Hapus Data?')">Hapus</a></td>
                <td><a href="?menu=input_buku&edit&id=<?php echo $r['id_buku']?>">Edit</a>
            </tr>

            <?php  } } ?>
        </tbody> 
    </table>
</div>

  </body>
</html>