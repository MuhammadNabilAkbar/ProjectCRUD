	<title>Login</title>

<?php
	
	session_start();
	require_once("koneksi.php");
	$username = $_POST['username'];
	$pass	  = md5($_POST['password']);
	$sql	  = "SELECT username,password FROM user WHERE username = '$username'";
	$query	  = $db->query($sql);
	$hasil	  = $query->fetch_assoc();


	if($query->num_rows == 0){
		echo "<div align='center'>Username Belum Terdaftar!<a href='login.php'>Back</a></div>";
	}else{
		if($pass <> $hasil['password']){
			echo "<div align='center'>Password Salah!<a href='login.php'>Back</a>";
		}else{
			$_SESSION['username'] = $hasil['username'];
			header('location:index.php');
		}
	}

?>