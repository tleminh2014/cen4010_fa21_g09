<?php
    session_start();
    require_once('db.php');

    $username = $password = "";
    $usernameErr = $passwordErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "Please enter username.";
        } else {
            $username = trim($_POST["username"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        if(!$usernameErr AND !$passwordErr) {

            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $query    = "SELECT * FROM `users` WHERE username='$username'
                        AND password='" . md5($password) . "'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['username'] = $username;
                // session_start();
                // session_write_close();
                // Redirect to user dashboard page
                header("location: home.php");
                exit();
            } else {
                echo "<div class='form'>
                    <h3>Incorrect Username/password.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                    </div>";
            }
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">LAN Party</a>
        <form class="d-flex">
            <a class="btn btn-primary btn-md" href="registrationfinal.php" style="margin-right: 10px;">Signup</a>
        </form>
    </div>
</nav>

<body>
        <form class="form" method="post" name="login">
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
            <span class="error"> <?php echo $usernameErr;?></span>
            <input type="password" class="login-input" name="password" placeholder="Password" />
            <span class="error"> <?php echo $passwordErr;?></span>
            <input type="submit" value="Login" name="submit" class="login-button" />
            <p class="link"><a href="registrationfinal.php">New Registration</a></p>
        </form>
</body>

</html>