<?php
include('config.php');
 $qry="SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]'";
    $res=$con->query($qry);
    $numr=$res->num_rows;
    $total_qty=0;
    $total_price1=0;
    $total_mrp=0;
    $total_dp=0;
    while($val=$res->fetch_assoc()){
        //total quantity of products
        $total_qty=$total_qty+$val[p_qty];
        $total_price1=$total_price1+$val[p_total];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout</title>
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
        			<h1 class="page-title"><span>Checkout</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<form action="process_checkout.php" method="post">
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Name *</label>
		                						<input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" name="name" value="<?php echo $d_detail[name]?>"/>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Email *</label>
		                						<input type="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" name="email" value="<?php echo $d_detail[email]?>"/>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Mobile</label>
	            						<<input type="text" class="form-control" id="email" placeholder="Your Mobile"
                                required="required" name="mobile" value="<?php echo $d_detail[mobile]?>"/>

	            						<label>Gender *</label>
	            						 <input type="text" class="form-control" id="email" placeholder="Your gender"
                                required="required" name="gender" value="<?php echo $d_detail[gender]?>"/>

	            					

	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Address*</label>
		                						<input type="text" class="form-control" id="email" placeholder="Your Address"
                                required="required" name="address" value="<?php echo $d_detail[address]?>"/>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
<input type="hidden" value="<?php echo $total_price1;?>" name="price">
		                				
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                			<h3 class="summary-title">Your Order</h3>
		                			<table class="table table-summary">
		                			<thead>
		                			<tr>
		                			    <th>Name</th>
		                			    <th>Price</th>
		                				<th><center>Qty</center></th>
		                				<th>Total</th>
		                			</tr>
		                			</thead>
		                			<tbody>
		              <?php
		              $hg=$con->query("SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]'");
		              while($hgg=$hg->fetch_assoc()){
		              ?>
		                			<tr>
		                			<td><?php echo $hgg[p_name]?></td>
		                			<td><?php echo "<p style='color:green;'>₹".$hgg[p_dp]."</p>"?></td>
		                			<td><?php echo "<center>".$hgg[p_qty]."</center>"?></td>
		                			<td><?php echo "₹".$hgg[p_total]?></td>
		                			</tr>
		               <?php
		              }
		               ?>
		                					</tbody>
		                					<tfoot>
		                					    <td>Total Price :</td>
		                					    <td></td>
		                					    <td></td>
		                					    <td><?php echo "<p style='color:red;float:right;'>₹".$total_price1."</p>";?></td>
		                					</tfoot>
		                				</table>

		                				

<button class="btn btn-primary py-2 px-4" type="submit" name="btn_reg">Confirm Checkout</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
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
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>