<?php
// Get data from the POST

$firstname = $_POST['person_name'];
$lastname = $_POST['person_lname'];
$emailaddress = $_POST['person_email'];
$sundaydate = $_POST['sunday_date'];
$speakingorder = $_POST['speak_order'];
$descr = $_POST['topic'];


require("dbconnect.php");
$db = get_db();


try {
    // add the person information
    $query = 'INSERT INTO member (firstname, lastname, emailaddress) VALUES(:firstname, :lastname, :emailaddress)';
    $statement = $db->prepare($query);

    // bind values to the placeholderds
    $statement->bindValue(':firstname', $firstname);
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':emailaddress', $emailaddress);

    //second query
    $query2 = 'INSERT INTO sacrament_meeting (sundaydate, speakingorder) VALUES(:sundaydate, :speakingorder)';
    $statement2 = $db->prepare($query2);

    $statement2->bindValue(':sundaydate', $sundaydate);
    $statement2->bindValue(':speakingorder', $speakingorder);

    //third query
    $query3 = 'INSERT INTO topic (descr) VALUES(:descr)';
    $statement3 = $db->prepare($query3);

    $statement3->bindValue(':descr', $descr);
    
    
    $statement->execute();
    $statement2->execute();
    $statement3->execute();

    header("Location: member.php");
    

}

catch (Exception $ex){
    echo "Error with DB. Details: $ex";
	die();
}



?>