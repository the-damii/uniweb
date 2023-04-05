<?php
    session_start();
    if(!isset($_SESSION["lname"])) {
        header("Location: login.php");
        exit();
    }
?>