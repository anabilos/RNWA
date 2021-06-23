

<?php

// get the q parameter from URL
$s = $_REQUEST["s"];
$hint = "";


// lookup all hints from array if $q is different from "" 

    $s = strtolower($s);
    $len=strlen($s);
    /*
	foreach($s as $name) {
        if (stristr($s, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    
	}
	*/
	
	

/**********************************************************/
$db = mysqli_connect("localhost","root","");

if($db) {

$result = mysqli_select_db($db, "fido") or die("Došlo je do problema prilikom odabira baze...");
if ($s == "") {
	$sql="SELECT * FROM building";
}
else{
$sql="SELECT * FROM building where name LIKE '%$s%'";
}
//echo $sql;
$result2 = mysqli_query($db, $sql) or die("Došlo je do problema prilikom izvrsavanja upita...");
$n=mysqli_num_rows($result2);

if ($n > 0){
	
		echo "<table class=table>
			<thead>
			 <th>ID</th>
			 <th>Broj</th>
			 <th>Zgrada</th>
			 <th>Level</th>
			 <th>Bilješke</th>
			</thead>";
	while ($myrow=mysqli_fetch_row($result2)){
		 
		echo " <tbody>
			  <tr>
			    <td data-label='ID'>$myrow[0]</td>
			    <td data-label='Broj'>$myrow[1]</td>
			    <td data-label='Zgrada'>$myrow[2]</td>
			    <td data-label='Level'>$myrow[3]</td>
		            <td data-label='Bilješke'>$myrow[4]</td>
			 </tr>
		       </tbody>";
			
			//echo "<div name=\"result2\" id=\"".$myrow[0]."\">" .$myrow[2].", ".$myrow[3]."</div>";
			

		}
		 echo "</table>";
	}
else {
echo "<span style=color:red>Nema rezultata za prikaz!!<br></span>";
}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}
/**********************************************************/
	


// Output "no suggestion" if no hint was found or output correct values 
//echo $hint === "" ? "no suggestion" : $hint;

?>




