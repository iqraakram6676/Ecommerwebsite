<?php
   include "conn.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">
  <title>Login Page</title>
</head>

<body>
  <div class="Shadow">
  <form  method="POST">
    <div class="login-box">
      <h1>Login</h1>

      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Admin Name"
            name="adminname">
      </div>

      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password"
            name="password">
      </div>

      <button class="button" type="submit"
          name="login">Login</button>
    </div>
  </form>
  </div>
</body>

<?php
    if(isset($_POST['login'])){
      $sql ="SELECT * FROM `adminlogin` WHERE `adminname` = '$_POST[adminname]'
      AND `password` = '$_POST[password]'";
      $result =mysqli_query($conn,$sql);
         if(mysqli_num_rows($result) > 0){
          session_start();

          $_SESSION['Admin']=$_POST['adminname'];
          header("location: usermanagement.php");
         }

         else{
          echo "<script> alert('Incorrect Password'); </script>";
         }
    }
?>




<style>
  
  body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url() no-repeat;
  background-size: cover;
}

.login-box {
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #234f4b;
}

.login-box h1 {
  float: left;
  font-size: 40px;
  border-bottom: 4px solid #234f4b;
  margin-bottom: 50px;
  padding: 13px;
}

.textbox {
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #234f4b;
}

.fa {
  width: px;
  float: left;
  text-align: center;
}

.textbox input {
  border: none;
  outline: none;
  background: none;
  font-size: 18px;
  float: left;
  margin: 0 10px;
}

.button {
  width: 100%;
  padding: 8px;
  color: #ffffff;
  background: none #234f4b;
  border: none;
  border-radius: 6px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
.Shadow{
  box-shadow: 0 5px 10px black;
  background-color: #ffffff;
}

</style>

</html>
