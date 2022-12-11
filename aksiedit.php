<?php
    include "koneksi.php";
    
    $id_user=$_POST['id_user'];
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];

    $query="UPDATE tb_karyawan SET id_user ='$id_user',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',telepon='telepon' WHERE id_user='$id_user'";
    $sql=mysqli_query($konek,$query);
    if($sql){
        header('location:index.php');
    }
?>