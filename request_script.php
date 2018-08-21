<?php

if(isset($_POST['submit'])) {


    try {
        require_once "dbh.php";
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO requests (title, r_name, content, platforms, notes, status)
VALUES ('" . $_POST["title"] . "','" . $_POST["urname"] . "','" . $_POST["content"] . "','" . $_POST["platforms"] . "','" . $_POST["notes"] . "')";
        if ($pdo->query($sql)) {
            echo "<script type= 'text/javascript'>alert('Thank you! Your request was submitted');</script>";
        } else {
            echo "<script type= 'text/javascript'>alert('Error');</script>";
        }


        $pdo = null;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}

header("Location: requestor.php");
exit();