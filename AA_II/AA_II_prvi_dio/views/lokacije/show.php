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
        
	
  
	<div class="header">Detalji o lokaciji</div>



<table class="table" >
			
			<thead>
			  <th>Location UID</th>
			  <th>fk_building_UID</th>
			  <th>Level</th>
			   <th>Last modified</th>
			 <th>Description</th>
           
			 
			</thead>
			<tbody> 
			<tbody>
			<tr>
			  <td data-label='location_UID'><?php echo $location->location_UID; ?></td>
			  <td data-label='fk_building_UID'><?php echo $location->fk_building_UID; ?></td>
			  <td data-label='level'><?php echo $location->level; ?></td>
			 <td data-label='lastMod'><?php echo $location->lastMod; ?></td>
			  <td data-label='description'><?php echo $location->description; ?></td>
			 
			</tr>
			
			</tbody>
			
			  </table>
	</div>
	
	</body>
</html>