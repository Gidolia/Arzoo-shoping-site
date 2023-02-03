<div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="category.php">Category</a>
                        
                    </li>
                    <li>
                        <a href="product.php" class="sf-with-ul">Product</a>
                        
                    </li>
                    <li>
                        <a href="cart.php" >Cart</a>
                    </li>
                    <li>
                        <a href="order.php" >Order</a>
                    </li>
                    <!--<li>-->
                    <!--    <a href="blog.html">Blog</a>-->

                    <!--    <ul>-->
                    <!--        <li><a href="blog.html">Classic</a></li>-->
                    <!--        <li><a href="blog-listing.html">Listing</a></li>-->
                    <!--        <li>-->
                    <!--            <a href="#">Grid</a>-->
                    <!--            <ul>-->
                    <!--                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>-->
                    <!--                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>-->
                    <!--                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>-->
                    <!--                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>-->
                    <!--            </ul>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <a href="#">Masonry</a>-->
                    <!--            <ul>-->
                    <!--                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>-->
                    <!--                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>-->
                    <!--                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>-->
                    <!--                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>-->
                    <!--            </ul>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <a href="#">Mask</a>-->
                    <!--            <ul>-->
                    <!--                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>-->
                    <!--                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>-->
                    <!--            </ul>-->
                    <!--        </li>-->
                    <!--        <li>-->
                    <!--            <a href="#">Single Post</a>-->
                    <!--            <ul>-->
                    <!--                <li><a href="single.html">Default with sidebar</a></li>-->
                    <!--                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>-->
                    <!--                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>-->
                    <!--            </ul>-->
                    <!--        </li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                    <li><a href="contact.php" >Contact</a></li>
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
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div>