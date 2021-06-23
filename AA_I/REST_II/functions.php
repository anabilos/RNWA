	<?php
	
	function get_posts($id=0)
	{
	 global $connection;
	 $query="SELECT * FROM posts";
	 if($id != 0)
	 {
	 $query.=" WHERE id=".$id." LIMIT 1";
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
	
	function insert_posts()
	 {
	 global $connection;
	 $date = date('Y-m-d H:i:s');
	 
	 $data = json_decode(file_get_contents('php://input'), true);
	 
	 
	 $title=$data["title"];
	 $body=$data["body"];
	 $user_id=$data["user_id"];
	 $post_thumbnail=$data["post_thumbnail"];
	 $query="INSERT INTO posts SET title='".$title."', body='".$body."', user_id='".$user_id."', post_thumbnail='".$post_thumbnail."'";
	
	
	$number_of_rows=0;
	 if(mysqli_query($connection, $query))
	 {
		 $number_of_rows = mysqli_affected_rows($connection);
		 $response=array(
		 'status' => 1,
		 'status_message' =>'Employee Added Successfully.',
		 'number_of_affected_rows' => $number_of_rows
		 );
		 
	 }
	 else
	 {
	 $number_of_rows = mysqli_affected_rows($connection);
	 $response=array(
	 'status' => 0,
	 'status_message' =>'Employee Addition Failed.',
	 'number_of_affected_rows' => $number_of_rows
	 );
	 }
	 
	 echo json_encode($response);
	 }
	 
	 
	 function update_posts($id)
	{
		global $connection;
		$put_vars = json_decode(file_get_contents("php://input"),true);
		;
		$title=$put_vars["title"];
		$body=$put_vars["body"];
		
		$query="UPDATE posts SET title='".$title."', body='".$body."' WHERE id=".$id;
		$number_of_rows = mysqli_affected_rows($connection);
		
		if(mysqli_query($connection, $query))
		{
			
			 $response=array(
			 'status' => 1,
			 'status_message' =>'Post Updated  Successfully.',
			 'number_of_affected_rows' => $number_of_rows
			 );
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Employee Updation Failed.',
				'number_of_affected_rows' => $number_of_rows
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	 
	 function delete_posts($id)
	{
		
		global $connection;
		$query="DELETE FROM posts WHERE id=".$id;
		if($result = mysqli_query($connection, $query))
		{
		$number_of_rows = mysqli_num_rows($result);
		$response=array(
			'status' => 1,
			'number_of_affected_rows' => $number_of_rows,
			'status_message' =>'Post Deleted Successfully.'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'Post(s) Deletion Failed.'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
		
	}
	?>