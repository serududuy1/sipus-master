<?php
include '../koneksi.php';

$idbuku=$_POST['idbuku'];
$nama=$_POST['nama'];
$tahun=$_POST['tahun'];
$pengarang=$_POST['pengarang'];


if(isset($_POST['simpan'])){
    $sql = "INSERT INTO tbuku VALUES ('$idbuku','$nama','$tahun','$pengarang')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=book");
}

?>