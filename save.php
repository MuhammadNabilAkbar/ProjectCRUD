<?php 

try{
	$koneksi= new PDO("mysql:host=localhost;port=3306;dbname=crudblog;","root","bingabing03");

	// echo "koneksi berhasil";
	// 	PDO($conn_string,$user,$pass);
}catch(PDOException $e){
	echo $e->getMessage();
	}

if(isset($_POST['Submit'])) {

	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tanggal = $_POST['tanggal'];
	$banner = $_POST['banner'];

$sql = "INSERT INTO artikel (judul,isi,tanggal,banner) VALUES ('$judul','$isi','$tanggal','$banner')";
echo $sql;
$table_insert = $koneksi->prepare($sql);
$r = $table_insert->execute();

if($r){
	header("Location:index.php");
}else{
	echo"Gagal";
}
}

?>