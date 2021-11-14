<?php
  include("auth_session.php"); 
 // Check if the user is logged in, if not then redirect him to login page
 // if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) { -->
 //   $_SESSION['id'] = " "; -->
 // } -->
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LAN Party | Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
</head>
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">LAN Party</a>
    <form class="d-flex">
      <a href="profile.php?id=<?php echo $_SESSION['id']; ?>">
        <button type="button" class="btn btn-primary btn-md" style="margin-right: 10px;">My Profile</button>
      </a>
      <!-- <a class="btn btn-primary btn-md" href="registrationfinal.php" style="margin-right: 10px;">Signup</a>
      <a class="btn btn-primary btn-md" href="login.php">Signin</a> -->
    </form>
  </div>
</nav>

<body>
  <div class="container-fluid" style="text-align:center; margin-top: 250px;">
    <h1 style="margin-bottom: 20px;">Ready Player 2?</h1>
    <a href="dashboard.php?id=<?php echo $_SESSION['id']; ?>">
      <button type="button "class="btn btn-primary btn-lg" style="margin-right: 30px;" href="login.php">Looking for the one?</button>
    </a>

    <a class="btn btn-primary btn-lg" href="login.php">Looking for a group?</a>
  </div>
</body>

</html>