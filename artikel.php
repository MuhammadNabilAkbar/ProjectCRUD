<?php

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
<!-- <link rel="stylesheet" type="text/css" href="css.css"> -->
	<title>Full Artikel</title>
</head>
<body>
<h1 align="center">Full Artikel</h1>
<table>
<tr>
<br>
<td><center><?= $row->judul;?></center></td>
</tr>
</table>
<form>
<div>
	<?= $row->isi;?>
</div>
</form>
<br>
<hr>

<form id="formKomentar" method="POST" action="proseskomentar.php">

 <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  	<div>
  	 <textarea name="komentar" rows="10" placeholder="Komentar"></textarea>
  	</div>
 
  	<div>
  	  <input type="submit" value="Tambahkan Komentar"/>
  	</div>
  </form>
<?php include 'komentar.php'; ?>
</body>
</html>


<style>
	#formKomentar{
    width:500px;
    padding:10px;
}

input, textarea{
     padding: 10px;
     border:3px solid #e6e6e6;
     border-radius: 5px;
     margin-bottom: 15px; 
}
	
input:focus, textarea:focus{
    border:3px solid #f1f1f1;
}
 
textarea{
    width:300px;
}

table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}

/*<?= $row->isi;?>*/

</style>