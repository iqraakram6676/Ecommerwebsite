<?php
//session_start();
include "admin/conn.php";
include 'admin/function.php';

$sql = "SELECT * FROM products WHERE status = 1";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/Productsstyle.css">
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  
  <title>Product Detail</title>
</head>
<body>
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
          <h1>Products</h1>
        </div>
      </div>
    </div>
  </section>
  <!--Main Banner Ends-->

   <!--Products-->
       <section>
         <div class="container">
          <?php
      if (mysqli_num_rows($result) > 0) {
      ?>
           <div class="row">
            <?php
            while($row = mysqli_fetch_assoc($result)) {
            ?>
             <div class="col-lg-4">
               <div class="Product">
                 <img src="http://localhost:8080/Project/<?=$row["imgpath"].$row["img"];?>">
                </div>
                <div class="Product_txt">
                  <p><?php echo $row["imgname"];?></p>
                  <ul>
                    <li><p><?php echo price($row["price"]);?></p></li>
                    <li><a href="productdetails.php?id=<?=$row["id"]?>">Shop Now</a></li>
                  </ul>
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



   <!--Prev Next Buttons-->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="Buttons">
                <ul>
                  <li><a href="Products.html"><button id="Prev_btn">Prev</button></a></li>
                  <li><a href="Products.html"><button>1</button></a></li>
                  <li><a href="Products1.html"><button>2</button></a></li>
                  <li><a href="Products2.html"><button>3</button></a></li>
                  <li><a href="Products.html"><button id="next_btn">Next</button></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
   <!--Prev Next Buttons Ends-->

   <!--Footer-->
      <?php
        include "Footer.php";
      ?>
  <!--Footer Ends-->

  

</body>
</html>