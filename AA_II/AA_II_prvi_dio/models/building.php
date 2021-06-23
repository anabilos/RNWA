<?php
  class Building {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $building_UID;
    public $name;
    public $notes;
	public $levels;
	public $number;
	

    public function __construct($building_UID, $name, $notes,$levels,$number) {
      $this->building_UID     = $building_UID;
      $this->name  = $name;
      $this->notes = $notes;
	  $this->levels =$levels;
	  $this->number =$number;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM building');


      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Building($post['building_UID'], $post['name'], $post['notes'],$post['number'],$post['levels']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM building WHERE building_UID = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Building($post['building_UID'], $post['name'], $post['notes'],$post['number'],$post['levels']);
    }
	public static function deletebuilding($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
	  $sql="DELETE FROM building WHERE building_UID ='$id'";
	  //echo $sql;
	  
      //$req = $db->prepare($sql);
      // the query was prepared, now we replace :id with our actual $id value
      //if ($req->execute(array('id' => $id))){
		  //$req=$r->execute($sql);
	if ($db->query($sql) == TRUE){
	//if (1==2){
		  $rez="USPJESNO brisanje";
	  }
		  else {
			 $rez="NESPJESNO brisanje";;
		  }
		  return $rez;
		  
	
}
  public static function updatebuilding($building_UID,$name, $notes,$number,$levels) {
      $db = Db::getInstance();
      $building_UID = intval($building_UID);
	  $levels = intval($levels);
	
      $sql="UPDATE building SET name = '$name', notes='$notes', levels=$levels, number=$number
       WHERE building_UID = '$building_UID' ";
      $db->query($sql);
    }
	public static function insertbuilding($name, $notes,$number,$levels) {
      $db = Db::getInstance();
	  $levels = intval($levels);
      $sql="INSERT INTO building  (name, notes,number,levels)
      VALUES ('$name', '$notes', '$number', '$levels')";
      $db->query($sql);
    }
	
  }
?>