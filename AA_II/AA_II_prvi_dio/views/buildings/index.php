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
	</br>
 
    <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
                        <div class="mb-2">
  <a class="btn btn-primary" href="?controller=buildings&action=verifyinsert" role="button">Dodaj zgradu</a>
  </div>
                         <?php 
                      }
                    }
                      ?>
  </br>
  </br>
  <table class="table" >
			
			<thead>
			  <th>Building UID</th>
			  <th>Names</th>
			  <th>Notes</th>
			   <th>Show</th>
			 <th>Edit</th>
            <th>Delete</th>
			 
			</thead>
			<tbody> <?php foreach ($buildings as $row): ?>
			<tbody>
			<tr>
			  <td data-label='Building UID'><?php echo $row->building_UID ?></td>
			  <td data-label='Number'><?php echo $row->name ?></td>
			  <td data-label='Names'><?php echo $row->notes ?></td>
			   <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
			  <td><a href="?controller=buildings&action=show&id=<?php echo $row->building_UID?>" class="btn btn-primary btn-xs"> Show</a></td>
			  
                         <?php 
                      }
                    }
                      ?>
					  <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
			<td><a href="?controller=buildings&action=verifyupdate&id=<?php echo $row->building_UID?>" class="btn btn-primary btn-xs"> Edit</a></td>
			                         <?php 
                      }
                    }
                      ?>
					   <?php
                     
                     if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
            <td><a href="?controller=buildings&action=deletebuilding&id=<?php echo $row->building_UID?>" class="btn btn-danger btn-xs"> Delete</a></td>
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
 
