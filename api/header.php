<?php
require("db.php");

?>
<head>
    <meta charset="utf-8">
    <title>Login page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">LAN Party</a>
        <form class="d-flex">
            <a class="btn btn-primary btn-md" href="logout.php" style="margin-right: 10px;">Logout</a>
        </form>
    </div>
</nav>


<?php

$username = $_SESSION['username'];
$select = "SELECT * FROM users WHERE username = '$username'";
$sql = mysqli_query($con, $select);
$row = mysqli_fetch_array($sql);

$name = $row['name'];
$dob = $row['dob'];
$pronouns = $row['pronouns'];
$preference = $row['preference'];
$genres = $row['genres'];
$games = $row['games'];
?>