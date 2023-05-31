<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Checkoutstyle.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<title>Check Out</title>
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
					<h1>Checkout</h1>
				</div>
			</div>
		</div>
	</section>
	<!--Main Banner Ends-->

    <!--Billing Address-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 billing_address">
					<h1>Billing Address</h1>
						<div class="row">
							<div class="col-lg-2">
								<div class="input_labels">
									<label id="country">Country</label>
									<label id="first_name">First Name</label>
									<label id="last_name">Last Name</label>
	                                <label id="company_name">Company Name</label>
	                                <label id="address">Address</label>
	                                <label></label>
	                                <label id="town">Town/City</label>
	                                <label id="email">Email</label>
	                                <label id="phone">Phone</label>
                                </div>
							</div>
							<div class="col-lg-6">
								<form class="form">
									<input type="text" name="" placeholder="" id="country_name">
									<input type="text" name="" placeholder="">
									<input type="text" name="" placeholder="">
									<input type="text" name="" placeholder="">
									<input type="text" name="" placeholder="Street Address">
									<input type="text" name="" placeholder="">
									<input type="text" name="" placeholder="Town/City">
									<input type="text" name="" placeholder="">
									<input type="text" name="" placeholder="">
								</form>
							</div>

							<div class="col-lg-4">
								<div class="order_txt">
									<h3>Your Order</h3>
								</div>

								<div class="Order_detail">
									<p>Cart Subtotal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $123.00</p>
									<hr>

									<p>Shipping &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Free Shipping</p>
									<hr>

									<p>Order Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $123.00</p>
									<hr>

									<h3>Payment Method</h3>

								</div>

								<div class="Order_detail">
									<input type="checkbox" name=""><span id="payment">Cheque Payment</span>
									<input type="checkbox" name=""><span>Paypal</span><img src="images/paypal.png">
									<button>Place Order</button>
								</div>

							</div>
</div>
			</div>
		</div>
	</section>
	<!--Billing Address ends-->

<?php
   include "Footer.php";
?>

</body>
</html>