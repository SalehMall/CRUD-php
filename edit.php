<!doctype html>
<?php 
include "koneksi.php";

$query="SELECT * FROM tb_karyawan WHERE id_user='$_GET[id_user]'";
$sql=mysqli_query($konek,$query);
$data=mysqli_fetch_array($sql);


$nama=$data['nama'];
$jenis_kelamin=$data['jenis_kelamin'];
$alamat=$data['telepon'];
$telepon=$data['telepon'];


?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light mb-3">
            <div class="container-fluid">
                <a class="navbar-brand">Karyawan</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <figure class="text-center">
            <blockquote class="blockquote">
                <p>Data Karyawan</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">CRUD</cite>
            </figcaption>
        </figure>

        <div class="container">
            <form action="aksiedit.php" method="POST">
            <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $data['id_user'] ?>">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">jenis_kelamin</label>
                    <div class="col-sm-10">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="Laki-laki" <?php if($jenis_kelamin=="Laki-laki") echo "selected"?>>Laki-laki </option>
                            <option value="Perempuan" <?php if($jenis_kelamin=="Perempuan") echo "selected"?>>Perempuan </option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat"
                        value="<?php echo $data['alamat'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="telepon" name="telepon"
                        value="<?php echo $data['telepon'] ?>">
                    </div>
                </div>
                <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                
                </div>
            </form>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->



</body>

</html>