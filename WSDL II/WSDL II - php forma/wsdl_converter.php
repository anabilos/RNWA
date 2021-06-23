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
            <li><a href="wsdl_converter.php"><i class="fas fa-tasks"></i><span>WSDL II</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 2</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>Zadatak 3</span></a></li>
            <li><a href="http://fsre.sum.ba/naslovnica/"><i class="fas fa-building"></i><span>FSRE</span></a></li>
            <li><a href="http://github.com/Andrija555/RNWA"><i class="fab fa-github"></i><span> Github</span></a></li>
        </ul> 
      
    </div>

 <div class="main_content">
        
        <div class="header">WSDL II</div>  
        <div class="info">

<h1>Converter</h1>
    

    <form action="wsdl_converter.php" method="post">
	<br/>
        
       Broj: <input type="number" name="number"/><br/><br/>
		
        <input style="padding:10px" type="submit" name="submit1" value="ConvertEURtoBAM"> <input style="padding:10px"type="submit" name="submit2" value="ConvertBAMtoEUR">
    </form>

    <br /><br />

   
		<?php
		if (isset($_POST['submit1'])||isset($_POST['submit2'])) {
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
		$ws=new SoapClient('https://localhost:44325/WebService1.asmx?wsdl',$options);
		try{
			
			$broj = $_POST['number'];
			
			$param=array('a'=>$broj);
			if (isset($_POST['submit1'])){
			$result=$ws->konverzijaEURToBAM($param)->konverzijaEURToBAMResult. ' KM';
			}else{
				$result=$ws->konverzijaBAMToEUR($param)->konverzijaBAMToEURResult. ' EUR';
			}
			
		}catch(SoapFault $ex){
			print $ex;
			
		}
		
		echo $result;
		}
		
		?>
	
</div>
</div>

</body>
</html>