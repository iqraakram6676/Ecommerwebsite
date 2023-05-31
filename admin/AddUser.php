
<?php
include "conn.php";
include "session.php";
// include "dashboardsession.php";


if(count($_POST) > 0)
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $sql = "INSERT INTO usermanagement (firstname, lastname, email,phone,password)
  VALUES ('".$firstname."', '".$lastname."','".$email."','".$phone."', '".$password."')";
  //echo $sql;die; 
  if (mysqli_query($conn, $sql)) {
    $is_insert = true;
    $msg = "New record created successfully";
  } else {
    $is_insert = false;
    $msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}


?>


<!DOCTYPE html>
<html>
<head>
<title>Users Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<?php 
include('nav.php');
?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Add New User</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-container">
    <a href='usermanagement.php' class="w3-button w3-dark-grey">Users Management <i class="fa fa-arrow-right"></i></a><br /><br />


    <div class="container">
    <h2>User Data</h2>
    <?php 
    if(count($_POST) > 0)
    {
      if($is_insert == true)
      {
        echo '<div class="alert alert-success">'.$msg.'<strong>Success!</strong> </div>';
      }
      else{
        echo '<div class="alert alert-danger">'.$msg.'<strong>Error!</strong> </div>';
      }
    }
    ?>

    <form action="AddUser.php" method="POST">
      <div class="form-group">
        <label for="Firstname">First Name:<span style='color:red'>*</span></label>
        <input type="text" class="form-control" required="" name="firstname" id="Firstname" placeholder="Enter First Name">
      </div>

      <div class="form-group">
        <label for="Lastname">Last Name:<span style='color:red'>*</span></label>
        <input type="text" class="form-control" required="" name="lastname" id="Lastname" placeholder="Enter Last Name">
      </div>

      <div class="form-group">
        <label for="Email">Email:<span style='color:red'>*</span></label>
        <input type="email" class="form-control" required="" name="email" id="Email" placeholder="Enter Email">
      </div>

      <div class="form-group">
        <label for="Phone">Phone:<span style='color:red'>*</span></label>
        <input type="text" class="form-control" required="" name="phone" id="Phone" placeholder="Enter Phone Number">
      </div>

      <div class="form-group">
        <label for="pwd">Password:<span style='color:red'>*</span></label>
        <input type="password" class="form-control" required="" name="password" id="pwd" placeholder="Enter Password">
      </div>

<button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
    
  </div>
  </div>

  
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
