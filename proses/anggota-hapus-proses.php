<?php 
include '../koneksi.php';
$idanggota = $_GET['idanggota'];
mysqli_query($db,"DELETE FROM tbanggota WHERE idanggota='$idanggota'")or die(mysqli_error($db));
 
header("location:../index.php?p=anggota");
?>