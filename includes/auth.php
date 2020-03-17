<?php

session_start();
if(!isset($_SESSION["username"])){
    header("Location: ../admin/signin.php");
    exit(); 

}
?>