<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE); 

//$varPencils = $_POST["itemname1"];


if(isset($_POST['removepencil'])){ 
   unset( $_SESSION["itempencil"]); 
 }

 if(isset($_POST['removepaper'])){ 
   unset( $_SESSION["itempaper"]); 
}

 if(isset($_POST['removenotebook'])){ 
  unset( $_SESSION["itemnotebook"]); 
 }

 if(isset($_POST['removefolder'])){ 
  unset( $_SESSION["itemfolder"]); 
 }

 if(isset($_POST['clear'])){ 
  session_unset(); 
}
// if (isset($_SESSION['itempencil'])) { 
//   print_r($_SESSION);

// } else {    
//   print_r($_SESSION);

// } 


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS Styling-->
    <link rel="stylesheet" href="style.css">
  </head>
<body>

<div class="wrap">
<h3>Your Shopping Cart:</h3>
<!-- Shopping Cart Form -->
<form action="cart.php" method ="POST">
<div class="container">
    
<div class="row">
  <div class="col-sm col-lg-6">
  <p><?php if (isset($_SESSION['itempencil']))
    {echo 'Your item is: ' . $_SESSION['itempencil'];}?></p>
    <div><?php if (isset($_SESSION['itempencil'])) 
    {echo'<img src="pencil.jpg" class="tiny_img" alt="pencil image">';} ?></div>
    <div><?php if (isset($_SESSION['itempencil'])) 
    {echo'<input type="submit" class="btn btn-outline-secondary" name = "removepencil" value = "Delete Item">';} ?></div>
  </div>  

  <br>
  <div class="col-sm col-lg-6">
  <p><?php if (isset($_SESSION['itempaper']))
      {echo 'Your item is: ' . $_SESSION['itempaper'];}?></p>
      <div><?php if (isset($_SESSION['itempaper'])) 
      {echo'<img src="papers.jpg" class="tiny_img" alt="paper image">';} ?></div>
      <div><?php if (isset($_SESSION['itempaper'])) 
      {echo'<input type="submit" class="btn btn-outline-secondary" name = "removepaper" value = "Delete Item">';} ?></div>
  </div>  
  
 
  <div class="col-sm col-lg-6">
<p><?php if (isset($_SESSION['itemnotebook']))
    {echo 'Your item is: ' . $_SESSION['itemnotebook'];}?></p>
    <div><?php if (isset($_SESSION['itemnotebook'])) 
    {echo'<img src="notebook.jpg" class="tiny_img" alt="notebook image">';} ?></div>
    <div><?php if (isset($_SESSION['itemnotebook'])) 
    {echo'<input type="submit" class="btn btn-outline-secondary" name = "removenotebook" value = "Delete Item">';} ?></div>
  </div>

  <div class="col-sm col-lg-6">
<p><?php if (isset($_SESSION['itemfolder']))
    {echo 'Your item is: ' . $_SESSION['itemfolder'];}?></p>
    <div><?php if (isset($_SESSION['itemfolder'])) 
    {echo'<img src="folder.jpg" class="tiny_img" alt="folder image">';} ?></div>
    <div><?php if (isset($_SESSION['itemfolder'])) 
    {echo'<input type="submit" class="btn btn-outline-secondary" name = "removefolder" value = "Delete Item">';} ?></div>
  </div>
  <!-- <input type="submit" class="btn btn-outline-secondary" name = "removepencil" value = "Delete Pencil">
  <input type="submit" class="btn btn-outline-secondary" name = "removepaper" value = "Delete Paper"> 
  <input type="submit" class="btn btn-outline-secondary" name = "removenotebook" value = "Delete Notebook"> -->
  </div>
  <br>
  <a href="checkout.php?"><button type="button" class="btn btn-success">Confirm</button></a>  
  <a href="shoppingCart.php">Back</a>
</div>
</div>
<!-- <input type="submit" class="btn btn-outline-secondary" name = "clear" value = "Clear"> -->
</form>

</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>