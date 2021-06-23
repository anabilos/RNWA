<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fiber Optics</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	   <link href="asset/css/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php


session_start();


if (isset($_POST['username'])){
	if (($_POST['username'] == 'admin') && ($_POST['password'] == 'lozinka')){
	
	$_SESSION['logiran']='DA';
	$_SESSION['vrijeme']=time();
	$_SESSION['vrsta']='admin';
	}
	else {
	if(($_POST['username'] == 'korisnik') && ($_POST['password'] == 'lozinka')){
	
		$_SESSION['logiran']='DA';
		$_SESSION['vrijeme']=time();
		$_SESSION['vrsta']='korisnik';
		}
	else {
		echo "Netocno korisnicko ime i/ili lozinka<br>";
		}
	}
}

if (isset($_SESSION['logiran'])) {

require_once('connection.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action     = $_GET['action'];
} else {
  $controller = 'pages';
  $action     = 'home';
}

require_once('views/layout.php');
}

else {
	?>
	 <div class="main_content">
	<div class="container" >
<p>Niste logirani..<br></p>


<h2>Logirajte se kako bi pristupili stranici</h2>

<form name= action="index.php" method="POST">
 
  <div class="form-group">
    <label for="username">Korisničko ime</label>
    <input type="text"  class="form-control" name="username" >
  </div>
  <div class="form-group">
    <label for="password">Lozinka</label>
    <input type="text" class="form-control" name="password" >
  </div>
   
    <button type="submit" class="btn btn-default">Logiraj se</button>
</form> 
</div>
</div>

		<?php
		} 
		?>
		

  

	
	</body>
</html>