<?php

$server   = "localhost";
$usernames = "root";
$passwords = "";
$database = "tes_php_developer";

$mysqli = mysqli_connect($server, $usernames, $passwords, $database);
$koneksi = new mysqli($server, $usernames, $passwords, $database);

if (mysqli_connect_errno()) {
	echo 'Koneksi Error : ' . mysqli_connect_error();
	exit();
	mysqli_close($mysqli);
}

?>