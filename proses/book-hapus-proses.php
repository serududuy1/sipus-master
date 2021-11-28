<?php 
include '../koneksi.php';
$idbuku = $_GET['idbuku'];
mysqli_query($db,"DELETE FROM tbuku WHERE idbuku='$idbuku'")or die(mysqli_error($db));
 
header("location:../index.php?p=book");
?>