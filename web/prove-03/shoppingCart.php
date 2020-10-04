<?php
// Start the session
session_start();
error_reporting(E_ALL ^ E_NOTICE);  


  if(isset($_POST['pencil'])){ 
      $_SESSION["itempencil"] = $_POST['pencil']; 
    }
  
    if(isset($_POST['papers'])){ 
        $_SESSION["itempaper"] = $_POST['papers']; 
    }

    if(isset($_POST['notebook'])){ 
        $_SESSION["itemnotebook"] = $_POST['notebook']; 
    }

    if(isset($_POST['folder'])){ 
        $_SESSION["itemfolder"] = $_POST['folder']; 
    }


 

if(isset($_POST['clear'])){ 
    session_unset(); 
  }

//Remove buttons

if(isset($_POST['removepencil'])){ 
    unset( $_SESSION["itempencil"]); 
}

if(isset($_POST['removepaper'])){ 
    unset( $_SESSION["itempaper"]); 
}

if(isset($_POST['removenotebook'])){ 
    unset( $_SESSION["itemnotebook"]); 
}

//   if (isset($_SESSION['itempencil'])) { 
//     print_r($_SESSION);
  
// } else {    
//     print_r($_SESSION);

// } 


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS Styling-->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <a href="cart.php?"><button type="button" class="btn btn-primary">Your Shopping Cart</button></a>

    
    
    <h2 class="center">Welcome to the Item Menu!</h2>
    <p class="center">Select any item you may wish to add and check your shopping cart:</p>
    <!-- Shopping Cart Form -->
    <form action="shoppingCart.php" method ="POST">
    <div class="container">
    
    <div class="row">
        
                    <div class="col-sm col-lg-6">
                        <img src="pencil.jpg" alt="pencil image">
                        <h3>Pencils</h3>
                        <p>Click to add it to your cart!</p>
                        <input type="submit" class="btn btn-outline-secondary" name = "pencil" value = "Pencil">
                        <!-- <input type="submit" class="btn btn-outline-secondary" name = "removepencil" value = "Delete Pencil">     -->
                    </div>
                    <div class="col-sm col-lg-6">
                        <img src="papers.jpg" alt="paper image">
                        <h3>Papers</h3>
                        <p>Click to add it to your cart!</p>
                        <input type="submit" class="btn btn-outline-secondary" name = "papers" value = "Papers">
                        <!-- <input type="submit" class="btn btn-outline-secondary" name = "removepaper" value = "Delete Paper">    -->
                    </div>
                    <div class="col-sm col-lg-6">
                        <img src="notebook.jpg" alt="notebook image">
                        <h3>Notebook</h3>
                        <p>Click to add it to your cart!</p>
                        <input type="submit" class="btn btn-outline-secondary" name = "notebook" value = "Notebook">
                        <!-- <input type="submit" class="btn btn-outline-secondary" name = "removenotebook" value = "Delete Notebook">  -->
                    </div>
                    <div class="col-sm col-lg-6">
                        <img src="folder.jpg" alt="folder image">
                        <h3>Folder</h3>
                        <p>Click to add it to your cart!</p>
                        <input type="submit" class="btn btn-outline-secondary" name = "folder" value = "Folder">
                        <!-- <input type="submit" class="btn btn-outline-secondary" name = "removepaper" value = "Delete Paper">    -->
                    </div>
            
            </div>
        
    </div>
            <br>
            
    </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>