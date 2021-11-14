<?php            
    //host specific to the LAMP PHPmyadmin site, will not work on localhost!!!
    $host = "localhost";
    $user = "tleminh2012";
    $password = "UeP0YK1Z0t";
    $db = "tleminh2012";
    
    $con = mysqli_connect($host, $user, $password, $db);
    
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
        
?>