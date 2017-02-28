<?php

	session_start();

	if(isset($_SESSION['username'])){
		header('location:index.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Daftar</title>
</head>
<form action="prosesdaftar.php" method="post">
<body>
<h1 align="center">Daftar</h1>
<form>
  <div class="group">
  <h4 style="color:maroon" align="center">Email</h4>
    <input type="email" name="username" required><span class="highlight"></span><span class="bar"></span>
    
  </div>
  <div class="group">
  <h4 style="color:maroon" align="center">Password</h4>
    <input type="password" name="password" id="password"><span class="highlight"></span><span class="bar"></span>

<br>
  <button type="submit" class="button buttonBlue">Daftar

  </button>

  	<span>Sudah Punya Akun?<a href="login.php">Login Sekarang</a></span>
</form>
</div>

</body>
</html>

<style>
	
	* { box-sizing:border-box; }

body {
	font-family: Helvetica;
	background: #eee;
  -webkit-font-smoothing: antialiased;
}

hgroup { 
	text-align:center;
	margin-top: 4em;
}

a{
	text-decoration: none;
}

h1, h3 { font-weight: 300; }

h1 { color: #636363; }

h3 { color: #4a89dc; }

form {
	width: 380px;
	margin: 4em auto;
	padding: 3em 2em 2em 2em;
	background: #fafafa;
	border: 1px solid #ebebeb;
	box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}

.group { 
	position: relative; 
	margin-bottom: 45px; 
}

input {
	font-size: 18px;
	padding: 10px 10px 10px 5px;
	-webkit-appearance: none;
	display: block;
	background: #fafafa;
	color: #636363;
	width: 100%;
	border: none;
	border-radius: 0;
	border-bottom: 1px solid #757575;
}

input:focus { outline: none; }


/* Label */

label {
	color: #999; 
	font-size: 18px;
	font-weight: normal;
	position: absolute;
	pointer-events: none;
	left: 5px;
	top: 10px;
	-webkit-transition:all 0.2s ease;
	transition: all 0.2s ease;
}


/* active */

input:focus ~ label, input.used ~ label {
	top: -20px;
  -webkit-transform: scale(.75);
          transform: scale(.75); left: -2px;
	/* font-size: 14px; */
	color: red;
}


/* Underline */

.bar {
	position: relative;
	display: block;
	width: 100%;
}

.bar:before, .bar:after {
	content: '';
	height: 2px; 
	width: 0;
	bottom: 1px; 
	position: absolute;
	background: red; 
	-webkit-transition:all 0.2s ease; 
	transition: all 0.2s ease;
}

.bar:before { left: 50%; }

.bar:after { right: 50%; }


/* active */

input:focus ~ .bar:before, input:focus ~ .bar:after { 
	width: 50%; }



input:focus ~ .highlight {
	-webkit-animation: inputHighlighter 0.3s ease;
	        animation: inputHighlighter 0.3s ease;
}



.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 100%;
  vertical-align: middle;
  color: #fff;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  cursor: pointer;
  -webkit-transition:all 0.15s ease;
  transition: all 0.15s ease;
}
.button:focus { 
	outline: 0; }


/* Button modifiers */

.buttonBlue {
  background: maroon;
  text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
}

.buttonBlue:hover { background: red; }


</style>