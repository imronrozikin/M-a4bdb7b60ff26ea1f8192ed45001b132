<?php
include'koneksi.php';
session_start();

$username = $_SESSION['username'];
$waktu = $_SESSION['waktu'];
$cekStatus = mysqli_query($koneksi,"SELECT * FROM riwayat_akses WHERE username='$username' AND waktu_akses='$waktu'");
$data = mysqli_fetch_array($cekStatus);
$status = $data['status'];

if ($status == 'login') {
	echo "Hai $username, waktu login anda $waktu";
}else{
	echo "logout";
}
?>