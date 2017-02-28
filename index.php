<?php

// koneksi

try{
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=crudblog;","root","bingabing03");


}catch(PDOException $e){

	echo $e->getMessage();

}

$hasil = $koneksi->prepare("SELECT * FROM artikel");
$hasil->execute();
$data = $hasil->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="css.css">
	<title>ProjectCRUDBlog</title>
</head>
<body>
<!-- <body background="" style="background:url(cloud.png);background-size:cover;"> -->

<div class="container">

<div class="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="input.php">Create New Post</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>

</div>

<?php
		foreach ($data as $key) {
		?>
		<table>
  <tr>
    <th>Judul</th>
    <th>Isi</th>
    <th>Action</th>
  </tr>
  <hr>
  <tr>
    <td><?=$key['judul']?></td>
    <td><?=substr($key['isi'],0, 10).'...'?></td>
    <td><a href="edit.php?id=<?=$key['id'];?>">Edit </a> <a onclick="return confirm('Yakin ingin menghapus artikel dengan judul <?=$key['judul'];?> ?')"  
				href="delete.php?id=<?=$key['id'];?>">Delete </a></td><td><a href="artikel.php?id=<?=$key['id'];?>">ReadMore...</a></td>

      
  </tr>
  
</table>
<?php
		}
?>
	</tbody>
</table>

 <hr style="color:red">

   <p class="text-center">
   <center>
   &copy Muhammad Nabil Akbar - All Rights Reserved
   </center>
   </p>
</body>
</html>
