<?php
    $dbhost = "localhost";
    $dbusername = "id15184920_admin";
    $dbpass = "-_f/KSQGv2q8!bIw";

	$email = $_POST['email'];	
	$password = $_POST['password'];
	$nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$noktp = $_POST['noktp'];
	$roleuser = (int) $_POST['roleuser'];

    $con = mysqli_connect($dbhost,$dbusername,$dbpass,"id15184920_dbsepeda");
    $sql = "INSERT INTO tbuser(email, password, nama, nohp, alamat, noktp, roleuser) VALUES ('$email', '$password', '$nama', '$nohp', '$alamat', '$noktp', '$roleuser')";
	$json["hasil"]=array();
    if(mysqli_query($con,$sql)) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>