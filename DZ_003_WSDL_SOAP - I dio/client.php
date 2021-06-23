
<?php
echo"<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
 
  box-sizing: border-box;
  font-family: 'Josefin Sans', sans-serif;
}

.wrapper{
 
  
  padding:30px;
  padding-left:50px;
    width: 500px;
  display: block;
  background-color: #eee;
  margin-left: auto;
  margin-right: auto;
 
}
select{
	padding:5px;
}
.button {

  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
    background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button:hover {
  background-color: #555555;
  color: white;
}
</style>";

echo '<div class="wrapper"><h1>Pretvarač valuta</h1><form name="form" method="post" action="">
<p><b><div style=padding-bottom:4px;>Unesite vrijednost: </div></b></br> <input name="value" type="text" id="value" size="25"></p>
<select name="currency" id="currency">
  <option value="toEur">BAM to EUR</option>
  <option value="toBam">EUR to BAM</option>
</select>
<p><input type="submit" name="submit" value="Pretvori" class="button "></p></form></div>';


if(isset($_POST['submit'])){
	
try{
	ini_set('soap.wsdl_cache_enabled',0);
	ini_set('soap.wsdl_cache_ttl',0);

	$value = $_POST['value'];
	if($_POST['currency'] === "toEur"){
		$sClient = new SoapClient('toEur.wsdl');
		$response = $sClient->cBTE($value);
	}
	else{
		$sClient = new SoapClient('toBam.wsdl');
		$response = $sClient->cETB($value);
	}
	
	echo '<div class="wrapper" style=padding-top:5px><p><b>Rezultat: </b>'.$response.'<p></div>';

} catch(SoapFault $e){
  var_dump($e);
  echo $e;
}
}

?>