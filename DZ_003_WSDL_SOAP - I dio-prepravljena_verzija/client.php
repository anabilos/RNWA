
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
            <li><a href="client.php"><i class="fas fa-tasks"></i><span>WSDL I</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 2</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 3</span></a></li>
            <li><a href="http://fsre.sum.ba/naslovnica/"><i class="fas fa-building"></i><span>FSRE</span></a></li>
            <li><a href="http://github.com/Andrija555/RNWA"><i class="fab fa-github"></i><span> Github</span></a></li>
        </ul> 
      
    </div>

 <div class="main_content">
        
        <div class="header">WSDL II</div>  
        <div class="info">


    
<h1>Pretvarač valuta</h1><form name="form" method="post" action=""><br/>
<p><b>Unesite vrijednost: </b></br> <input name="value" type="text" id="value" ></p>
<select name="currency" id="currency">
  <option value="toEur">BAM to EUR</option>
  <option value="toBam">EUR to BAM</option>
</select>
<p style="margin-bottom:15px"><input type="submit" name="submit" value="Pretvori" class="button "></p></form>

   
		<?php
	
	if(isset($_POST['submit'])){
	
try{

	ini_set('soap.wsdl_cache_enabled',0);
	ini_set('soap.wsdl_cache_ttl',0);

	$value = $_POST['value'];
	if($_POST['currency'] === "toEur"){
		$sClient = new SoapClient('konverzija.wsdl');
		$response = $sClient->konverzijaBAMToEUR($value);
	}
	else{
		$sClient = new SoapClient('konverzija.wsdl');
		$response = $sClient->konverzijaEURToBAM($value);
	}
	
	echo '<div class="wrapper" style=padding-top:5px><p><b>Rezultat: </b>'.$response.'<p></div>';

} catch(SoapFault $e){
  var_dump($e);
  echo $e;
}
}
		
		
		?>
	
</div>
</div>

</body>
</html>