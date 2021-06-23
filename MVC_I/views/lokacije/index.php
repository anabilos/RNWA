
  
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
	</br>
  <div class="mb-2">
  <a class="btn btn-primary" href="?controller=lokacije&action=verifyinsert" role="button">Dodaj lokaciju</a>
  </div>
  </br>
  </br>
  <table class="table" >
			
			<thead>
			  <th>location_UID</th>
            <th>fk_building_UID</th>
            <th>level</th>
            <th>lastMod</th>
            <th>description</th>
			<th>Show</th>
			 <th>Edit</th>
            <th>Delete</th>
			 
			 
			</thead>
			<tbody> <?php foreach ($lokacije as $row): ?>
			<tbody>
			<tr>
			  <td data-label='Building UID'><?php echo $row->location_UID ?></td>
			  <td data-label='Number'><?php echo $row->fk_building_UID ?></td>
			  <td data-label='Names'><?php echo $row->level?></td>
			  <td data-label='Names'><?php echo $row->lastMod ?></td>
			  <td data-label='Names'><?php echo $row->description ?></td>
			  <td><a href="?controller=lokacije&action=show&id=<?php echo $row->location_UID?>" class="btn btn-primary btn-xs"> Show</a></td>
			  <td><a href="?controller=lokacije&action=verifyupdate&id=<?php echo $row->location_UID?>" class="btn btn-primary btn-xs"> Edit</a></td>
            <td><a href="?controller=lokacije&action=deletelocation&id=<?php echo $row->location_UID?>" class="btn btn-danger btn-xs"> Delete</a></td>
			</tr>
			
			</tbody>
			<?php endforeach ?>
			  </table>
	</div>
	</div>
	</body>
</html>