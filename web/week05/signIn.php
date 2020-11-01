<?php

session_start();

$badLogin = false;

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{

    $username = $_POST['txtUser'];
    $password = $_POST['txtPassword'];

    require("dbconnect.php");
    $db = get_db();

    $query = 'SELECT password FROM login WHERE username=:username';

    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);

    $result = $statement->execute();

    if ($result)
    {
        $row = $statement->fetch();
        $hashedPasswordFromDB = $row['password'];

        if (password_verify($password, $hashedPasswordFromDB))
        {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            die();
        }
        else {
            $badLogin = true;
        }



    }
    else {
        $badLogin = true;
    }
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
</head>
<body>
    
<div id="wrap">
    <div id="container">

    <?php
        if ($badLogin)
        {
            echo "Wrong Username or Password <br>";
        }

?>

<div class="mid">
    
    <h1>Church Talk Agenda</h1>

    <p>Schedule your next talk with one click</p>
</div>

<h2>Sign in Here</h2>


<form action="signIn.php" method="POST">

        <label for="txtUser">Username</label><br>
        <input type="text" name="txtUser" id="txtPassword" placeholder="Username">
        
        <br>
        <label for="txtPassword">Password</label><br>
        <input type="password" name="txtPassword" id="txtPassword"><br>
        
        <br>

        <input type="submit" value="Sign In">



</form>

<br>

<p>You can also <a href="signUp.php">Sign up</a> for an account.</p>
</div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>