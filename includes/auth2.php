<?php

session_start();
if(!isset($_SESSION["id_no"])){
    header("Location: ../tenant/signin.php");
    exit(); 

}
?>