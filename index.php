<?php
session_start();
if(isset($_SESSION[id]) AND $_SESSION[id]!=""){
    include('config.php');
}else{
    include('database_connect.php'); 
}

//Addvertisement Banner//
$as=$con->query("SELECT * FROM `advertisement` ORDER BY `ad_id` DESC");
$adv=$as->fetch_assoc();
//Addvertisement Banner//

?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <meta name="keywords" content="HTML5 Template">
    <!--<meta name="description" content="Molla - Bootstrap eCommerce Template">-->
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
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    
    <link rel="stylesheet" href="assets/css/style.css">
   <style>
        @media screen and (max-width: 700px){
            .mob-img{
                height:130px;
                width:100%;
                border-radius:10px;
            }
            
            .shgg{
                /*display:none;*/
                margin-top:-125px;
                
                
            } 
            .hgh{
                margin-top:-125px;
            }
        
        .search {
          width: 100%;
          position: relative;
          display: flex;
        }
        
        .searchTerm {
          width: 89%;
          border: 2px solid #00B4CC;
          border-right: none;
          padding: 5px;
          height: 40px;
          border-radius: 2px 0 0 5px;
          outline: none;
          color: #9DBFAF;
        }
        .searchButton {
          width: 40px;
          height: 40px;
          
          border: 1px solid #00B4CC;
          background: #00B4CC;
          text-align: center;
          color: #fff;
          border-radius: 0 5px 5px 0;
          cursor: pointer;
          font-size: 20px;
        }

        }
        @media screen and (min-width: 700px){
            .mob-img{
                height:200px;
                border-radius:10px;
            }
            .fgg{
                margin-top:-120px;
                
            }
            .sdd{
                height:350px;
            }
            #search{
                display:none;
            } 
            
        }
       

    </style>
</head>

<body>
    <div class="page-wrapper">
       <?php
       include('include/header.php');
       ?>

        <main class="main">
            <!--Banner and Category-->
            <div>
                <!--Search-->
            <div class="intro-section  pt-5 pb-6" style="margin-top:-30px;"> 
                    <form action="product.php" method="post">
                    <div class="container search" style="margin-top:-30px;" id="search">
                      <input type="text" class="searchTerm" placeholder="&nbsp;What are you looking for?" name="searchpro" required>
                        <button type="submit" class="searchButton" name="btn">
                            <i class="icon-search"></i>
                        </button>
                    
                    <!--</div>-->
                    </div>
                    </form>
                </div>
                <!--Search-->
                
                <!--Category-->
                <div class="container" style="margin-top:-50px;">
                    <div class="row">
                        <div class="owl-carousel owl-simple" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": true,
                            "autoplay":true,
                            "autoplayTimeout":1000,
                            "autoplayHoverPause":true,
                            "responsive": {
                                "0": {                                    "items":6
                                },
                                "420": {
                                    "items":6
                                },
                                "600": {
                                    "items":6
                                },
                                "900": {
                                    "items":7
                                },
                                "1024": {
                                    "items":8
                                }
                            }
                        }' style="margin-bottom:10px;">
            <?php
            $ms=$con->query("SELECT * FROM `category` ");
            while($msp=$ms->fetch_assoc()){
                
            ?>
                        <a href="productByCategory.php?id=<?php echo $msp[cat_id]?>" class="img-circle" >
                            <img src="admin/ibo_panel/production/images/<?php echo $msp[cat_image]?>" alt="Brand Name" style="height:40px;width:55px;border-radius:20px;">
                            <?php echo "<small><center><br>".$msp[cat_name]."</center></small>"?>
                        </a>
            <?php
            }
            ?> 
                 </div>
                </div>
                </div>
                <!--Category-->
                
                <!--Banner-->
                <div class="container">
                    <div class="row" style="background-color:white;">
                        <div class="col-lg-12 " style="height:360px">
                            <div class="intro-slider-container slider-container-ratio slider-container-1 mb-lg-0 sdd" style="height:150px">
                                <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{
                                         "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": true,
                            "autoplay":true,
                            "autoplayTimeout":4000,
                            "autoplayHoverPause":true,
                                        "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                        
                                
                                    }'>
