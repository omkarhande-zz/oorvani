<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel - Oorvani</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="common.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>
    $(document).ready(function(){
      // $.ajax({
      //       url: 'http://localhost/hack/admin/add_form.php?name=hi&link=hi',
      //       type: 'GET',
            
      //       success: function() {
      //       //called when successful
      //       // $('#ajaxphp-results').html(data);
      //       },
      //       error: function() {
      //       //called when there is an error
      //       //console.log(e.message);
      //       }
      //     });
      $("#add").click(function(e){
          // alert("Yo");
          e.preventDefault();
          var name = $('#surveyname').val();
            var link = $('#surveylink').val();
          $.ajax({
            
            url: 'http://localhost/hack/admin/add_form.php?name='+name+'&link='+link,
            type: 'GET',
            
            success: function() {
            //called when successful
            // $('#ajaxphp-results').html(data);
            $('#surveyname').val("");
            $('#surveylink').val("");
            },
            error: function() {
            //called when there is an error
            //console.log(e.message);
            }
          });
          $.ajax({
            url: 'http://localhost/hack/admin/gcm_send.php',
            type: 'GET',
            
            success: function() {
            //called when successful
            // $('#ajaxphp-results').html(data);
            },
            error: function() {
            //called when there is an error
            //console.log(e.message);
            }
          });
      });
    });
  </script>
</head>
<body style="background: url('/images/bg1.png') no-repeat center center;
  position: fixed;
  width: 100%;
  height: 350px; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;">
	
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
        <li class="active"><a href="#">Add Survey</a></li>
        <li><a href="list.php">Active surveys</a></li>
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
<!-- <div class="row"> -->
  <div style="height:100px;"></div>
  <form role="form" style="width:50%;margin: 0 auto; border: solid 2px #72C5D6;padding:20px;border-radius: 10px;-webkit-box-shadow: 6px 9px 110px -43px rgba(24,24,26,1);
-moz-box-shadow: 6px 9px 110px -43px rgba(24,24,26,1);
box-shadow: 6px 9px 110px -43px rgba(24,24,26,1);" >
    <div class="form-group">
      <label for="email">Name:</label>
      <input id="surveyname" type="text" class="form-control" placeholder="Survey Name">
    </div>
    <div class="form-group">
      <label for="email">Link:</label>
      <input id="surveylink" type="url" class="form-control" placeholder="Survey Link">
    </div>
    <div style="text-align: center;">
    <button id="add" class="btn btn-primary" style="width:120px;">Add</button>
    </div>
  </form>
<!-- </div> -->
</body>

</html>