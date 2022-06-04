<?php

include 'config.php';

//isset checks if the button is clicked or not; then what to do next after the action

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    //$IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,$img_des);


//insert query
$query = "INSERT INTO data (name,price,image) VALUES ('$NAME','$PRICE','$img_des')";
$result = mysqli_query($con,$query);
header("location:index.php");

}

?>