<?php
  class BuildingsController {
    public function index() {
      // we store all the posts in a variable
      $buildings = Building::all();
      require_once('views/buildings/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $building = Building::find($_GET['id']);
      require_once('views/buildings/show.php');
    }
	public function deletebuilding() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $building = Building::deletebuilding($_GET['id']);
      require_once('views/buildings/delete.php');
    }
	
	
	  public function verifyupdate()
  {
	
    if (!isset($_GET['id']))
          return call('pages', 'error');
    $building = Building::find($_GET['id']);
    require_once('views/buildings/update.php');
  }

  public function updatebuilding()
  {
    if (!isset($_POST['building_UID']))
      return call('pages', 'error');
   Building::updatebuilding($_POST['building_UID'], $_POST['name'], $_POST['notes'],$_POST['number'],$_POST['levels']);
   return call('buildings', 'index');
  } 
  public function verifyinsert(){
      require_once('views/buildings/insert.php');
    }

    public function insertbuilding()
    {
      Building::insertbuilding( $_POST['name'], $_POST['notes'],$_POST['number'],$_POST['levels']);
     return call('buildings', 'index');
    }
	
  }
?>