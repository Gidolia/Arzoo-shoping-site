<?php
session_start();
if(isset($_SESSION[id]) AND $_SESSION[id]!=""){
    include('config.php');
}else{
    include('database_connect.php'); 
}

if(isset($_POST['btn'])){
    $srch=$_POST[searchpro];
    $c=$con->query("SELECT * FROM `product` WHERE `name` LIKE '%$srch%' ");
}else{
    $c=$con->query("SELECT * FROM `product` WHERE `p_type`='4' LIMIT 0,4 ");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Products</title>
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
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body>
    <div class="page-wrapper">
       <?php
       include('include/header.php');
       ?>

        <main class="main">
        	<!--<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">-->
        	<!--	<div class="container">-->
        	<!--		<h1 class="page-title"><span>All Products</span></h1>-->
        	<!--	</div>-->
        	<!--</div>-->
        	<!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">
                		

                            <div class="products mb-3">
                                <div class="row justify-content-center">
               <?php
				
				while($ct=$c->fetch_assoc()){
				?>
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-new">New</span>
                                                <a href="single.php?id=<?php echo $ct[p_id]?>">
                                                    <img src="admin/ibo_panel/production/images/<?php echo $ct[image1]?>" alt="Product image" class="product-image" style="height:200px;">
                                                </a>

                                                <div class="product-action-vertical">
                                                                                
                                              
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="process_add_to_cart.php?id=<?php echo $ct[p_id]?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                
                                                <h3 class="product-title"><a href="single.php?id=<?php echo $ct[p_id]?>"><?php echo $ct[name]?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?php echo "<small><del>₹".$ct[mrp]."</small></del>"?>&nbsp;
                                        <?php echo "₹".$ct[dp]?>
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div>
                <?php
				}
                ?>
                                </div>
                            </div>
                            
                            <div class="products mb-3">
                                <div class="row justify-content-center">
               <?php
				$c=$con->query("SELECT * FROM `product` ");
				while($ct=$c->fetch_assoc()){
				?>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                              
                                                <a href="single.php?id=<?php echo $ct[p_id]?>">
                                                    <img src="admin/ibo_panel/production/images/<?php echo $ct[image1]?>" alt="Product image" class="product-image" style="height:200px;">
                                                </a>

                                                <div class="product-action-vertical">
                                          
                                              
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="process_add_to_cart.php?id=<?php echo $ct[p_id]?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                
                                                <h3 class="product-title"><a href="single.php?id=<?php echo $ct[p_id]?>"><?php echo $ct[name]?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                     <?php echo "<small><del>₹".$ct[mrp]."</small></del>"?>&nbsp;
                                        <?php echo "₹".$ct[dp]?>
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div>
                <?php
				}
                ?>
                                    
                                </div>
                            </div>


                		
                		</div><!-- End .col-lg-9 -->
                		<aside class="col-lg-3 order-lg-first">
                			<div class="sidebar sidebar-shop">
                				<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
									        Category
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-1">
										<div class="widget-body">
											<div class="filter-items filter-items-count">
						<?php
						$s=$con->query("SELECT * FROM `category`");
						while($ct=$s->fetch_assoc()){
						?>				    
						<div class="filter-item">
													<div class="custom-control ">
											<label class="custom-control-label" for="cat-1"><a href="productByCategory.php?id=<?php echo $ct[cat_id]?>"><?php echo $ct[cat_name]?></a></label>
													</div><!-- End .custom-checkbox -->
													
												</div>
						<?php
						}
						?>

																				</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->
                			</div><!-- End .sidebar sidebar-shop -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
            
            <!--Free shipping Boxes-->
            <div class="container">
                <hr>
            	<div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-2 col-4">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rocket"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                                <!--<p>Free shipping for orders over $50</p>-->
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-2 col-4">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                                <!--<p>Free 100% money back guarantee</p>-->
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-2 col-4">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-life-ring"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                                <!--<p>Alway online feedback 24/7</p>-->
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- End .row -->

                <div class="mb-2"></div><!-- End .mb-2 -->
            </div>
            <!--Free shipping Boxes-->
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
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/category-4cols.html  22 Nov 2019 10:02:55 GMT -->
</html>