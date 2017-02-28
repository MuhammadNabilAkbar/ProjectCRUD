<?php

try{
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=crudblog;","root","bingabing03");


}catch(PDOException $e){

	echo $e->GetMessage();

}



if (isset($_POST['komentar'])) {
	# code...

$komentar = $_POST['komentar'];
$id = $_POST['id'];
$user = $_SESSION['username'];

$data = $koneksi->prepare("INSERT INTO komentar(id_artikel,komentator,komentar) VALUES('$id','$user','$komentar')" );
$data->execute();

header('location:artikel.php?id='.$id);

}
?>