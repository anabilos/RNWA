<?php
  class lokacijeController {
    public function index() {
      // we store all the posts in a variable
      $lokacije = location::all();
      require_once('views/lokacije/index.php');
    }
	  public function verifyinsert(){
      require_once('views/lokacije/insert.php');
    }

    public function insertlocation()
    {
      location::insertlocation( $_POST['fk_building_UID'], $_POST['level'], $_POST['description']);
     return call('lokacije', 'index');
    }

	 public function verifyupdate()
  {
	
    if (!isset($_GET['id']))
          return call('pages', 'error');
    $location = location::find($_GET['id']);
    require_once('views/lokacije/update.php');
  }

  public function updatelocation()
  {
    if (!isset($_POST['fk_building_UID']))
      return call('pages', 'error');
   location::updatelocation($_POST['location_UID'],$_POST['fk_building_UID'], $_POST['level'], $_POST['description']);
   return call('lokacije', 'index');
  }
    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $location = location::find($_GET['id']);
      require_once('views/lokacije/show.php');
	  }
	public function deletelocation() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $location = location::deletelocation($_GET['id']);
      require_once('views/lokacije/delete.php');
    }
	 
	
  }
?>