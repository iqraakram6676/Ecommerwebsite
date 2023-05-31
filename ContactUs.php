<?php
   include "admin/conn.php";

   if(count($_POST) > 0)
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  

  $sql = "INSERT INTO inquiery (name,email,phone,subject,message)
  VALUES ('".$name."', '".$email."','".$phone."' ,'".$subject."' ,'".$message."')";
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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/ContactUsstyle.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<title>Contact Us</title>
</head>
<body>
	
    <?php
        include "Header.php";
    ?>
     <!--Main Banner-->
	<section class="Main_Banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact Us</h1>
				</div>
			</div>
		</div>
	</section>
	<!--Main Banner Ends-->

	<!--Contact Details-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1>Contact Details</h1>
					  <div class="row">
					  	<div class="col-lg-3 top_sec">
					  		<div class="contact_details">
					  			<a href="#"><i class="fa-solid fa-earth-americas"></i></a>
					  			<h5>Our Address</h5>
					  			<p>1628 union Lane Tracy.<br>ca 95377</p>
					  		</div>
					  	</div>

					  	<div class="col-lg-3 top_sec">
					  		<div class="contact_details">
					  			<a href="#"><i class="fa-solid fa-phone"></i></a>
					  			<h5>Our Address</h5>
					  			<p>1628 union Lane Tracy.<br>ca 95377</p>
					  		</div>
					  	</div>


					  </div>

					   <div class="row">
					  	<div class="col-lg-3 bottom_sec">
					  		<div class="contact_details">
					  			<a href="#"><i class="fa-solid fa-envelope"></i></a>
					  			<h5>Our Address</h5>
					  			<p>1628 union Lane Tracy.<br>ca 95377</p>
					  		</div>
					  	</div>

					  	<div class="col-lg-3 bottom_sec">
					  		<div class="contact_details">
					  			<a href="#"><i class="fa-solid fa-clock"></i></a>
					  			<h5>Our Address</h5>
					  			<p>1628 union Lane Tracy.<br>ca 95377</p>
					  		</div>
					  	</div>


					  </div>

                </div>

                <div class="col-lg-6">
                	<div class="Send_message">
                		<h1>Send a Message</h1>
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
                		<form class="form" action="ContactUs.php" method="POST">
                			<input type="text" name="name" placeholder="Name">
                			<li><input type="text" name="email" placeholder="Email"></li>
                			<li><input type="text" name="phone" placeholder="Phone"></li>
                			<input type="text" name="subject" placeholder="Subject">
                			<input type="text" name="message" placeholder="Message" class="message">
                			<button type="submit">Send Message</button>
                		</form>
                		
                	</div>
                </div>
            </div>
		</div>
	</section>
	<!--Contact Details Ends-->

	<!--Map Integration-->
	  <section class="Map_Integration">
	  	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14480.403661898761!2d67.0698887!3d24.8604027!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1d64ea8b0a7ca381!2sMohammad%20Ali%20Jinnah%20University!5e0!3m2!1sen!2s!4v1666889805262!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	  </section>
	<!--Map Integration Ends-->
<?php
  include "Footer.php";
?>

</body>
</html>