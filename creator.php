<?php
error_reporting(E_ALL);

session_start();

$_SESSION[username] = $row['username'];
$_SESSION[first] = $row['first'];
$_SESSION[last] = $row['last'];
$_SESSION[id] = $row['creator_id'];

require_once "dbh.php";

$query = "SELECT r_name, title, content, platforms FROM Requests";
$result1 = $pdo->query($query);

?>



<!DOCTYPE html>
<html>
<head>
    <title>RGUCreate</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="table.css">
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
                <li> <a>RGUCreate</a> </li>
            </ul>
        </div>
    </nav>
</header>

<div class="title-wrap">
    <h1 class="underline">Create Our Tomorrow</h1>
</div>

<br>
<br>

<div class="tabset">
    <!-- Tab 1 -->
    <input type="radio" name="tabset" id="tab1" aria-controls="pending" checked>
    <label for="tab1">Requests</label>

    <div class="tab-panels">
        <section id="pending" class="tab-panel">


                <table style="width:100%" class="blueTable">
                    <thead>
                    <tr>
                        <th>Requestor</th>
                        <th>Title</th>
                        <th>Content type</th>
                        <th>Platform</th>
                    </tr>
                    </thead>

                    <?php
                            foreach ($result1 as $row1) {
                                ?>
                                <tr id="request" class='clickable-row' action="pending_r_page.pgp" data-href='pending_r_page.php'>
                                    <td><?php echo $row1['r_name']; ?></td>
                                    <td><?php echo $row1['title']; ?></td>
                                    <td><?php echo $row1['content']; ?></td>
                                    <td><?php echo $row1['platforms']; ?></td>
                                </tr>

                                <script>
                                jQuery(document).ready(function($) {
                                $(".clickable-row").click(function() {
                                window.location = $(this).data("href");
                                });
                                });
                                </script>

                                <?php
                            }
                    ?>

                </table>

        </section>


    </div>

</div>


</body>
</html>