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


	$query = "select * from forms";
	


$result = mysql_query($query,$con); 
	if($result!=FALSE){
	while ($row = mysql_fetch_array($result)) {
		$row_array['name'] = $row['name'];
		$row_array['id'] = $row['id'];
		$row_array['link'] = $row['link'];
		array_push($json_array,$row_array);
	}

	echo json_encode($json_array);
	mysql_close($con);
}
?>