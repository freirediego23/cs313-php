<?php
session_start();
//error_reporting(E_ALL ^ E_NOTICE); 
// if (isset($_SESSION['itemName'])) { 
//     print_r($_SESSION);
  
//   } else {    
//     print_r($_SESSION);
  
//   } 
  
  if(isset($_POST['name'])){ 
    $_SESSION["itemName"] = $_POST['name']; 
  }

  if(isset($_POST['email'])){ 
    $_SESSION["itemEmail"] = $_POST['email']; 
  }

  if(isset($_POST['address'])){ 
    $_SESSION["itemAddress"] = $_POST['address']; 
  }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS Styling-->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrap">
  <h2 class="center">Transaction Completed!</h2>
  <p class="center">Thank you for buying. Your items will be shipped to this direction:</p>
  <p><?php if (isset($_SESSION['itemName']))
      {echo 'Name: ' . $_SESSION['itemName'];}
  ?></p>

  <p><?php if (isset($_SESSION['itemEmail']))
      {echo 'Email: ' . $_SESSION['itemEmail'];}
  ?></p>

  <p><?php if (isset($_SESSION['itemAddress']))
      {echo 'Address: ' . $_SESSION['itemAddress'];}
  ?></p>

  <p><?php if (isset($_SESSION['itempencil']))
      {echo 'Item: ' . $_SESSION['itempencil'];}
  ?></p>

  <p><?php if (isset($_SESSION['itempaper']))
      {echo 'Item: ' . $_SESSION['itempaper'];}
  ?></p>

  <p><?php if (isset($_SESSION['itemnotebook']))
      {echo 'Item: ' . $_SESSION['itemnotebook'];}
  ?></p>

  <p><?php if (isset($_SESSION['itemfolder']))
      {echo 'Item: ' . $_SESSION['itemfolder'];}
  ?></p>

  <a href="checkout.php?"><button type="button" class="btn btn-light">Go Back</button></a>
</div>
</body>
</html>