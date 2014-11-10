<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel - Oorvani</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="common.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>
   
  </script>
</head>
<body >
	
	<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">OORVANI</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Add Survey</a></li>
        <li><a href="#">Active surveys</a></li>
      </ul>
   
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div style="margin: 0 auto;width:70%;font-size: 20px;padding:5px;border-radius: 3px;">
  <table>
    <tr>
      <th>Survey</th>
    </tr>
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
  

$json_array = array();
$result = mysql_query($query,$con); 
if($result!=FALSE){
  while ($row = mysql_fetch_array($result)) {
    echo "<tr><td><a href='http://$row[link]'>".$row['name']."</a></td></tr>";
  }
  // echo json_encode($json_array);
}

mysql_close($con);
?>
</table>
</div>
</body>

</html>