<?php
if(!isset($_SESSION)) {
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    include 'koneksi.php';

    if(isset($_POST['login'])){
		$user = $_POST['user'];
		$password = md5($_POST['pass']);
        $cek=mysqli_query($db, "SELECT * FROM user where username = '$user' AND password = '$password' ");

        if(mysqli_num_rows($cek)>0){
            $a = mysqli_fetch_object($cek);

            $_SESSION['start_login']=true;
            $_SESSION['username']= $a->username;
            $_SESSION['nama']= $a->nm_admin;
            $_SESSION['user']=$a->user;
            echo '<script>window.location="index.php"</script>';
        }else{
            echo '<script>alert("GAGAL, USERNAME ATAU PASSWORD YANG ANDA MASUKAN SALAH!")</script>';
        }
    }
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
            <form action="" method="POST">
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="user">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="pass">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="login">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
