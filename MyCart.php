<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/MyCart.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
	<title>About Us</title>
</head>
<body>

	<!--Header-->
	  <?php
       include "Header.php";
	  ?>
	<!--Header Ends-->

	<!--Main Banner-->
	<section class="Main_Banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>My Cart</h1>
				</div>
			</div>
		</div>
	</section>
	<!--Main Banner Ends-->

    <!--My Cart-->
       <section>
			<div class="container">
			<div class="row">
			<div class="col-lg-9">
						<table>
						<thead>
						<tr class="head">
						<th> ITEM </th>
						<th> QUANTITY </th>
						<th> UNITPRICE </th>
						<th> SUBPRICE </th>
						</tr>
						</thead>
						<tbody>
						<tr class="section">
						<td class="sect"><img src="images/glove.png"><h1><b> PRODUCT NAME HERE </b></h1>
						<p> 26 REVIEWS </p></td>

						<td class="sec1"><form action="#">
							<input type="number" value="1">
								<button> Update Cart </button>
							</form></td>
								<td class="text"><p><b> $123 </b></p><p><b> $123 </b></p></td>
								<td class="sub1"><form action="#">
							<input type="text1" name="X" placeholder="X">
						</form></td>
						</tr>
								</tbody>
						  </table>
								</div>
										<div class="col-lg-3">
											<div class="box">
												<div class="text1">
												  <p><b> Sub Total </b></p>
												</div>
												<div class="text2">
												  <p><b> $250.00 </b></p>
												</div>
												<div class="text3">
												  <p><b> Discount </b></p>
												</div>
												<div class="text4">
												  <p><b> $50.00 </b></p>
												</div>
												<div class="text5">
												  <p><b> Shipping </b></p>
												</div>
												<div class="text6">
												  <p><b> $20.00 </b></p>
												</div>
												<div class="text7">
												  <p><b> TOTAL </b></p>
												</div>
												<div class="text8">
												  <p><b> $290.00 </b></p>
												</div>
											</div>
										</div>
								</div>
									<div class="row">
										<div class="col-lg-9">
										<table>
											<thead>
											</thead>
											<tbody>
												<tr >
													<td class="sect"><img src="images/Helmet.png"><h1><b> PRODUCT NAME HERE </b></h1>
													  <p> 26 REVIEWS </p></td>
													<td class="sec1"><form action="#">
													  <input type="number" value="1">
													<button> Update Cart </button>
													  </form></td>
													<td class="text"><p><b> $123 </b></p><p><b> $123 </b></p></td>
													  <td class="sub2"><form action="#">
													<input type="text" name="X" placeholder="X">
												</form></td>
												</tr>
											  </tbody>
								     </table>
							</div>
					 </div>
											<div class="row">
											<div class="col-lg-9">
										<table>
										  <thead></thead>
										<tbody>
										<td class="ii"><button>Continue Shopping</button></td>
									<td class="ii-2"><a href="Checkout.html"><button>Proceed To Checkout</button></a></td>
								</tbody>
						</table>
			    </div>
							<div class="col-lg-3">
								<div class="box-2">
									<div class="text-1">
									  <p><b> Shipping </b></p>
									</div>
									<div class="sub-text-1">
									  <p> Courier ($15) </p>
									</div>
									<div class="text-1">
									  <p><b> Estimate For </b></p>
									</div>
									<div class="sub-text-1">
									  <p> Lorem ispum br  </p>
									</div>
									</div>
								</div>
								</div>
							</div>
		</section>
    <!--My Cart Ends-->

	<!--Footer-->
	  <?php
	    include "Footer.php";
	  ?>
	<!--Footer Ends-->