<?php
session_start(); //Use this for creating the session

// Include database file
include("vars.php");
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}


if(isset($_GET['id']))
{
    $likeSql = "INSERT INTO likes (userid, user2id) VALUES (?,?)";
    if($stm = $con->prepare($likeSql))
    {
        $stm->bind_param("ss", $param_sender, $param_receiver);
        $param_sender = $id;
        $param_receiver = $_GET['id'];
        if($stm->execute())
        {
            echo"<script>alert('Like sent from userid $id ! Returning to dashboard')</script>";
            echo"<script>window.open('dashboard.php', '_self')</script>";
        }
        else{
            echo "Something went wrong. Please try again later.";
        }
        $stm->close();
    }
    else{
        echo $con->connect_error;
    }
}
else{
    echo "SOMETHING WENT WRONG";
}
?>