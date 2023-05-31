<?php
include 'connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $status=$_POST['status'];


$query = "INSERT INTO `signup` (`first_name`, `last_name`, `email`, `phone_number`, `DOB`, `status`) VALUES ('$fname', '$lname', '$email', '$contact', '$dob', '$status')";
$result = mysqli_query($conn,$query);

if($result){
    echo "successfully inserted ";
    }
    else{
        echo "error in inserting due to".mysqli_error($conn);
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <title>Signup</title>
</head>
<body>
    
<form action="signup.php" method="POST">
    <h1>Sginup</h1>
    <label>First Name</label>
    <input type="text" placeholder="Firstname" name="fname">

    <label>Last Name</label>
    <input type="text" placeholder="Lastname" name="lname">

    <label>Email</label>
    <input type="text" placeholder="Email" name="email">

    <label>Contact</label>
    <input type="text" placeholder="contact" name="contact">

    <label>Date of birth</label>
    <input type="text" placeholder="dateofbirth" name="dob">

    <label>Status</label>
    <input type="text" placeholder="status" name="status">

    <button>
        SUBMIT
    </button>
</form>
</body>
</html>