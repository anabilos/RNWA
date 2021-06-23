

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
<div class="wrapper">
    <div class="menu-min">
            
        <label for="menu" class="menu-bar">
            <i class="fa fa-bars" aria-hidden="true" ></i>
        </label>
    
    </div>
  
    <div class="sidebar">
        <h2>Fiber Optics</h2>
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href='index.php?controller=buildings&action=index'><i class="fas fa-tasks"></i><span>Zgrade</span></a></li>
             <li><a href='index.php?controller=lokacije&action=index'><i class="fas fa-tasks"></i><span>Lokacije</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 3</span></a></li>
            <li><a href="http://fsre.sum.ba/naslovnica/"><i class="fas fa-building"></i><span>FSRE</span></a></li>
            <li><a href="http://github.com/Andrija555/RNWA"><i class="fab fa-github"></i><span> Github</span></a></li>
        </ul> 
      
    </div>
    <div class="main_content">
        <div class="header">Lokacije</div>
		<div class="container">
<form action="?controller=lokacije&action=updatelocation" method="POST">
  <div class="form-group">
    <label for="location_UID">location_UID</label>
    <input type="text" readonly class="form-control" name="location_UID" value=<?php echo $location->location_UID?>>
  <div class="form-group">
    <label for="level">level</label>
    <input type="text" class="form-control" name="level" value=<?php echo $location->level?>>
  </div>
  <div class="form-group">
    <label for="level">fk_building_UID</label>
    <input type="text" class="form-control" name="fk_building_UID" value=<?php echo $location->fk_building_UID?>>
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" name="description" value=<?php echo $location->description?>>
  </div>
  
    <button type="submit" class="btn btn-default">Confirm</button>
</form> 
</div>
</div>
	</div>
	</div>
	</body>
</html>
