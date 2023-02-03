<?php
$rs=$con->query("SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]' ");
$num=0;
$num=$rs->num_rows;

?>

 <header class="header">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left" style="margin-left:-15px;margin-top:-10px;">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
<?php
 $cc=$con->query("SELECT * FROM `logo` ORDER BY `l_id` DESC");
 $vl=$cc->fetch_assoc();
 ?>
                        <a href="index.php" class="logo">
                            <img src="admin/ibo_panel/production/images/<?php echo $vl[logo]?>" alt="Molla Logo" width="105" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="category.php" >Category</a>
                                </li>
                                <li>
                                    <a href="product.php" >Product</a>
                                </li>
                                <li>
                                    <a href="cart.php" >Cart</a>
                                </li>
                                <li>
                                    <a href="order.php" >Order</a>
                                </li>
                                <li>
                                    <a href="contact.php" >Contact</a>
                                </li>
                                <?php
                    if(isset($_SESSION[id]) AND $_SESSION[id]!=""){
                    ?>
                        <li><a href="logout.php" >Logout</a></li>
                    <?php
                    }else{
                    ?>
                    <li><a href="login.php" >Login</a></li>
                    <?php
                    }
                    ?>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right" style="margin-top:-10px;">
                        <div class="dropdown cart-dropdown">
                            <a href="cart.php"  class="dropdown-toggle">
                                <i class="icon-shopping-cart"></i>
                                <!--<span class="cart-count">                </span>-->
                            </a>
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div>
        </header>
        
        
        
        
<!--Bottom Header -->
<style>
@media screen and (max-width: 700px){
  .navbar1 {
    word-spacing:-1px;
    display:flex;
  }
  .navbar1 {
  overflow: hidden;
  /*background-color: #04AA6D;*/
  background-color:white;
  position: fixed;
  bottom: 0;
  width: 100%;
  z-index:10;
}

.navbar1 a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 32px;
  text-decoration: none;
  font-size: 10px;
  
}

.navbar1 a:hover {
  background: white;
  color: black;
}
}

@media screen and (min-width: 700px){
    .navbar1 a{
        display:none;
    }
}
</style>
<div class="navbar1 " >
  <a href="index.php" style="color:white;"><img src="icons/home.png
" style="height:35px;"><small style="color:black;">Home</small></a>
 
  <a href="order.php" style="color:white;"><img src="icons/checkout.png
" style="height:35px;"><small style="color:black;">Order</small></a>

 <a style="color:white;"><img src="icons/trophy.png
" style="height:35px;"><small style="color:black;">Reward</small></a>
  <a style="color:white;"><img src="icons/credit-card.png
" style="height:35px;"><small style="color:black;">Credit</small></a>

             </div>
<!--Bottom Header -->


        
        
        
