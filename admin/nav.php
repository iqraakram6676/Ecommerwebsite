


<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><?php echo $_SESSION['Admin']; ?></span>
</div>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION['Admin']; ?></strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="productmanagement.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-diamond fa-fw"></i>  Product Management
    </a>

    <a href="usermanagement.php" class="w3-bar-item w3-button w3-padding w3-blue">
      <i class="fa fa-users fa-fw"></i>  Users Management
    </a>

    <a href="inquiery.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-history fa-fw"></i>  Inquiry Management
    </a>

    <a href="logout.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-cog fa-fw"></i>  Logout
    </a><br><br>
  </div>
</nav>