<?php

function get_buildings($id=0)
{
	global $connection;
	$query="SELECT * FROM building";
	if($id != 0)
	{
		$query.=" WHERE building_UID=".$id." LIMIT 1";
	}
	$response=array();
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		$response[]=$row;
	}
	header('Content-Type: application/json');
	echo json_encode($response);
}

function insert_building()
	{
		global $connection;

		$data = json_decode(file_get_contents('php://input'), true);
		$building_number	=$data["building_number"];
		$building_name		=$data["building_name"];
		$building_levels	=$data["building_levels"];
		$building_notes		=$data["building_notes"];
		$building_address	=$data["building_address"];
		$building_long		=$data["building_long"];
		$building_lat		=$data["building_lat"];
		echo $query="INSERT INTO building VALUES (NULL, '".$building_number."','".$building_name."','".$building_levels."', '".$building_notes."','".$building_address."',
		'".$building_long."','".$building_lat."',NOW())";
		if(mysqli_query($connection, $query))
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Building Added Successfully.'
			);
		}
		else
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Building Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
function update_building($id)
	{
		global $connection;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$building_number	=$data["building_number"];
		$building_name		=$data["building_name"];
		$building_levels	=$data["building_levels"];
		$building_notes		=$data["building_notes"];
		$building_address	=$data["building_address"];
		$building_long		=$data["building_long"];
		$building_lat		=$data["building_lat"];
		
		$query="UPDATE building SET name='".$building_name."', notes='".$building_notes."', number='".$building_number."' WHERE building_UID=".$id;
		
		$result=mysqli_query($connection, $query);
		$broj_redaka = mysqli_affected_rows($connection);;
		
		if($result)
		{
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Building Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Building Updation Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

function delete_building($id)
{
	global $connection;
	$query="DELETE FROM building WHERE building_UID=".$id;
	if($result = mysqli_query($connection, $query))
	{
		//$broj_redaka = mysqli_num_rows($result);
		$response=array(
			'status' => 1,
			//'brojredaka' => $broj_redaka,
			'status_message' =>'Building Deleted Successfully.'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'Building Deletion Failed.'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
}


?>
