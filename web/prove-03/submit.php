<?php

$name = $_POST['Name'];
$email = $_POST['Email'];
$major = $_POST['Major'];
$continents = $_POST['Continents'];
$comments = $_POST['Comments'];


echo "Your name is: " . $name;
echo "<br>";
echo "Your email is: " . $email;
echo "<br>";
echo "Your major is: " . $major;
echo "<br>";
echo "You have visited the following continents: ";

if (!empty($_POST))
foreach ($_POST['Continents'] as $continents) {
    echo $continents;
}
echo "<br>";
echo "Comments: " . $comments;






?>