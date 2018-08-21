<?php

session_start();

$_SESSION[username] = $row['username'];
$_SESSION[first] = $row['first'];
$_SESSION[last] = $row['last'];
$_SESSION[id] = $row['requestor_id'];

require_once "dbh.php";

$query = "SELECT r_name, title, content, platforms FROM Requests";
$result1 = $pdo->query($query);

?>


<!DOCTYPE html>
<html>
<head>
    <title>RGUCreate</title>
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style_r.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>
<body>

<header>

    <nav>

        <div class="main.wrapper">
            <ul>
                <li> <a>RGUCreate</a> </li>
            </ul>
        </div>
    </nav>
</header>

<section>
    <div class="title-wrap">
        <h1 class="underline">Create Our Tomorrow</h1> <br>
<br>        <h3 class="underline">Your requests</h3>
        <form action="request_form.php">
            <button type="submit" name="submit">New request</button>
        </form>
    </div>

   <br>
    <br>
    <br>
    <br> <table style="width:100%" class="blueTable">
        <thead>
        <tr>
            <th>Title</th>
            <th>Content type</th>
            <th>Platform</th>
            <th>Status</th>
        </tr>
        </thead>

        <?php
        foreach ($result1 as $row1) {
            ?>
            <tr>
                <td><?php echo $row1['title']; ?></td>
                <td><?php echo $row1['content']; ?></td>
                <td><?php echo $row1['platforms']; ?></td>
            </tr>

            <?php
        }
        ?>

    </table>

</section>

