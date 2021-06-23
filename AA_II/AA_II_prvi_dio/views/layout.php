<DOCTYPE html>
<html>
  <head>
 
 
	<meta charset="UTF-8">
	<title>Fiber Optics</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	   <link href="asset/css/css/bootstrap.min.css" rel="stylesheet">
</head>

  <body>
  <div class="wrapper">
    <div class="menu-min">
            
        <label for="menu" class="menu-bar">
            <i class="fa fa-bars" aria-hidden="true" ></i>
        </label>
    
    </div>
    <div class="sidebar">
        <h2>Fiber Optics</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>

               <?php
                    
              if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
            <li><a href='index.php?controller=buildings&action=index'><i class="fas fa-tasks"></i><span>Zgrade</span></a></li>
			    <?php 
                      }
                    }
                      ?>
					  <?php
                    
              if (isset($_SESSION['logiran'])) {
                      if ($_SESSION['vrsta']=='admin') {
                       
                       ?>
            <li><a href='index.php?controller=lokacije&action=index'><i class="fas fa-tasks"></i><span>Lokacije</span></a></li>
			<?php 
                      }
                    }
                      ?>
            <li><a href='logout.php'><i class="fas fa-tasks"></i><span>Odjava</span></a></li>
            <li><a href="http://fsre.sum.ba/naslovnica/"><i class="fas fa-building"></i><span>FSRE</span></a></li>
            <li><a href="http://github.com/Andrija555/RNWA"><i class="fab fa-github"></i><span> Github</span></a></li>
        </ul> 
      
    </div>

    <?php require_once('routes.php'); ?>

    </div>
  <body>
<html>