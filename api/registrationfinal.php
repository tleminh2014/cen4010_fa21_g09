<!DOCTYPE HTML>  
<html>
<head>
<meta charset="utf-8"/>
    <title>LAN Party | Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
</head>

<body>  
<?php
require('db.php');
include("header.php");

// define variables and set to empty values

$nameErr = $emailErr = $passwordErr = $usernameErr = "";
$name = $email = $password = $username = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
      $usernameErr = "Username is required";
    } else {
      $username = test_input($_POST["username"]);
      if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*W).*$#",$username)) {
        
        //$usernameErr = "OK";
      }
      $sql = "SELECT * FROM users WHERE username = '$username'";
      $res = mysqli_query($con, $sql);

      if(mysqli_num_rows($res) > 0) {
        $usernameErr = "Username already in use";
        }
      }
      

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
      //check if password is least 8 characters long, include at least one number, letter, and caps.
        if(preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password)){
        //echo "Your password is strong.";
        } else{
         //echo "Your password is weak.";
          $passwordErr= "Password must be at least 8 characters long, include at least one number, letter, and caps.";         
  }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";          
   }
   // check if email address already exists in db
   $sql = "SELECT * FROM users WHERE email='$email'";
   $res = mysqli_query($con, $sql);

   if(mysqli_num_rows($res) > 0) {
     $emailErr = "Email already in use";
    }
  }

 

  //$query    = "INSERT into `users` (username, name, password, email)
  //VALUES ('$username', '$name', '" . md5($password) . "', '$email')";
  //$result   = mysqli_query($con, $query);
  //<p class='link'>Click here to <a href='testing.php'>register</a> again.</p>
  
    //error checking and making the database entry
    if(!$nameErr AND !empty($_POST['name']) AND !$emailErr && !empty($_POST['email']) AND !empty($_POST['username']) AND !$passwordErr && !empty($_POST['password'])){
        $query    = "INSERT into `users` (username, name, password, email)
        VALUES ('$username', '$name', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        
        echo "<div class='form'>
        
        <h3>You are registered successfully. Please verify it by clicking the activation link that has been send to your email.</h3><br/>                 
        <p class='link'>Click here to <a href='login.php'>Login</a></p>
        </div>";
    } else {
    echo "<div class='form'>
    <h3>Required fields are missing.</h3><br/>
    </div>";
  }
}

  


//cleans the input fields
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
//random stuff I removed, but wanted to keep around just in case
//<input type="text" name="username">
//<input type="submit" name="submit" value="Submit"> 
//<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?BBBBBB>">
//<h2>Validation login</h2>
//<p><span class="error">* required field</span></p>
?>

<form class="form" action="" method="post">
  <h1 class="login-title">Register</h1>
  <input type="text" class="login-input" name="username" placeholder="Username"  />
  <span class="error"> <?php echo $usernameErr;?></span>
  <br><br>
 
  <input type="text" class="login-input" name="name" placeholder="Name"  />
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>

  <input type="text" class="login-input" name="email" placeholder="Email Address" >
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
 
  <input type="password" class="login-input"  name="password" placeholder="Password" >
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>
 
  <input type="password" class="login-input" name="password" placeholder="Re-Enter Password" >
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Register" class="login-button"> 
  <p class="link"><a href="login.php">Click to Login</a></p>

</form>
</body>
</html>