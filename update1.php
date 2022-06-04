<?php
include 'config.php';


if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    //$IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,$img_des);


//update query
$query = "UPDATE data SET name='$NAME', price='$PRICE',image='$img_des' WHERE id=$ID";
$result = mysqli_query($con,$query);
header("location:index.php");

}

?>