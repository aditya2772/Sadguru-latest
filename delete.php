<?php

ob_start();

$con =mysqli_connect("localhost","root","","alpha");

$id = $_GET['id'];

$q  = "DELETE FROM `saitama` WHERE id = $id ";

mysqli_query($con,$q);

header("Location:Admin.php");
?>