<?php
include 'koneksi.php';

if ($koneksi) {
	$username= $_POST['username'];
	$password= md5($_POST['password']);

	$insert = "INSERT INTO user(id, username, password)VALUES('', '$username', '$password')";
	
	if ($username != '' && $password != '') {
		$result = mysqli_query($koneksi, $insert);
		$response = array();
		if ($result) {
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
}else{
	array_push($response, array(
			'status' => 'Gagal'
		));
}

echo json_encode(array("server_response" => $response));
mysqli_close($koneksi);

?>