<?php
include "admin/conn.php";
include 'admin/function.php';
$id=$_GET['id']; 


$sql = "SELECT * FROM products WHERE id = $id";

$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Productdetailsstyle.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
	<title>Product Details</title>
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
                    <h1>Product Details</h1>
                </div>
            </div>
        </div>
    </section>
    <!--Main Banner Ends-->

    <!--Product Details-->


<section class="Product_Details">
    <div class="container">
       <?php
      if (mysqli_num_rows($result) > 0) {
      ?>
        <div class="row">
            <div class="col-lg-6">
            
            <div class="col-lg-2">
                <div class="Product_one">
                    <img src="images/golve1.jpg">   
                </div>
                <div class="Product_two">
                    <img src="images/golve2.jpg">   
                </div>
                <div class="Product_three">
                    <img src="images/golve3.jpg">   
                </div>
            </div>
             <?php
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-3">
                <div class="Product_four">
                    <img src="http://localhost/Project/<?=$row["imgpath"].$row["img"];?>">
                    
                </div>
              
            </div>
        </div>
        

            <div class="col-lg-6">
                <div class="Product_cart_details">
                <h1>Product Name Here</h1>
                <h3><?php echo price($row["price"]);?></h3>
                    <div class="single-product">       
                     <input class="input" type="number" value="1">
                    <a href="MyCart.html"><button class="button" type="Add">Add to Cart</button></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua. officia<br> deserunt mollit anim id est laborum.</p>
                    <p id="para"><b>Colour Shown:</b>   Black/White/Gray</p>
                    <p id="para"><b>Style:</b>   CT1000-100</p>
                    <p id="para"><b>Availability:</b>  In Stock</p>
                    </div>

            </div>
            </div>
            <?php
          }
            ?>
        </div>
        <?php 
              }
              else {
                echo "0 results";
              }
              ?>
    </div>
</section>


<!--Product Details Ends-->

<!--More Products-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Heading">
                    <h1> Related Products </h1>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem Ipsum has been the industry's standard dummy text. </p>
                </div>
            </div>
                </div>
               


                  <div class="row">
             <div class="col-lg-4">
               <div class="Product">
                 <img src="images/Product1.png">
                </div>
                <div class="Product_txt">
                  <p>Product Name Goes Here</p>
                  <ul>
                    <li><p>$123</p></li>
                    <li><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                </div>

                <div class="col-lg-4">
               <div class="Product">
                 <img src="images/Product2.png">
                </div>
                <div class="Product_txt">
                  <p>Product Name Goes Here</p>
                  <ul>
                    <li><p>$123</p></li>
                    <li><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                </div>

                <div class="col-lg-4">
               <div class="Product">
                 <img src="images/Product3.png">
                </div>
                <div class="Product_txt">
                  <p>Product Name Goes Here</p>
                  <ul>
                    <li><p>$123</p></li>
                    <li><a href="#">Shop Now</a></li>
                  </ul>
                </div>
                </div>

              </div>

              
        </div>
</section>

<!--More Producst-->

    <!--Footer-->
    <?php
      include "Footer.php";
    ?>
   </footer>


</body>
</html>