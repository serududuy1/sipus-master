<div id="label-page">
    <h3>Tampil Data Anggota</h3>
</div>
<div class="container">
    <p class="tombol-tambah-container">
        <a href="index.php?p=book-input" class="btn btn-info">Tambah Buku</a>
    </p>
    <table class="table">
        <tr>
            <th id="label-tampil-no">No</th>
            <th>Id Buku</th>
            <th>Judul Buku</th>
            <th>Nama Pengarang</th>
            <th>Tahun</th>
            <th id="label-opsi">Opsi</th>
        </tr>

        <?php
        
        $sql="SELECT * FROM tbuku ORDER BY idbuku ASC";
        $q_tampil_anggota = mysqli_query($db, $sql);

        $nomor=1;
        while($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)){
            ?>
            <tr>
                <td><?php echo $nomor++;?></td>
                <td><?php echo $r_tampil_anggota['idbuku'];?></td>
                <td><?php echo $r_tampil_anggota['nama'];?></td>
                <td><?php echo $r_tampil_anggota['pengarang'];?></td>
                <td><?php echo $r_tampil_anggota['tahun'];?></td>
                <td>
                <a href="index.php?p=book-edit&idbuku=<?php echo $r_tampil_anggota['idbuku']; ?>" class="btn btn-warning">EDIT</a>
                <a href="proses/book-hapus-proses.php?idbuku=<?php echo $r_tampil_anggota['idbuku']; ?>" class="btn btn-danger">HAPUS</a>
                </td>
            </tr>
        <?php }?>
    </table>
</div>
