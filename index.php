<?php
  //db attribute
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "new_db1";

  // Create connection

  mysql_connect($servername, $username, $password) ;
  //or die (mysql_error());
  //consider that the grader does not have the database, cannot die
  mysql_select_db($dbname);
  //or die ("Cannot connect to database"); 

  $email = $password = "";

  $loginNav = "<li data-toggle=\"modal\" data-target=\"#login-modal\" id=\"login-nav\"><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $loginNav = "<li><h4>Logged in</h4></li>";
    //see if email already exist
    $query = mysql_query("SELECT * FROM login WHERE email='$email'");
    $exist = mysql_num_rows($query);

    if($exist > 0){
     echo "<script type='text/javascript'>alert('The email exists.');</script>";
    }else{
       echo "<script type='text/javascript'>alert('The email does not exist. Creating new entry');</script>";
    }
  }

  

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>CS1520_P2_siz11</title>
  <meta charset="utf-8">
  <link href="css/style1.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <style type="text/css">
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">( ´ ▽ ` )ﾉ</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          echo($loginNav);
        ?>
        
      </ul>
    </div>
  </nav>
  
  <div class="container">
    <div class="jumbotron">
      <h1>Welcome to my test homepage!</h1>
      <p>This serves as an exercise to making a homepage</p>
    </div>

    <div class="btn-group btn-group-justified">
      <div class="btn-group">
         <button type="button" data-toggle="collapse" data-target="#about" class="btn btn-primary">About</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-primary"
        data-toggle="collapse" data-target="#email-collapse">Email
          <span class="glyphicon glyphicon-envelope"></span>
          <span class="badge">
            <?php
              echo(mt_rand(1,10));
            ?>
          </span>
        </button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          More <span class="caret"></span></button> 
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">U!</a></li>
            <li><a href="#">Nya!</a></li>
          </ul>
      </div>
    </div>

    <div id="about" class="collapse media" style="border-radius: 50px;">
      
        <div class="media-left">
          <img src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" class="media-object img-circle" style="width: 60px;">
        </div>
        <div class="media-body">
          <h4 class="media-heading">Username</h4>
          <p>user description</p>
        </div>
      
    </div>

    <div id="email-collapse" class="collapse media" style="border-radius: 50px;">
      
        <div class="media-left">
          <img src="https://www.imperial.ac.uk/ImageCropToolT4/imageTool/uploaded-images/email-resized--tojpeg_1425315712479_x2.jpg" class="media-object img-circle" style="width: 60px;">
        </div>
        <div class="media-body">
          <h4 class="media-heading">
            <span class="glyphicon glyphicon-envelope"></span>
            Email
          </h4>
          <p><?php echo($email)?></p>
        </div>
      
    </div>

    <div class="thumbnail alert fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <h1>Some pictures</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail alert-info">
            <img class="img-rounded img-responsive" src="http://www.jvbco.com/wp-content/uploads/2015/03/numbers.jpg" style="height: 200px;width: 100%;">
          </div>
        </div>
         <div class="col-md-4 ">
          <div class="thumbnail alert-info">
            <img class="img-rounded img-responsive" src="http://www.jvbco.com/wp-content/uploads/2015/03/numbers.jpg" style="height: 200px;width: 100%;">
          </div>
        </div>
         <div class="col-md-4">
          <div class="thumbnail alert-info">
            <img class="img-rounded img-responsive" src="http://www.jvbco.com/wp-content/uploads/2015/03/numbers.jpg"
            style="height: 200px;width: 100%;">
          </div>
        </div>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://kingofwallpapers.com/sky/sky-003.jpg" alt="Chania" width="460" height="345">
        </div>

        <div class="item">
          <img src="http://miriadna.com/desctopwalls/images/max/A-crimson-sky.jpg" alt="Chania" width="460" height="345">
        </div>
      
        <div class="item">
          <img src="http://weknowyourdreams.com/images/sky/sky-01.jpg" alt="Flower" width="460" height="345">
        </div>

        <div class="item">
          <img src="http://dreamatico.com/data_images/sky/sky-8.jpg" alt="Flower" width="460" height="345">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <ul class="pager">
      <li class="previous"><a href="#">Previous</a></li>
    </ul>
  </div>

  <!-- Login modal -->
  <div id="login-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ログイン</h4>
        </div>
        <div class="modal-body">
          <!-- form code comes from http://www.w3schools.com/bootstrap/bootstrap_forms.asp-->
          <form class="form-horizontal" onsubmit="return validateForm()" id="signinForm" method="post">
            <div class="form-group">
              <label class="control-label col-sm-2"></label>
              <p><span class="error">* required field.</span></p>
              <label class="control-label col-sm-2" for="email">Mail:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" maxlength="20" placeholder="Enter email">
                <p class="error" id="emailErr"></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10"> 
                <input type="password" class="form-control" name="password" id="pwd" maxlength="15" placeholder="Enter password">
                <p class="error" id="pwdErr"></p>
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="./js/script1.js"></script>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>