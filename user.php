<?php
       
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"voting");


    if (isset($_POST['submit'])){
      $voter_name=$_POST['voterName'];
      $voter_email=$_POST['voterEmail'];
      $voterid=$_POST['voterID'];
      $candidate=$_POST['selectedCandidate'];

      $query=mysqli_query($connection,"SELECT * FROM user where voterID= '$voterid'");
      if(mysqli_num_rows($query)>0)
      {
        echo "<script> alert('Already Used')</script>";
      }
       else{
      $sql = "INSERT INTO user ('voterName','voterEmail','voterID','selectedCandidate') values (null,'$voter_name','$voter_email','$voterid','$candidate')";
      $query_run = mysqli_query($connection,$sql);
      if($query_run){
         echo "<script> alert('Successfully Added'); 
      window.location.href = 'savevote.php';
      </script>";
      }
      else{
          echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
        }
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voting panal</title>

	 <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
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
          <a href="index.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
             <li><a href="features.php"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="about.php"><span class="subFont"><strong>About</strong></span></a></li>
            <li><a href="index.php"><span class="subFont"><strong>Feedback</strong></span></a></li> 
            <li><a href="candidate.php"><span class="subFont"><strong>Candidate list</strong></span></a></li>
          </ul>
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> 
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Choose Your Candidate.</h2>
           
          </div>
          
          <form action="savevote.php" method="POST">
          <div class="form-group">
            <label>Voter's Name :</label><br>
            
            <input type="text" name="voterName" pattern="[A-Za-z]{6,}" title="Enter Your Full Name" placeholder="Enter Your Full Name" class="form-control" required/><br>

            <label>Voter's Registered Email ID :</label><br>
            <input type="text" name="voterEmail" placeholder="Enter Your Email ID" class="form-control"/><br>

            <label>Voter's Card No. :</label><br>
            <input id="id1" type="text" name="voterID" pattern="[0-9].{6,}" placeholder="Enter Your Voter Uniquie ID" class="form-control" required/><br>
            
            <h3 class="normalFont">Select Any One of Them,</h3>
            <div class="radio">
              <label for="">
                <input type="radio" name="selectedCandidate" value="car"> <strong>Car</strong>
              </label><br>

              <label for="">
                <input type="radio" name="selectedCandidate" value="Airplane"> <strong>Airplane</strong> 
              </label><br>
              
              <label for="">
                <input type="radio" name="selectedCandidate" value="Mango"> <strong>Mango</strong>
              </label><br>

             

              <hr>
              <button type="submit" name="submit" class="btn btn-primary" ><strong><a href="savevote.php"></a>Submit</strong></button>
              <button type="submit" class="btn btn-default">Decline</button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>