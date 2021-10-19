<?php            
    //host specific to the XAMPP PHPmyadmin site
    $host = "localhost";
    $user = "tleminh2012";
    $password = "lemonzing2012!";
    $db = "tleminh2012";
    
    $con = mysqli_connect($host, $user, $password, $db);
    
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
        
?>