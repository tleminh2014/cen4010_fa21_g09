<?php
include("auth_session.php");
include("header.php");
include("vars.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LAN Party | Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="container-fluid" style="text-align:center; margin-top: 250px;">
    <h1 style="margin-bottom: 20px;">Ready Player 2?</h1>
    <a href="dashboard.php?">
      <button type="button "class="btn btn-primary btn-lg" style="margin-right: 30px;">Looking for the one?</button>
    </a>

    <a class="btn btn-primary btn-lg" href="#">Looking for a group?</a>
  </div>
</body>

</html>