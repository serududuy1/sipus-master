<div id="label-page">
    <h3>Tampil Data Anggota</h3>
</div>
<div class="container">
    <p class="tombol-tambah-container">
        <a href="index.php?p=anggota-input" class="btn btn-info">Tambah Anggota</a>
    </p>
    <table class="table">
        <tr>
            <th id="label-tampil-no">No</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Status</th>
            <th id="label-opsi">Opsi</th>
        </tr>

        <?php
        
        $sql="SELECT * FROM tbanggota ORDER BY idanggota ASC";
        $q_tampil_anggota = mysqli_query($db, $sql);

        $nomor=1;
        while($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)){
            ?>
            <tr>
                <td><?php echo $nomor++;?></td>
                <td><?php echo $r_tampil_anggota['idanggota'];?></td>
                <td><?php echo $r_tampil_anggota['nama'];?></td>
                <td><?php echo $r_tampil_anggota['jeniskelamin'];?></td>
                <td><?php echo $r_tampil_anggota['alamat'];?></td>
                <td><?php echo $r_tampil_anggota['status'];?></td>
                <td>
                <a href="index.php?p=anggota-edit&idanggota=<?php echo $r_tampil_anggota['idanggota']; ?>" class="btn btn-warning">EDIT</a>
                <a href="proses/anggota-hapus-proses.php?idanggota=<?php echo $r_tampil_anggota['idanggota']; ?>" class="btn btn-danger">Hapus</a>
                
                </td>
            </tr>
        <?php }?>
    </table>
</div>
