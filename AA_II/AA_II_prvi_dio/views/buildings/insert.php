<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fiber Optics</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <input type="checkbox" id="menu">

    
    <div class="main_content">
        
	
  
	<div class="header">Dodaj novu zgradu</div>
<div class="container">
<form action="?controller=buildings&action=insertbuilding" method="POST">
 
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text"  class="form-control" name="name" >
  </div>
  <div class="form-group">
    <label for="number">Number</label>
    <input type="text" class="form-control" name="number" >
  </div>
  <div class="form-group">
    <label for="levels">Levels</label>
    <input type="number" class="form-control" name="levels" >
  </div>
  <div class="form-group">
    <label for="notes">Notes</label>
    <input type="text" class="form-control" name="notes" >
 
    <button type="submit" class="btn btn-default">Confirm</button>
</form> 
</div>
</div>
	
	</body>
</html>
 
