<?php

// koneksi

try{
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=crudblog;","root","bingabing03");


}catch(PDOException $e){

	echo $e->getMessage();

}

$id = $_GET['id'];

$data = $koneksi->prepare("DELETE FROM artikel WHERE id='$id'");
$data->execute();



header("Location:index.php");

echo"Gagal";

?>
