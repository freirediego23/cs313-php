<?php
require('dbconnect.php');
$db = get_db();

// $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add New Talk</title>
	<link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<h2 class="center_h">Talk Register</h2>
	<br>
	<div id="wrap">
		
	
		<form action="insert.php" method ="post">
            <label for="example1">Name</label><br>
            <input type="text" name="person_name"><br>
            <br>
            <label for="example2">Last Name</label><br>
            <input type="text" name="person_lname"><br>
            <br>
            <label for="example3">Email</label><br>
            <input type="text" name="person_email"><br>
            <br>
            <label for="example4">Sunday Date</label><br>
            <input type="text" name="sunday_date"><br>
            <br>
            <label for="example5">Speaking Order</label><br>
            <input type="text" name="speak_order"><br>
            <br>
            <label for="example6">Topic Description</label><br>
            <input type="text" name="topic"><br>
            <br>

            <input class="btn btn-primary" type="submit" name="subitems" value="Submit"><br>
            <br>
            <a href="index.php"><button type="button" class="btn btn-light">Go back</button></a>
        
        </form>
		
		

	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>