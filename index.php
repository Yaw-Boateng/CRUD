<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="JS/bootstrap.js"></script>
</head>
<body>
    
<center>
    <div class="main" >
<form action="insert.php" method="post" enctype="multipart/form-date">
    <label for="">name</label>
    <input type="text" name="name" >
    <br> <br> <br>
    <label for="">Price</label>
    <input type="text" name="price" >
    <br> <br> <br>
    <label for="">Image</label>
    <input type="file" name="image" >
    <br> <br> <br>
    <button type="submit" class="btn btn-danger" name="upload">Submit</button>
    <!-- <button type="submit" > upload</button> -->
</form>
    </div>
</center>








<!-- fetch -->

<div class="container">
    <table class="table">
<thead>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Price</th>
    <th scope="col">Image</th>
    <th scope="col">Update</th>
    <th scope="col">Delete</th>
</thead>
<tbody>
    <?php
include 'config.php';
$query = "SELECT * FROM data";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
    echo "<tr> 
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[price]</td>
    <td> <img src='$row[image]' width='200px' height='70px'> </td>
   <td> <a href='update.php? id=$row[id]' class='btn btn-danger'>Update</a>  </td>
   <td> <a href='delete.php? id=$row[id]'    class='btn btn-danger'>Delete</a>  </td>
<td></td> 
    </tr>";
}
    ?>
</tbody>
    </table>
</div>













</body>
</html>