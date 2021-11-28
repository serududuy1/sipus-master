<?php
    $idbuku = $_GET['idbuku'];
    $sql = mysqli_query($db,"SELECT * FROM tbuku WHERE idbuku='$idbuku'")or die(mysqli_error($db));
    while($r_tampil_anggota = mysqli_fetch_array($sql)){
?>

<div id="label-page"><h3>Input Data Anggota</h3></div>
<div class="container">
    <form action="proses/book-update-proses.php" method="post">
        <table class="tabel">
            <tr>
                <td class="control-label col-sm-2">Id Buku</td>
                <td class="isian-formulir"><input type="text" name="idbuku" class="isian-formulir isian-formulir-border"value="<?php echo $r_tampil_anggota['idbuku'];?>"></td>
            </tr>
            <tr>
                <td class="control-label col-sm-2">Judul</td>
                <td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border"value="<?php echo $r_tampil_anggota['nama'];?>"></td>
            </tr>
            <tr>
                <td class="control-label col-sm-2">Nama Penulis</td>
                <td class="isian-formulir"><input type="text" name="pengarang" class="isian-formulir isian-formulir-border"value="<?php echo $r_tampil_anggota['pengarang'];?>"></td>
            </tr>
            <tr>
                <td class="control-label col-sm-2">Tahun Terbit</td>
                <td class="isian-formulir"><input type="text" name="tahun" class="isian-formulir isian-formulir-border"value="<?php echo $r_tampil_anggota['tahun'];?>"></td>
            </tr>
           
            
            <tr>
                <td class="control-label col-sm-2"></td>
                <td class="isian-formulir">
                    <input type="submit" name="simpan" value="simpan" class="btn btn-danger">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
    }?>