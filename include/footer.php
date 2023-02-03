<footer class="footer footer-dark" style="height:auto">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
<?php
 $cc=$con->query("SELECT * FROM `logo` ORDER BY `l_id` DESC");
 $vl=$cc->fetch_assoc();
 ?>	            			    
	            				<img src="admin/ibo_panel/production/images/<?php echo $vl[logo]?>" class="footer-logo" alt="Footer Logo" width="105" height="25" >
	            				<p></p>

	            				<!--<div class="social-icons">-->
	            				<!--	<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>-->
	            				<!--	<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>-->
	            				<!--	<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>-->
	            				<!--	<a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>-->
	            				<!--	<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>-->
	            				<!--</div>-->
	            				<!-- End .soial-icons -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<!--<div class="col-sm-6 col-lg-3">-->
	            		<!--	<div class="widget">-->
	            		<!--		<h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

	            		<!--		<ul class="widget-list">-->
	            		<!--			<li><a href="index.php" style="color:white;">Home</a></li>-->
	            		<!--			<li><a href="category.php" style="color:white;">Category</a></li>-->
	            		<!--			<li><a href="product.php" style="color:white;">Product</a></li>-->
	            		<!--			<li><a href="order.php" style="color:white;">Order</a></li>-->
	            		<!--			<li><a href="cart.php" style="color:white;">Cart</a></li>-->
	            		<!--			<li><a href="login.php" style="color:white;">Log in</a></li>-->
	            		<!--		</ul><!-- End .widget-list -->
	            		<!--	</div><!-- End .widget -->
	            		<!--</div>-->
	            		<!-- End .col-sm-6 col-lg-3 -->

	            	<!--	<div class="col-sm-6 col-lg-3">-->
	            	<!--		<div class="widget">-->
	            	<!--			<h3 class="widget-title">Categories</h3>-->
	            				

	            	<!--			<ul class="widget-list">-->
	            	<?php
                 # $cd=$con->query("SELECT * FROM `category`");
                  #while($vl=$cd->fetch_assoc()){
                 ?>
	            				<li><a href="productByCategory.php?id=<?php echo $vl[cat_id]?>" style="color:white;"><?php #echo $vl[cat_name]?></a></li>
	            					
	            <?php
                  #  }
                  ?>			</ul><!-- End .widget-list -->
	            	<!--		</div><!-- End .widget -->
	            	<!--	</div>-->
	            		<!-- End .col-sm-6 col-lg-3 -->

	            		
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <!--<div class="footer-bottom">-->
	        <!--	<div class="container">-->
	        <!--		<p class="footer-copyright">Copyright © 2022.All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<!--<figure class="footer-payments">-->
	        		<!--	<img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">-->
	        		<!--</figure>-->
	        		<!-- End .footer-payments -->
	        <!--	</div><!-- End .container -->
	        <!--</div>-->
	        <!-- End .footer-bottom -->
        </footer>
        
        
        
        
        
        
        