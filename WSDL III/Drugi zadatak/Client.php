<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fiber Optics</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body >
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
            <li><a href="client.php"><i class="fas fa-tasks"></i><span>WSDL III(2)</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 2</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 3</span></a></li>
            <li><a href="http://fsre.sum.ba/naslovnica/"><i class="fas fa-building"></i><span>FSRE</span></a></li>
            <li><a href="http://github.com/Andrija555/RNWA"><i class="fab fa-github"></i><span> Github</span></a></li>
        </ul> 
      
    </div>

 <div class="main_content">
        
        <div class="header">WSDL III (2)</div>  
        <div class="info">

<h1>Podaci</h1>
    

    <form action="Client.php" method="post">
	<br/>
        
       Search: <input type="text" name="search"/><br/><br/>
		
        <input style="padding:10px" type="submit" name="submit" value="Getdata"> 
    </form>

    <br /><br />

   
		
		<?php 
			
		$options = [
				'cache_wsdl'     => WSDL_CACHE_NONE,
				'trace'          => 1,
				'stream_context' => stream_context_create(
					[
						'ssl' => [
							'verify_peer'       => false,
							'verify_peer_name'  => false,
							'allow_self_signed' => true
						]
					]
				)
			];
		
			
			if (isset($_POST['search'])) {
				$search = $_POST['search'];
			}else{
				$search='';
			}
				$soapclient =new SoapClient('https://localhost:44345/WebService1.asmx?WSDL',$options);
				$params=array('search'=>$search);
				
				try{
				
				$response =$soapclient->GetBuildingRecords($params)->GetBuildingRecordsResult;
			
				$array = json_decode(json_encode($response), true);
			
			
				if(count($array)!=0){
				
			
					 echo "<table class=table>
			<thead>
             
			<th >
             ID
             </th>
			 <th >
				Broj
             </th>
             <th >
             Zgrada
             </th>
			  <th >
             Level
             </th>
			  <th >
             Bilješke
             </th>
			  <th >
             Modificirano
             </th>
			 
			 </thead>";
				if(count($array['BuildingRecord']) == count($array['BuildingRecord'], COUNT_RECURSIVE)){
					echo "
				 <tbody>
				<tr>
                <td data-label='ID'>
				{$array['BuildingRecord']['id']}
                </td>
				<td data-label='Broj'>
				{$array['BuildingRecord']['number']}
                </td>
                <td data-label='Zgrada'>
				{$array['BuildingRecord']['name']} 
                </td>
				<td data-label='Level'>
                 {$array['BuildingRecord']['levels']} 
                </td>
				<td data-label='Bilješke'>
                 {$array['BuildingRecord']['notes']} 
                </td>
			
				<td data-label='Modificirano'>
                {$array['BuildingRecord']['lastmodified']} 
                </td>
				</tr>
				 </tbody>";
				}else{
	for($i=0;$i<count($array['BuildingRecord']);$i++) {
		 
				echo "
				 <tbody>
				<tr>
                <td data-label='ID'>
				{$array['BuildingRecord'][$i]['id']}
                </td>
				<td data-label='Broj'>
				{$array['BuildingRecord'][$i]['number']}
                </td>
                <td data-label='Zgrada'>
				{$array['BuildingRecord'][$i]['name']} 
                </td>
				<td data-label='Level'>
                 {$array['BuildingRecord'][$i]['levels']} 
                </td>
				<td data-label='Bilješke'>
                 {$array['BuildingRecord'][$i]['notes']} 
                </td>
			
				<td data-label='Modificirano'>
                {$array['BuildingRecord'][$i]['lastmodified']} 
                </td>
				</tr>
				 </tbody>";
			
			
			

				}
				}
		 echo "</table>";
				
				}
				else{
					echo "Nema traženih podataka!";
				}}catch(Exception $e){
					echo $e->getMessage();
				}	

			
				
		
?>
		
		
	
</div>
</div>

</body>
</html>