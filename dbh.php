<?php

$dbServername = "localhost";
$dbUsername = "testuser";
$dbPassword = "LetMeIn";
$dbName = "msc";


try {

    $dataSourceName = "mysql:host=$dbServername;dbname=$dbName;";
  $pdo = new PDO($dataSourceName, $dbUsername, $dbPassword);
//    $pdo = new PDO($dataSourceName, "testuser", "LetMeIn");
//    $query = "select username from Creators";
//    $result=$pdo->query($query);
//    if ($result->rowCount()==0)
//        echo "No row";
//    else    {
//            foreach ($result as $row)
//                echo "<p>".$row["username"]."</p>";
//    }

//    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO :: ERRMODE_EXEPTION);
//    echo $dataSourceName;
//    echo "<p>PDO is ok</p>";
} catch (PDOException $e)
    {
    echo "Error: " .$e->getMessage()."<br/>";
    }
//exit();
?>