<?php            
    //host specific to the XAMPP PHPmyadmin site
    $host = "localhost:3307";
    $user = "root";
    $password = "";
    $db = "test";
    
    $con = mysqli_connect($host, $user, $password, $db);
    
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
        
?>