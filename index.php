<!doctype html>
<?php 
include "koneksi.php";
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

<a href="tambah.php"><button type="button" class="btn btn-primary mb-3">Tambah</button></a>

<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telpon</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no=1;
    $query="SELECT * FROM tb_karyawan";
    $sql=mysqli_query($konek,$query);
    while($data=mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['telepon']; ?></td>
        <td>
        <a href="edit.php?id_user=<?php echo $data['id_user'] ?>"><button type="button" class="btn btn-primary mb-3">Edit</button></a>
        <a href="hapus.php?id_user=<?php echo $data['id_user'] ?>"><button type="button" class="btn btn-primary mb-3">Hapus</button></a>
        </td>
    </tr>
    

    <?php 
    $no++;
    }
    ?>

    

</tbody>
</table>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->



  </body>
</html>