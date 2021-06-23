<?php
session_start();
if(isset($_SESSION['logiran'])){
    unset($_SESSION['logiran']);
}
if(isset($_SESSION['vrijeme'])){
    unset($_SESSION['vrijeme']);
}
if(isset($_SESSION['vrsta'])){
    unset($_SESSION['vrsta']);
}
session_destroy();
echo "Odjavljeni ste... slijedi preusmjeravanje.";
header("Location: index.php");
die();
?>