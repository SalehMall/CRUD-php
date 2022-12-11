<?php 
include "koneksi.php";

$query="DELETE FROM tb_karyawan WHERE id_user='$_GET[id_user]'";
$sql=mysqli_query($konek,$query);
if($sql){
    header('location:index.php');
}
?>