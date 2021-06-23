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
        
	
  
	<div class="header">Zgrade</div>
<div class="container">
<form action="?controller=buildings&action=updatebuilding" method="POST">
  <div class="form-group">
    <label for="building_UID">building_UID</label>
    <input type="text" readonly class="form-control" name="building_UID" value=<?php echo $building->building_UID?>>
	</div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text"  class="form-control" name="name" value=<?php echo $building->name?>>
  </div>
  <div class="form-group">
    <label for="number">Number</label>
    <input type="text" class="form-control" name="number" value=<?php echo $building->number?>>
  </div>
  <div class="form-group">
    <label for="levels">Levels</label>
    <input type="number" class="form-control" name="levels" value=<?php echo $building->levels?>>
  </div>
  <div class="form-group">
    <label for="notes">Notes</label>
    <input type="text" class="form-control" name="notes" value=<?php echo $building->notes?>>
 
    <button type="submit" class="btn btn-default">Confirm</button>
</form> 
</div>
</div>
	
	</body>
</html>
 
