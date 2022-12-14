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
            
          </ul>
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> 
    </nav>

<section id="list">
		<div class="text-center bg-warning mt-4">
			<h4><strong> Candidate list</strong></h4>
			<hr class="hr-style">
		</div>
		<div class="container table-responsive-md">
			<table class="table table-striped">
				<thead>
					<tr class="bg-info">
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Group</th>
						<th scope="col">District</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"voting");
					$query = "select * from nomination ORDER BY `id` ASC ";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['id'] ?></td>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['n_group'] ?></td>
							<td><?php echo $row['district'] ?></td>
							
							<td>
								<button class="btn"> <a class="text-success" href="editcan.php?ID=<?php echo $row['id'];?>"> Edit</a> </button>

								<button class="btn" > <a class="text-danger" href="deletecan.php?ID=<?php echo $row['id'];?>">Delete </button>
							</td>
						</tr>
					<?php
					}
					?>
				</body>
			</table>
		</div>	
	</section>

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>