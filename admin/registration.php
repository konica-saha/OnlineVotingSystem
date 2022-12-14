<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"voting");


if (isset($_POST['register'])){
	$query = "INSERT INTO admin 
	values(null,'$_POST[name]','$_POST[email]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
	if($query_run){
		echo "<script> alert('Registration Successfull.......You may login'); 
		window.location.href = 'admin.php';
		</script>";
	}
	else{
		echo "<script> alert('Please Enter Correct Password'); </script>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Bootstrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

  </head>
<body>
	<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
            <li><a href="features.php"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="about.php"><span class="subFont"><strong>About</strong></span></a></li>
          
          </ul>
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div>
    </nav>

    
    <div class="container" style="padding-top:150px;">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;">


        <div class="page-header">
          <h2 class="specialHead">Registration</h2>
        </div>
				<form action="registration.php" method="POST">
            <div class="form-group">
              <label for="">Username</label><br>
              <input type="text" name="name"  class="form-control"><br>

              <label for="">Email</label><br>
              <input type="text" name="email"  class="form-control"><br>

              <label for="">Password</label><br>
              <input type="password" name="password" class="form-control"><br>

              <button type="submit" name="register" class="btn btn-block span btn-primary "><span class="glyphicon glyphicon-user"></span> Sign In</button>
              <p><a href="registration.php"> If you not registerd, please register here.</a></p>

              <label id="error"></label>
            </div>

          </form>
				<br>



         </div> 
        <div class="col-sm-4"></div>
      </div>
    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>