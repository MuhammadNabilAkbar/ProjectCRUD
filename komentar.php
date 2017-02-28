<?php  

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM komentar WHERE id_artikel='$id'");
$data->execute();
$row = $data->fetchAll();
// echo "<pre>".print_r($row,2)."</pre>";
// return true;


foreach ($row as $komentar) {
?>
<h2><?=$komentar['komentator'];?></h2>

<p><?=$komentar['komentar'];?></p>

<?php } ?>