<?php
include 'connection2.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $image='';
    $availability=$_POST['available'];

    if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0) 
    {
        $upload_dir = 'image/';
        $imageName = str_replace(" ","-",$_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir.$imageName);
        $image = $upload_dir.$imageName;
    }


$query = "INSERT INTO `products` (`name`, `desc`, `price`, `image`, `availability`) VALUES ('$name', '$desc', '$price', '$image', '$availability')";
$result = mysqli_query($conn,$query);

if($result){
    echo "Successfull";
    header('location:welcome.php');
    }
    else{
        echo "Error".mysqli_error($conn);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Product</title>
</head>
<body>
    <h1>Product Details</h1>
    
<form action="product.php" method="POST" enctype="multipart/form-data">

    <label>Product Name</label>
    <input type="text" placeholder="name" name="name">

    <label>Description</label>
    <input type="text" placeholder="desc" name="desc">

    <label>Price</label>
    <input type="text" placeholder="price" name="price">

    <label for="File">Image</label>
    <input type="File" placeholder="image" name="image">

    <label>Availability</label>
    <input type="text" placeholder="availability" name="available">

    <button>
        SUBMIT
    </button>
</form>
</body>
</html>