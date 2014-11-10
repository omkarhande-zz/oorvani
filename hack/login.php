<?php

	$configs = include('config.php');
	// print_r($configs);
	$con = mysql_connect($configs['host'],$configs['username'],$configs['password']);
	if (!$con)
	  {
	  die('-1'. mysql_error());
	  }
	mysql_select_db($configs['db'], $con);
	$json_array = array();
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];
	$gcm_id = $_REQUEST['gcm_id'];


	$query = "select u.name, u.id from users u where u.email = '".$email."' and u.pass = '".$pass."'";
	


$result = mysql_query($query,$con); 
	if($result!=FALSE){
	while ($row = mysql_fetch_array($result)) {
		$row_array['name'] = $row['name'];
		$row_array['id'] = $row['id'];
		array_push($json_array,$row_array);
	}
		$query = "update users set gcm_id = '".$gcm_id."' where email = '".$email."' and pass = '".$pass."'";
		
		mysql_query($query,$con);

		echo json_encode($json_array);
		//echo "hello";
	}
	else{
		array_push($json_array,$row_array);
		echo json_encode($json_array);
	//	echo "Whazza";
	}
mysql_close($con);
?>