<?php
$es=$con->query('SELECT * FROM `banner`');
while($val=$es->fetch_assoc()){
?>
                                    <div class="intro-slide sdd" style="height:230px">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="admin/ibo_panel/production/images/<?php echo $val[image1]?>">
                                                <img src="admin/ibo_panel/production/images/<?php echo $val[image1]?>" alt="Image Desc"style="height:230px;width:100%;border-radius:10px;" class="sdd">
                                        </picture>
                                        </figure><!-- End .slide-image -->
                                    </div><!-- End .intro-slide -->
<?php
}
?>
                                    
                                </div><!-- End .intro-slider owl-carousel owl-simple -->
                                
                                <span class="slider-loader"></span><!-- End .slider-loader -->
                            </div><!-- End .intro-slider-container -->
                        </div>
                        <div class="col-lg-4  col-4 col-md-4 fgg hgh" style="border-radius:20px;" >
                            <div class="intro-banners">
                                <div class="row row-sm" style="background-color:white;">
                                    <div class="col-md-6 col-lg-12 " >
                                        <div class="banner banner-display" >
                                            <a href="product.php" style="height:150px;">
                                                <img src="admin/ibo_panel/production/advertisement/<?php echo $adv[adv1]?>" alt="" style="height:150px;" >
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                    <!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div>
                        <div class="col-lg-4  col-4 col-md-4 fgg hgh " >
                            <div class="intro-banners" >
                                <div class="row row-sm" >
                                    <div class="col-md-6 col-lg-12 " >
                                        <div class="banner banner-display" style="border-radius:20px 20px 0px 0px;">
                                            <a href="product.php" style="height:150px;">
                                                <img src="admin/ibo_panel/production/advertisement/<?php echo $adv[adv2]?>" alt="" style="border-radius:20px 20px 0px 0px;height:150px;">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div>
                        <div class="col-lg-4  col-4  col-md-4 fgg hgh ">
                            <div class="intro-banners">
                                <div class="row row-sm" style="background-color:white;">
                                    <div class="col-md-6 col-lg-12 ">
                                        <div class="banner banner-display" style="border-radius:20px 20px 0px 0px;">
                                            <a href="product.php" style="height:150px;">
                                                <img src="admin/ibo_panel/production/advertisement/<?php echo $adv[adv3]?>" alt="" style="height:150px;border-radius:20px 20px 0px 0px;" >
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div>
                        <div class="col-lg-12  col-12  col-md-12 ">
                            <div class="intro-banners">
                                <div class="row row-sm" style="background-color:white;">
                                    <div class="col-md-6 col-lg-12 ">
                                        <div class="banner banner-display" style="border-radius:20px 20px 0px 0px;">
                                            <a href="product.php" >
                                                <img src="admin/ibo_panel/production/advertisement/<?php echo $adv[adv4]?>" alt="" style="height:150px;border-radius:20px 20px 0px 0px;" >
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div>
                        
                    </div><!-- End .row -->
                </div>
                <!--Banner-->
            </div>
            <!--Banner and Category-->
            
            <!--Latest Products-->
            <div class="container " >
                <div class="heading heading-center ">
                    <h4 class="text-left">Latest Products</h4>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": true,
                            "autoplay":true,
                            "autoplayTimeout":5000,
                            "autoplayHoverPause":true,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        <?php
                        $ms=$con->query("SELECT * FROM `product` WHERE `p_type`='4'");
                        while($msp=$ms->fetch_assoc()){
                        ?>
                            <div class="product product-7 text-center" >
                                <figure class="product-media" style="border-radius:10px;">
                                    <a href="single.php?id=<?php echo $msp[p_id]?>">
                                        <img src="admin/ibo_panel/production/images/<?php echo $msp[image1]?>" alt="Product image" class="product-image mob-img" >
                                    </a>
                                    <div class="product-action">
                                    <a href="process_add_to_cart.php?id=<?php echo $msp[p_id]?>" class="btn-product btn-cart"><span>Add to cart</span></a>
                                </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="single.php?id=<?php echo $msp[p_id]?>"><?php echo $msp[name]?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?php echo "<small><del>₹".$msp[mrp]."</small></del>"?>&nbsp;
                                        <?php echo "₹".$msp[dp]?>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                
                            </div><!-- End .product -->
                        <?php
                        }
                        ?>
                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    
                </div><!-- End .tab-content -->
            </div>
            <!--Latest Products-->
            
            <!--Most Selling Products-->
            <div class="container">
                <div class="heading heading-center ">
                    <h4 class="text-left">Most Selling Products</h4>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": true,
                            "autoplay":true,
                            "autoplayTimeout":5000,
                            "autoplayHoverPause":true,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        <?php
                        $ms=$con->query("SELECT * FROM `product` WHERE `p_type`='2'");
                        while($msp=$ms->fetch_assoc()){
                        ?>
                            <div class="product product-7 text-center">
                                <figure class="product-media" style="border-radius:10px;">
                                    <a href="single.php?id=<?php echo $msp[p_id]?>">
                                        <img src="admin/ibo_panel/production/images/<?php echo $msp[image1]?>" alt="Product image" class="product-image mob-img" >
                                    </a>
                                    
                                    <div class="product-action">
                                    <a href="process_add_to_cart.php?id=<?php echo $msp[p_id]?>" class="btn-product btn-cart"><span>Add to cart</span></a>
                                </div><!-- End .product-action -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="single.php?id=<?php echo $msp[p_id]?>"><?php echo $msp[name]?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?php echo "<small><del>₹".$msp[mrp]."</small></del>"?>&nbsp;
                                        <?php echo "₹".$msp[dp]?>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                
                            </div><!-- End .product -->
                        <?php
                        }
                        ?>
                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    
                </div><!-- End .tab-content -->
            </div>
            <!--Most Selling Products-->
            
            <!--Advertisement-->
            <div class="intro-section bg-lighter pt-5 pb-6" style="margin-top:-50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6" style="margin-bottom:10px;">
                            <div class="intro-banners">
                                <div class="row row-sm">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display mb-0">
                                            <a href="product.php">
                                                <img src="admin/ibo_panel/production/advertisement/<?php echo $adv[adv5]?>" alt="" style="height:200px;">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6">
                            <div class="intro-banners">
                                <div class="row row-sm">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display mb-0">
                                            <a href="product.php">
                                                <img src="admin/ibo_panel/production/advertisement/<?php echo $adv[adv6]?>" alt="" style="height:200px;" >
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div>
                    </div>
                </div><!-- End .container -->
            </div>
            <!--Advertisement-->
            
            <!--Top Products-->
            <div class="container">
                <div class="heading heading-center mb-3">
                   <h4 class="text-left">Top Products</h4>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": true,
                            "autoplay":true,
                            "autoplayTimeout":1000,
                            "autoplayHoverPause":true,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        <?php
                        $ms=$con->query("SELECT * FROM `product` WHERE `p_type`='3'");
                        while($msp=$ms->fetch_assoc()){
                        ?>
                            <div class="product product-7 text-center">
                                <figure class="product-media" style="border-radius:10px;">
                                    <a href="single.php?id=<?php echo $msp[p_id]?>">
                                        <img src="admin/ibo_panel/production/images/<?php echo $msp[image1]?>" alt="Product image" class="product-image mob-img" >
                                    </a>
                                    
                                    <div class="product-action">
                                    <a href="process_add_to_cart.php?id=<?php echo $msp[p_id]?>" class="btn-product btn-cart"><span>Add to cart</span></a>
                                </div><!-- End .product-action -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="single.php?id=<?php echo $msp[p_id]?>"><?php echo $msp[name]?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?php echo "<small><del>₹".$msp[mrp]."</small></del>"?>&nbsp;
                                        <?php echo "₹".$msp[dp]?>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                
                            </div><!-- End .product -->
                        <?php
                        }
                        ?>
                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    
                </div><!-- End .tab-content -->
            </div>
            <!--Top Products-->
            
            <!--Shop By Category-->
            <div class="container">
                <div class="heading heading-center mb-3">
                    <h4 class="text-left">Shop By Category</h4>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": true,
                            "autoplay":true,
                            "autoplayTimeout":1000,
                            "autoplayHoverPause":true,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        <?php
                        $ms=$con->query("SELECT * FROM `category` ");
                        while($msp=$ms->fetch_assoc()){
                        ?>
                            <div class="product product-11 text-center">
                                <figure class="product-media" style="border-radius:10px;">
                                    <a href="productByCategory.php?id=<?php echo $msp[cat_id]?>">
                                        <img src="admin/ibo_panel/production/images/<?php echo $msp[cat_image]?>" alt="Product image" class="product-image mob-img" >
                                    </a>
                                    <!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="productByCategory.php?id=<?php echo $msp[cat_id]?>"><?php echo $msp[cat_name]?></a></h3><!-- End .product-title -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        <?php
                        }
                        ?>
                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    
                </div><!-- End .tab-content -->
            </div>
            <!--Shop By Category-->
            
            <!--Advertisement-->
            <div class="intro-section bg-lighter pt-5 pb-6" style="margin-top:-50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6" style="margin-bottom:10px;">
                            <div class="intro-banners">
                                <div class="row row-sm">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display mb-0">
                                            <a href="product.php">
                                                <img src="admin/ibo_panel/production/advertisement/<?php echo $adv[adv7]?>" alt="" style="height:200px;">
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6">
                            <div class="intro-banners">
                                <div class="row row-sm">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display mb-0">
                                            <a href="product.php">
                                                <img src="admin/ibo_panel/production/advertisement/<?php echo $adv[adv8]?>" alt="" style="height:200px;" >
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div>
                    </div>
                </div><!-- End .container -->
            </div>
            <!--Advertisement-->
            
            <!--Television-->
            <div class="container">
                <div class="heading heading-center mb-3">
                    <h4 class="text-left">Television</h4>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                               "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": true,
                            "autoplay":true,
                            "autoplayTimeout":1000,
                            "autoplayHoverPause":true,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        <?php
                        $ms=$con->query("SELECT * FROM `product` WHERE `cat_id`='n'");
                        while($msp=$ms->fetch_assoc()){
                        ?>
                            <div class="product product-7 text-center">
                                <figure class="product-media" style="border-radius:10px;">
                                    <a href="single.php?id=<?php echo $msp[p_id]?>">
                                        <img src="admin/ibo_panel/production/images/<?php echo $msp[image1]?>" alt="Product image" class="product-image mob-img" >
                                    </a>
                                    
                                    <div class="product-action">
                                    <a href="process_add_to_cart.php?id=<?php echo $msp[p_id]?>" class="btn-product btn-cart"><span>Add to cart</span></a>
                                </div><!-- End .product-action -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="single.php?id=<?php echo $msp[p_id]?>"><?php echo $msp[name]?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?php echo "<small><del>₹".$msp[mrp]."</small></del>"?>&nbsp;
                                        <?php echo "₹".$msp[dp]?>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                
                            </div><!-- End .product -->
                        <?php
                        }
                        ?>
                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    
                </div><!-- End .tab-content -->
            </div>
            <!--Television-->
            
            <!--Mobile-->
            <div class="container">
                <div class="heading heading-center mb-3">
                    <h4 class="text-left">Mobile</h4>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                            "dots": false,
                            "margin": 30,
                            "loop": true,
                            "autoplay":true,
                            "autoplayTimeout":5000,
                            "autoplayHoverPause":true,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                        <?php
                        $ms=$con->query("SELECT * FROM `product` WHERE `cat_id`='r'");
                        while($msp=$ms->fetch_assoc()){
                        ?>
                            <div class="product product-7 text-center">
                                <figure class="product-media" style="border-radius:10px;">
                                    <a href="single.php?id=<?php echo $msp[p_id]?>">
                                        <img src="admin/ibo_panel/production/images/<?php echo $msp[image1]?>" alt="Product image" class="product-image mob-img" >
                                    </a>
                                    
                                    <div class="product-action">
                                    <a href="process_add_to_cart.php?id=<?php echo $msp[p_id]?>" class="btn-product btn-cart"><span>Add to cart</span></a>
                                </div><!-- End .product-action -->

                                    
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="single.php?id=<?php echo $msp[p_id]?>"><?php echo $msp[name]?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?php echo "<small><del>₹".$msp[mrp]."</small></del>"?>&nbsp;
                                        <?php echo "₹".$msp[dp]?>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                
                            </div><!-- End .product -->
                        <?php
                        }
                        ?>
                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    
                </div><!-- End .tab-content -->
            </div>
            <!--Mobile-->

            
        </main>
        <!-- End .main -->
        
        <!--Fotter-->
        <?php
        include('include/footer.php');
        ?>
        <!--Fotter-->
    </div>
    <!-- End .page-wrapper -->
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
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    
</body>
</html>