<?php            
    //host specific to the LAMP PHPmyadmin site, will not work on localhost!!!
    $host = "localhost";
    $user = "root";
    $password = "Goowls2022!";
    $db = "tleminh2012";
    
    $con = mysqli_connect($host, $user, $password, $db);
    
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
        
?>