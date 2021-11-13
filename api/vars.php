<?php

require("db.php");


$username = $_SESSION['username'];
$select = "SELECT * FROM users WHERE username = '$username'";
$sql = mysqli_query($con, $select);
$row = mysqli_fetch_array($sql);

$id = $row['id'];
$name = $row['name'];
$dob = $row['dob'];
$pronouns = $row['pronouns'];
$preference = $row['preference'];
$genres = $row['genres'];
$games = $row['games'];
?>