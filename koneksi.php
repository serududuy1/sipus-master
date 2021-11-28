<?php
$server="localhost";
$user="root";
$password="";
$database="dbpus";

$db = mysqli_connect($server, $user,$password, $database);

if (!$db) {
	die("gagal terhubung ke database".mysqli_connect_error());
}
?>