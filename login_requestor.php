<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>RGUCreate</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>
<body>

<header>

    <nav>

        <div class="main.wrapper">
            <ul>
                <li> <a href="index.php">RGUCreate</a> </li>
            </ul>
        </div>
    </nav>
</header>

<section>
    <div class="title-wrap">
        <h1 class="underline">Requestors login</h1>
    </div>

    <div class="login">
        <div>
            <form class="form" action="requestor.php" method="POST">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>

</section>

</body>
</html>