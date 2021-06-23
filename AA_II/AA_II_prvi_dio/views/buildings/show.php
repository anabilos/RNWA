
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
        
	
  
	<div class="header">Detalji o zgradi</div>
  
  <table class="table" >
			
			<thead>
			  <th>Building UID</th>
			  <th>Names</th>
			  <th>Notes</th>
			   <th>Broj</th>
			 <th>Level</th>
           
			 
			</thead>
			<tbody> 
			<tbody>
			<tr>
			  <td data-label='Building UID'><?php echo $building->building_UID ?></td>
			  <td data-label='Name'><?php echo $building->name ?></td>
			  <td data-label='Notes'><?php echo $building->notes ?></td>
			 <td data-label='Number'><?php echo $building->number ?></td>
			  <td data-label='Levels'><?php echo $building->levels ?></td>
			 
			</tr>
			
			</tbody>
			
			  </table>
	</div>

	</body>
</html>
