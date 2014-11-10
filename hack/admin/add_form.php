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


	$query = "insert into forms(name,link) values('$_REQUEST[name]','$_REQUEST[link]')";
	


$result = mysql_query($query,$con); 
?>