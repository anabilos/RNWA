<?php

if(!extension_loaded("soap")){
  dl("php_soap.dll");
}


ini_set("soap.wsdl_cache_enabled","0");

$server = new SoapServer("konverzija.wsdl");


function konverzijaEURToBAM($yourValue1){
  return $yourValue1 * 1.96 . " BAM";
}

$server->AddFunction("konverzijaEURToBAM");
$server->handle();
?>