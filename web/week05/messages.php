<?php
	
	include 'dbconnect.php';
	$db = get_db();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Church Meetings Agenda</title>
	<link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<h1 class="center_h">Scheduled Messages</h1>
    <p class="center_p">Check out what every message schedule is about.</p>
    <!--Display database message with their dates list here -->
	<div id="wrap">
		
	
	<?php
	// try {
		  
    //       $statement = $db->prepare('Select * from topic, sacrament_meeting');
    //       $statement->execute();
    //       while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
	// 		$speakingorder = $row['speakingorder'];
	// 		$sundaydate = $row['sundaydate'];
	// 		$descr = $row['descr'];
	// 		echo "<p> $speakingorder <p>";
	// 		echo "<p> $sundaydate <p>";
	// 		echo "<p> $descr <p>";
    //       }
    //     } catch (PDOException $ex) {
    //       echo "$ex";
	// 	}
		
	try {
		  
		$statement = $db->prepare('Select * from topic, sacrament_meeting');
		$statement->execute();
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		  $speakingorder = $row['speakingorder'];
		  $sundaydate = $row['sundaydate'];
		  $descr = $row['descr'];
		  echo "<p> $speakingorder <p>";
		  
		}
	  } catch (PDOException $ex) {
		echo "$ex";
	  }
			
		
	  $statement = $db->query('Select * from sacrament_meeting');
	  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	  {
		echo 'user: ' . $row['speakingorder'] . ' password: ' . $row['sundaydate'] .'<br/>';
	  }


		
		?>
			
		
			
	</div>


	<a href="index.php"><button type="button" class="btn btn-success">Go back</button></a>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>