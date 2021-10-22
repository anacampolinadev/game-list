<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php
session_start();
    if(!isset($_SESSION['user'])){
        $_SESSION['user'] = null;
        $_SESSION['name'] = null;
        $_SESSION['tipo'] = null;
    }

    include_once "includes/dbConn.php";
    include_once "includes/functions.php";
    include_once "data-layer/db.php";
    include_once "data-layer/games.php";
    include_once "data-layer/user.php";
    include_once "data-layer/password.php";
    
?>