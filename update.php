<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    

<?php
include 'config.php';

$ID = $_GET['id'];

$query = "SELECT * FROM data WHERE id=$ID";
$result = mysqli_query ($con,$query);
$data = mysqli_fetch_array($result);

?>



<center>
    <div class="main" >
<form action="update1.php" method="post" enctype="multipart/form-date">
    <label for="">name</label>
    <input type="text" value="<?php echo $data['name']; ?>"  name="name" >
    <br> 
    <label for="">Price</label>
    <input type="text" value="<?php echo $data['price']; ?>"   name="price" >
    <br> 
    <label for="">Image</label>
    <td><input type="file" value="<?php echo $data['image']; ?>" name="image"> <br> <img 
    src="<?php echo $data['image']; ?>" alt="" width="200px" height="70px"   ></td> <br>
    <input type="hidden" name="Id" value="<?php echo $data['id']; ?>"  >
    <br> 
    <button type="submit" class="btn btn-danger" name="update">Update</button>
    <!-- <button type="submit" > upload</button> -->
</form>
    </div>
</center>












</body>
</html>