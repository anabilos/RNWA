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
	</div>
	</body>
</html>
 
