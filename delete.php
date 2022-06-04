<?php
include 'config.php';

$ID = $_GET['id'];

$query = "DELETE FROM data WHERE id=$ID";
$result = mysqli_query($con,$query);
header("location:index.php");











?>