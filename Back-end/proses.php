<?php
include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$waktu = date_create();
	$jam = date_format($waktu,"d-m-Y H:i:s");

	if(empty($username) || empty($password))
    {
        echo "<script>window.alert('Username atau password harus diisi!!')
        window.location='../Front-end/login.html'</script>";
    }else{	
		$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'"));
		if ($cek > 0) {
			$cekLogin = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM riwayat_akses WHERE username='$username' AND status='login'")); 
			if($cekLogin > 0){
				mysqli_query($koneksi, "UPDATE riwayat_akses SET status='logout' WHERE username='$username'");
				mysqli_query($koneksi, "INSERT INTO riwayat_akses(id, username, waktu_akses, status)VALUES('', '$username', '$jam', 'login')");
				$_SESSION['username'] = $username;
				$_SESSION['waktu'] = $jam;
				header('location:../Front-end/home.html');
			}else{
				mysqli_query($koneksi, "INSERT INTO riwayat_akses(id, username, waktu_akses, status)VALUES('', '$username', '$jam', 'login')");
				$_SESSION['username'] = $username;
				$_SESSION['waktu'] = $jam;
				header('location:../Front-end/home.html');
			} 
		}else{
			echo "<script>window.alert('Akun tidak terdaftar')
		    window.location='../Front-end/login.html'</script>";
		}
	}
}

elseif (isset($_POST['register'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$repassword = md5($_POST['repassword']);

	if ($password != $repassword) {
		echo "<script>window.alert('Password tidak sesuai!!')
        window.location='../Front-end/register.html'</script>";
	}else{
		$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'"));
		if ($cek > 0) {
			echo "<script>window.alert('Username sudah digunakan')
        	window.location='../Front-end/register.html'</script>";	
		}else{
			mysqli_query($koneksi, "INSERT INTO user(id, username, password) VALUES ('', '$username', '$password')");
			echo "<script>window.alert('Regsiter Sukses')
        	window.location='../Front-end/login.html'</script>";
		}
	}
}

elseif (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("location:../Front-end/login.html");
}



?>