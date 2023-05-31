<?php
include 'connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $email=$_POST['email'];
    $password=$_POST['password'];

$query = "select * from signup where email = '$email'" ;
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
if($num==1){

    echo "Login Successfull!";
    }

    else{
        echo "Login failed!";
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
    <title>Login</title>
</head>
<body>
    
<form action="login.php" method="POST">

    <h1>Login</h1>
    <label>Email</label>
    <input type="text" placeholder="email" name="email">

    <label>Password</label>
    <input type="password" placeholder="password" name="password">
    
    <button>
    SUBMIT
    </button>

</form>
</body>
</html>    