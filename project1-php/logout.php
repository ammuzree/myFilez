<?php
 session_start();
// unset($_SESSION['uzer-id']);
// unset($_SESSION['uzer-name']);
// session_destroy($_SESSION['uzer-name']);
// session_destroy($_SESSION['uzer-pazz']);
// session_destroy();
// $_SESSION=[];

// header("location:login.php");
// die();

if (isset($_SESSION['uzer-name'])){
    session_destroy();
    header("location:login.php");
    exit;

}
