<?php
    $dbhost = "localhost";
    $dbusername = "id15184920_admin";
    $dbpass = "-_f/KSQGv2q8!bIw";

    $id = $_POST['id'];	
    $email = $_POST['email'];	
	$password = $_POST['password'];
	$nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$noktp = $_POST['noktp'];
    $roleuser = $_POST['roleuser'];

    $con = mysqli_connect($dbhost,$dbusername,$dbpass,"id15184920_dbsepeda");
    $sql = "UPDATE tbuser set email = '$email',password = '$password',nama = '$nama',nohp = '$nohp',alamat = '$alamat',noktp = '$noktp',roleuser = '$roleuser' WHERE id = '$id'";
	$json["hasil"]=array();
    	if(mysqli_query($con,$sql)) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>