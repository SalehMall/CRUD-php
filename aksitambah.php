<?php
include "koneksi.php";

$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];

$query="INSERT INTO tb_karyawan VALUES ('','$nama','$jenis_kelamin','$alamat','$telepon')";
$sql=mysqli_query($konek,$query);
if($sql){
    header('location:index.php');
}


?>