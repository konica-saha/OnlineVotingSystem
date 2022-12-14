<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Nomination Panel</title>

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
    </nav><br><br>

  <div class="row">
    <div class="col-md-12">
      <center><h1> Nomination List </h1></center><br>
    </div>
  </div>
  <section>
  
    <div class="row  mb-5">
      <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"voting");
                $query = "select * from nomination ORDER BY `id` ASC";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">
                        <img src="data:image/jpg;charset=utf-8;base64,<?php echo base64_encode($row["img"]);?>">
                        </div><br><br>
                        <div class="card-body">
                          <p class="card-text">
                              <?php
                               echo $row['id'];
                              ?>  
                            </p>
                            <p class="card-text">Name:
                              <?php
                               echo $row ['name'];
                              ?>  
                            </p>
                            <p class="card-text">Group:
                              <?php 
                                echo $row ['n_group'];
                              ?>  
                            </p>
                            <p class="card-text">District:
                              <?php 
                               echo $row ['district'];
                              ?>  
                            </p>
                          <button class="btn btn-success"> <a class="text-danger" href="deletenomini.php?ID=<?php echo $row['id'];?>">Delete </button>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
     
    
            
    </div>
  </section>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>