<?php

try {
	require ('dbconnect.php');
	$db = get_db();
}
catch (Exception $ex) {
	echo "$ex";
  }







?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php

try {
	$statement = $db->prepare('Select * from member');
	$statement->execute();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
	  $firstname = $row['firstname'];
	  $lastname = $row['lastname'];
	  $emailaddress = $row['emailaddress'];
	  echo "<p> $firstname</p>";
	  echo "<p> $lastname</p>";
	  echo "<p> $emailaddress</p>";
	}
  } catch (Exception $ex) {
	echo "$ex";
  }


?>



</body>
</html>