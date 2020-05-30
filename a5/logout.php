<?php
session_start();
if(isset($_POST["submit"])){
    unset($_SESSION["Role"]);
    unset($_SESSION['LoginUser']);
    header('location: index.php');
}
