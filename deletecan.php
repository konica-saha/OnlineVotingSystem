<?php
	$connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"voting");
    $query = "delete from nomination where id = $_GET[ID]";
    $query_run = mysqli_query($connection,$query);

 if($query_run)
 {
 	echo "Record Deleted Successfully";
 	?>
 	<meta http-equiv="refresh" content="1; url=http://localhost/online voting system/candidate.php" />
 	<?php
 }
 else
 {
 	echo "Failed to Delete";
 }
 ?>