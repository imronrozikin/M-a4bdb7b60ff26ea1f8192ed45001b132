<?php
include 'koneksi.php';

if ($koneksi) {
	$username= $_POST['username'];
	$password= md5($_POST['password']);

	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password ='$password'");
	$response = array();

	$row = mysqli_num_rows($query);
	if ($row > 0) {
		array_push($response, array(
			'status' => 'OK'
		));
	}else{
		array_push($response, array(
			'status' => 'Gagal'
		));
	}
}else{
	array_push($response, array(
			'status' => 'Gagal'
		));
}

echo json_encode(array("server_response" => $response));
mysqli_close($koneksi);

?>