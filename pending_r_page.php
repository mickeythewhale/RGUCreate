<?php

require_once "dbh.php";

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT title, content, platforms, notes FROM Requests";
$result1 = $pdo->query($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>RGUCreate</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="pending_r.css">
    <link rel="stylesheet" type="text/css" href="style_r.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>

<header>
    <nav>
        <div class="main.wrapper">
            <ul>
                <li><a href="creator.php">RGUCreate</a> </li>
            </ul>
        </div>
    </nav>
</header>

<div class="title-wrap">
    <h1 class="underline">Create Our Tomorrow</h1>
</div>

<br>
<br>

<?php
foreach ($result1 as $row1) {
    ?>

    <ul class="request_details">
        <li><em>Title:</em> <?php echo $row1["title"] ?></li>
        <li><em>Content type:</em> <?php echo $row1["content"] ?></li>
        <li><em>Platform:</em> <?php echo $row1["platforms"] ?></li>
        <li><em>Notes:</em> <?php echo $row1["notes"] ?></li>
    </ul>

    <?php
}

?>

<div class="accept">
<button type="submit" name="accept">Accept</button>
    <button type="submit" name="decline">Decline</button>
</div>

