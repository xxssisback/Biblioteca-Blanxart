<?php
    session_start();
    if(!isset($_SESSION["login"]))
        header("location:login.php");
    elseif(!$_SESSION["login"])
        header("location:login.php");
?>