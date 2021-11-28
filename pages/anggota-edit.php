
<?php
$idanggota = $_GET['idanggota'];
$sql = mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$idanggota'")or die(mysqli_error($db));
while($r_tampil_anggota = mysqli_fetch_array($sql)){
    ?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div class="container">
    <form action="proses/anggota-update-proses.php" method="post">
        <table class="tabel">
            <tr>
                <td class="control-label col-sm-2">ID Anggota</td>
                <td class="isian-formulir"><input type="text" name="id_anggota" class="isian-formulir isian-formulir-border" value="<?php echo $r_tampil_anggota['idanggota'];?>"></td>
            </tr>
            <tr>
                <td class="control-label col-sm-2">Nama</td>
                <td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border" value="<?php echo $r_tampil_anggota['nama'];?>"></td>
            </tr>
            <tr>
                <td class="control-label col-sm-2">Jenis Kelamin</td>
                <td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="pria" >Pria</td>
            </tr>
            <tr>
                <td class="control-label col-sm-2"></td>
                <td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="wanita">Wanita</td>
            </tr>
            <tr>
                <td class="control-label col-sm-2">ALAMAT</td>
                <td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir" value="<?php echo $r_tampil_anggota['alamat'];?>"></textarea></td>
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
}
?>