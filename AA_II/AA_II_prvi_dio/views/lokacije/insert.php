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
        <div class="header">Dodaj novu lokaciju</div>


<div class="container">
<form action="?controller=lokacije&action=insertlocation" method="POST">

  <div class="form-group">
    <label for="fk_building_UID">fk_building_UID</label>
    <input type="text" class="form-control" name="fk_building_UID">
  </div>
  <div class="form-group">
    <label for="level">level</label>
    <input type="text" class="form-control" name="level">
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" name="description" >
  </div>
  
    <button type="submit" class="btn btn-default">Confirm</button>
</form> 
</div>

	</body>
</html>
