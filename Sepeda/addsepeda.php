<?php
    $dbhost = "localhost";
    $dbusername = "id15184920_admin";
    $dbpass = "-_f/KSQGv2q8!bIw";

	$kode = $_POST['kode'];
    $judul = $_POST['judul'];
	$merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
	$linkimg = $_POST['linkimg'];

    $con = mysqli_connect($dbhost,$dbusername,$dbpass,"id15184920_dbsepeda");
	$sql = "INSERT INTO tbsepeda (kode, merk, jenis, harga, linkimg, judul)
	VALUES ('$kode', '$merk', '$jenis', '$harga', '$linkimg', '$judul')";
	$json["hasil"]=array();
    if(mysqli_query($con,$sql)) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>