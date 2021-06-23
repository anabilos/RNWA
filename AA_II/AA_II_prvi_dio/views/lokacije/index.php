
  
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
        
	
  
	<div class="header">Lokacije</div>
	</br>
  <div class="mb-2">
  <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
  <a class="btn btn-primary" href="?controller=lokacije&action=verifyinsert" role="button">Dodaj lokaciju</a>
  </div>
  
                         <?php 
                      }
                    }
                      ?>
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
			   <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
			  <td><a href="?controller=lokacije&action=show&id=<?php echo $row->location_UID?>" class="btn btn-primary btn-xs"> Show</a></td>
			          <?php 
                      }
                    }
                      ?>
					    <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
			  <td><a href="?controller=lokacije&action=verifyupdate&id=<?php echo $row->location_UID?>" class="btn btn-primary btn-xs"> Edit</a></td>
			   <?php 
                      }
                    }
                      ?>
					     <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
            <td><a href="?controller=lokacije&action=deletelocation&id=<?php echo $row->location_UID?>" class="btn btn-danger btn-xs"> Delete</a></td>
			 <?php 
                      }
                    }
                      ?>
			</tr>
			
			</tbody>
			<?php endforeach ?>
			  </table>
	</div>
	
	</body>
</html>