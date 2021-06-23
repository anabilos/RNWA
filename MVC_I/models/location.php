<?php
  class Location {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $location_UID;
    public $level;
    public $description;
	public $fk_building_UID;
	public $lastMod;

    public function __construct($location_UID, $fk_building_UID, $level ,$lastMod, $description) {
      $this->location_UID     = $location_UID;
	  $this->fk_building_UID  = $fk_building_UID;
      $this->level  = $level;
	  $this->lastMod  = $lastMod;
      $this->description = $description;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM LOCATION');


      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Location($post['location_UID'], $post['fk_building_UID'], $post['level'], $post['lastMod'], $post['description']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM LOCATION WHERE location_UID = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Location($post['location_UID'], $post['fk_building_UID'], $post['level'], $post['lastMod'], $post['description']);
    }
	 public static function insertlocation( $fk_building_UID, $level , $description) {
      $db = Db::getInstance();
      $fk_building_UID = intval($fk_building_UID);
      $level = intval($level);
      $description =$description;
      $sql="INSERT INTO LOCATION ( fk_building_UID, level , description)
      VALUES ('$fk_building_UID', '$level' , '$description')";
      $db->query($sql);
    }
	
	 public static function updatelocation($location_UID,$fk_building_UID, $level , $description) {
      $db = Db::getInstance();
      $fk_building_UID = intval($fk_building_UID);
      $level = intval($level);
      
      
      $sql="UPDATE LOCATION SET fk_building_UID = '$fk_building_UID', level = '$level', description = '$description'
       WHERE location_UID = '$location_UID'";
      $db->query($sql);
    }
	public static function deletelocation($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
	  $sql="DELETE FROM LOCATION WHERE location_UID ='$id'";
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
  }
?>