<?php
include ('connection2.php');

$query = "SELECT * FROM products";

$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Welcome to product</title>
</head>
<body>
<?php 
           
           while ($row = mysqli_fetch_assoc($result)) 
           {
               ?>
                   <h5><?=$row['name']?></h5>
                   <h5><?=$row['price']?></h5>
                   <h5><?=$row['desc']?></h5>
                   <h5><?=$row['availability']?></h5>
                   <img src="<?=$row['image']?>"/>
                   
               <?php    
           }
           ?> 
   
            
            
           
</body>
</html>