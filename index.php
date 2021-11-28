<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
    <title>Sistem Informasi Perpustakaan</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <div id="logo-perpustakaan-container">
                <image id="logo-perpustakaan" src="gambar/3.png" style="border:0; text-decoration: none; outline: none;">
            </div>
            
            <div id="nama-alamat-perpustakaan-container">
                <div class="nama-alamat-perpustakaan">
                    <h1> PERPUSTAKAAN UMUM </h1>
                </div>
                <div class="nama-alamat-perpustakaan">
                    <h4>Jl. Jakarta No.1, Telp: (021)123456</h4>
                </div>
            </div>
        </div>
        <div id="nama-user">Hai <?=$_SESSION['username']?></div>
        <div class="col-md-2">
            <div class="rows">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="index.php?p=beranda" >Beranda</a></li>
                    <section> Entry Data</section>
                    <li><a href="index.php?p=anggota">Data Anggota</a></li>
                    <li><a href="index.php?p=book">Data Buku</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
        <div id="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1" >
                        
                            <?php
                                $pages_dir='pages';
                                if (!empty($_GET['p'])) {
                                    $pages=scandir($pages_dir,0);
                                    unset($pages[0],$pages[1]);
                                    $p=$_GET['p'];
                                    if(in_array($p.'.php', $pages)){
                                        include($pages_dir.'/'.$p.'.php');
                                    }else{
                                        echo "halaman tidak ditemukan";
                                    }
                                }else{
                                    include($pages_dir.'/beranda.php');
                                }
                            ?>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
        <footer id="footer">
            <p>Sistem Informasi Perpustakaan (sipus) | Studi Kasus</p>
        </footer>
    </div>
</body>
</html>