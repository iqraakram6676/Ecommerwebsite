<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/MyAccountstyle.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<title>My Account</title>
</head>
<body>

	<!--Header Start-->
       <?php
         include "Header.php";
       ?>
	<!--Header Ends-->

	<!--Main Banner-->
	<section class="Main_Banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>My Account</h1>
				</div>
			</div>
		</div>
	</section>
	<!--Main Banner Ends-->

<!--My Account-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="Form-box">
					<h3>Login Into Your Account</h3>
					<form>
						<input class="user" type="text" name="user" placeholder="User Name">
						<input class="pass" type="text" name="pass" placeholder="Password">
						<button class="login-btn" type="log">Login</button>
						<input class="check-box" type="checkbox" name="check"><span>Remember Me</span>
						<a href="#"  class="forget">Forget password?</a>

					</form>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="Form-box1">
					<h3>Register</h3>
					<form>
						<input class="f_name" type="text" name="Fname" placeholder="First Name">
						<input class="l_name" type="text" name="Lname" placeholder="Last Name">
						<input class="email" type="text" name="Email_add" placeholder="Email Address">
						<input class="pass1" type="text" name="pass" placeholder="Password">
						<input class="repass" type="text" name="re_pass" placeholder="Retype Password">
						<p class="para">By creating an account, our agree to our <a href="file:///C:/Users/LAPTOP%20WORLD/Desktop/Demo%20Project/bootstrap-5.0.2/bootstrap-5.0.2-dist/Termsnpolicy.html"><u>Term & Conditions</u></a></p>
						<button class="login-btn" type="log">Create Account</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--My Acoount Ends-->

   <!--Footer-->
   <?php
     include "Footer.php"
   ?>
   <!--Foote Ends-->

</body>
</html>