<?php
include '../koneksi.php';

$idbuku=$_POST['idbuku'];
$nama=$_POST['nama'];
$pengarang=$_POST['pengarang'];
$tahun=$_POST['tahun'];

if(isset($_POST['simpan'])){
    $sql = "UPDATE tbuku SET nama='$nama', pengarang='$pengarang', tahun='$tahun' WHERE  idbuku='$idbuku'";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=book");
}

?>