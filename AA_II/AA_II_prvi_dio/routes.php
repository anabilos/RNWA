<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	  
	   case 'buildings':
        require_once('models/building.php');
		$controller = new BuildingsController();
      break;
	   case 'lokacije':
        require_once('models/location.php');
		$controller = new LokacijeController();
      break;
      
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' 		=> ['home', 'error'],
					   'buildings' 	=> ['index', 'show','deletebuilding','verifyupdate','updatebuilding','verifyinsert','insertbuilding'],
					   'lokacije' 	=> ['index', 'show','verifyinsert','insertlocation','verifyupdate','updatelocation','deletelocation'],);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>
