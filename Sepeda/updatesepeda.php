<?php
    $dbhost = "localhost";
    $dbusername = "id15184920_admin";
    $dbpass = "-_f/KSQGv2q8!bIw";

    $id = $_POST['id'];
    $judul = $_POST['judul'];
	$kode = $_POST['kode'];
	$merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
	$linkimg = $_POST['linkimg'];

    $con = mysqli_connect($dbhost,$dbusername,$dbpass,"id15184920_dbsepeda");
    $sql = "UPDATE tbsepeda set kode = '$kode', merk = '$merk',judul = '$judul', jenis = '$jenis',harga = '$harga',linkimg = '$linkimg' WHERE id = '$id'";
	$json["hasil"]=array();
    	if(mysqli_query($con,$sql)) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>