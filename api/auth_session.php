<?php
    session_start();
    if(!isset($_SESSION["is_active"])) {
        echo"<script>alert('You need to be logged in!')</script>";
        echo"<script>window.open('login.php', '_self')</script>";
        exit();    
    }
?>
