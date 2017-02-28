<?php 

try{
	$koneksi= new PDO("mysql:host=localhost;port=3306;dbname=crudblog;","root","bingabing03");

	// echo "koneksi berhasil";
	// 	PDO($conn_string,$user,$pass);
}catch(PDOException $e){
	echo $e->GetMessage();
	}

if(isset($_POST['submit'])) {
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	// $tanggal = $_POST['tanggal'];
	// $banner = $_POST['banner'];
	// $id = $_POST['id'];

$sql = "UPDATE artikel SET judul='$judul', isi='$isi' WHERE id='$id'";
$judul = $koneksi->prepare($sql);
$r = $judul->execute();

if($r){
	header("Location:index.php");
}else{
	echo"Gagal";
}
}

?>