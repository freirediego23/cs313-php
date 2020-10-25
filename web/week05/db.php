<?php


$host = "ec2-54-160-161-214.compute-1.amazonaws.com";
$user = "ncegtiajwvrubg";
$password = "16cd4d18652b874511dfe2038e055c6ccba8c280d14a2f3d64113f03a9d6c3bb";
$dbname = "d98evu8hu5vgv2";
$port = "5432";

try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}




//OPTION #1

// try
// {
//   $dbUrl = getenv('DATABASE_URL');

//   $dbOpts = parse_url($dbUrl);

//   $dbHost = $dbOpts["ec2-54-160-161-214.compute-1.amazonaws.com"];
//   $dbPort = $dbOpts["5432"];
//   $dbUser = $dbOpts["ncegtiajwvrubg"];
//   $dbPassword = $dbOpts["16cd4d18652b874511dfe2038e055c6ccba8c280d14a2f3d64113f03a9d6c3bb"];
//   $dbName = ltrim($dbOpts["path"],'/');

//   //$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

//   // SET THE DSN DATA SOURCE NAME
//   $dsn = "pgsql:host" . $dbHost . ";port" . $dbPort . ";dbname=" . ";user=" . $dbUser . ";password" . $dbPassword . ";";

//   $pdo = new PDO($dsn, $dbUser, $dbPassword);
//   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
//   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
//   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $ex)
// {
//   echo 'Error!: ' . $ex->getMessage();
//   die();
// }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo '<h1>Scripture Resources</h1>';

// $sql = 'SELECT * from scriptures';

// $a = '*';
// $b = 'scriptures';

// //echo var_dump($connection);
// echo '<br>';

// $stmt =  $connection->prepare($sql);
// //$stmt->bindParam(':a', $a);
// //$stmt->bindParam(':b', $b);
// $stmt->execute();

// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $stmt->closeCursor();



// //echo $stmt;
// //echo var_dump($stmt);
// //echo var_dump($data);
// //echo $stmt;

// foreach ($data as $row){
//     echo '<strong>' . $row['book'] . '</strong> - ' . $row['chapter'] . ':' . $row['verse'];
//     echo '<br>';
//     echo $row['content'];
//     echo '<br>';
//     echo '<br>';
// }

// //$stuff = $stmt->fetchAll();*/

?>