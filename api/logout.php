<?php
    session_start();
    // Destroy session
    // Reseting session variables
    $_SESSION = array();
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
?>