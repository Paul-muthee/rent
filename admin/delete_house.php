<?php
require_once '../includes/db_connection.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM houses WHERE id=$id";
$result = mysqli_query($con, $query) or die(mysqli_error());
header("Location: manage_houses.php");
?>    