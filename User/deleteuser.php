<?php
    $dbhost = "localhost";
    $dbusername = "id15184920_admin";
    $dbpass = "-_f/KSQGv2q8!bIw";
    
    $id = $_POST['id'];

    $con = mysqli_connect($dbhost,$dbusername,$dbpass,"id15184920_dbsepeda");
    $sql = "DELETE FROM tbuser where id = $id";
    
    $json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>