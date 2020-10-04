<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
// if (isset($_SESSION['itemName'])) { 
//     print_r($_SESSION);
  
//   } else {    
//     print_r($_SESSION);
  
//   } 

  
    $_SESSION["itemName"] = $_POST['name']; 
  

  
    $_SESSION["itemEmail"] = $_POST['email']; 
  
    $_SESSION["itemAddress"] = $_POST['address']; 

    if(isset($_POST['address'])){ 
      $_SESSION["itemAddress"] = $_POST['address']; 
    }
    
  



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS Styling-->
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="wrap">
<h2 class="center">Please add your address:</h2>
<br><br>
<form action="confirmation.php" method="post">
  <label for="names">Name</label>
  <input type="text" name="name" value=""><br><br>
  <label for="mails">E-mail</label>
  <input type="text" name="email" value=""><br><br>
  <label for="mails">Address</label>
  <input type="text" name="address" value=""><br><br>
  <input type="submit" class="btn btn-success" value="Continue">
</form>
<a href="cart.php?"><button type="button" class="btn btn-light">Go Back</button></a>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>