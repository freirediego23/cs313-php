<?php
require("dbconnect.php");
$db = get_db();

$firstname = $_GET['person_name'];
$lastname = $_GET['person_lname'];
$emailaddress = $_GET['person_email'];
// $sundaydate = $_GET['sunday_date'];
// $speakingorder = $_GET['speak_order'];
// $descr = $_GET['topic'];



// if(isset($_GET['did'])) {
//     $delete_id = mysql_real_escape_string($_GET['did']);
//     $query = "DELETE FROM member WHERE id = '".$delete_id."'";
//     $statement = $db->prepare($query);
//     if($statement) {
//         echo "<br/><br/><span>deleted successfully...!!</span>";
//     } else {
//         echo "ERROR";
//     }
// }



 try {
     // add the person information
     $query4 = 'DELETE FROM member';
     $statement4 = $db->prepare($query4);


     //second query
     $query5 = 'DELETE FROM topic';
     $statement5 = $db->prepare($query5);

     //third query
     $query6 = 'DELETE FROM sacrament_meeting';
     $statement6 = $db->prepare($query6);



     $statement4->execute();
     $statement5->execute();
     $statement6->execute();

     header("Location: member.php");
 }

  catch (PDOException $ex) {
     echo "$ex";
   }



?>