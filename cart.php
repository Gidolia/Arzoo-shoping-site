<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cart</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <?php
        include('include/header.php');
        ?>

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title"><span>Shopping Cart</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9 " >
	               <table class="table table-cart table-mobile table-responsive">
                    <thead class="text-dark">
                        <tr >
                            <th>Products</th>
                            <th >Unit Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
<?php
$qry="SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]'";
$qr=$con->query($qry);
// if($qr->num_rows >0){
$aau="0";
while($val=$qr->fetch_assoc()){
?>
<form action="update_cart.php" method="post">
<input type="hidden" value="<?php echo $val[ac_id]?>" name="id">
<input type="hidden" value="<?php echo $val[p_id]?>" name="pid">
<input type="hidden" value="<?php echo $val[p_mrp]?>" name="dp" >
<input type="hidden" value="<?php echo $val[p_dp]?>" name="d" class="iprice">
                        <tr >
                            
                            <td class="product-col">
								<h4>
								<?php echo "<small>".$val[p_name]."</small>";?>
								</h4>
							</td>
                            <td class="price-col"><?php echo "<center>₹".$val[p_dp]."</center>";?></td>
                            <td class="quantity-col">
                                <div class="cart-product-quantity" >
                                    <input min="1" type="number" id="quantity" name="qty" value="<?php echo $val[p_qty]?>" class="entry value form-control input-small iquantity" onchange="subTotal();"  >	
									 
                                </div>
                            </td>
                           <td class="quantity-col" style="color:red;">₹ <span class="itotal" ></span></td>
                            
                            <td class="quantity-col">
                                <!--<button class="btn btn-sm btn-primary" type="submit" name="remove"><i class="icon-refresh"></i></button>-->
                                <button class="btn btn-outline-primary-2 " type="submit" name="upd">Update</button>
                                <button class="btn btn-outline-primary-2 mt-2" type="submit" name="remove">Remove</button>
                            </td>
                        </tr>
</form>
<?php
}
?>
                        
                    </tbody>
                </table>
	                			
	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                			    <div class="d-flex justify-content-between mt-2" style="margin-bottom:50px;">
                            <h5 class="font-weight-bold">Total</h5>
                            <span style="float:right;color:red;">₹<span class="totalfinal"  style="color:red;" id="gtotal" ></span>
                        </div>
	                			    <?php if($num>0){?>
	                				<a href="place_order.php" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                				<?php }?>
	                				<br>
	                				<br>
	                				
	                					<a href="product.php" class="btn btn-outline-primary-2 btn-order btn-block"><span>CONTINUE SHOPPING</span></a>
	                			</div><!-- End .summary -->

		            		
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

         <?php
   include('include/footer.php');
   ?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

   <?php
   include('include/mobileheader.php');
   ?>

    

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <!-- Main JS File -->
    <script src="js/main.js"></script>
    <script>
    var gt=0;
    var ht=0;
    var iprice=document.getElementsByClassName("iprice");
    var iquantity=document.getElementsByClassName("iquantity");
    var itotal=document.getElementsByClassName("itotal");
    var gtotal=document.getElementById("gtotal");
   //var htotal=document.getElementsByClassName("iprice");
    
    function subTotal(){
        var gt=0;
        //var ht=0;
        for(i=0;i<iprice.length;i++){
             itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
             //itotal[i].innerText=(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
            //ht=ht+(iprice[i].value);
        }
        gtotal.innerText=gt;
        //htotal.innerText=ht;
    }
    subTotal();
</script>
</body>


<!-- molla/cart.html  22 Nov 2019 09:55:06 GMT -->
</html>