<?php

// koneksi

try{
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=crudblog;","root","bingabing03");


}catch(PDOException $e){

	echo $e->GetMessage();

}

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM artikel WHERE id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>ProjectCRUDBlog</title>
	</head>
<center>
<body>
	<!-- <body background="" style="background:url(cloud.png);background-size:cover;"> -->
<form method="POST" action="update.php">
<input type="hidden" name="id" value="<?=$row->id?>">

	<h1>Edit</h1>

		<span style="color:black">Judul Artikel</span>
		<br>
		<input type="text" name="judul" value="<?=$row->judul;?>">
		<br>
		<br>
		<span style="color:black">Isi Artikel</span>
		<br>
		<input type="text" style="height:100px; width:700px" name="isi" value="<?=$row->isi;?>"></input>
<br>
<br>
	<button type="submit" name="submit">Simpan Perubahan</button>
</form>
</body>
</html>



<style>
	
	body{
		background: #f1f1f1;
	}


	.span{
		margin-top: 100px;
	}

	input[type=text] {
    background: linear-gradient(to bottom, grey, lightgrey);
    border: 1px solid grey;
    color: black;
    margin-top: 10px;
    padding: 5px;
    width: 700px;
}

input[type=text]:hover {
    cursor: pointer;
}

input[type=text]:active {
    background: vertical-gradient(to bottom, lightgrey, grey);
}

textarea{
	background: linear-gradient(to bottom, grey, lightgrey);
    border: 1px solid grey;
    color: black;
    margin-top: 10px;
    padding: 5px;
    cursor: pointer;
}


</style>