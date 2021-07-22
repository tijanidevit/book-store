<?php 
    session_start();
    include_once 'php/connect.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pustok - Book Store HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    <div class="site-wrapper" id="top">
        <?php include "includes/header/main.php"; ?>
        <!--=================================
        Hero Area
    ===================================== -->
        <section class="hero-area hero-slider-3">
            <div class="sb-slick-slider" data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 1,
                                                        "dots":true
                                                        }'>
                <div class="single-slide bg-image  bg-overlay--dark" data-bg="image/bg-images/home-3-slider-1.jpg">
                    <div class="container">
                        <div class="home-content text-center">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <h1>Beautifully Designed</h1>
                                    <h2>Cover up front of book and
                                        <br>leave summary</h2>
                                    <a href="shop-grid.html" class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide bg-image  bg-overlay--dark" data-bg="image/bg-images/home-3-slider-2.jpg">
                    <div class="container">
                        <div class="home-content pl--30">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h1>I Love This Idea!</h1>
                                    <h2>Cover up front of book and
                                        <br>leave summary</h2>
                                    <a href="shop-grid.html" class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Features Section
    ===================================== -->
        <br><br>
        <section class="mb--30 space-dt--30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="text">
                                <h5>Free Shipping Item</h5>
                                <p> Orders over $500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Money Back Guarantee</h5>
                                <p>100% money back</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Cash On Delivery</h5>
                                <p>Lorem ipsum dolor amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Help & Support</h5>
                                <p>Call us : + 0123.4567.89</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
    ARTS & PHOTOGRAPHY BOOKS
===================================== -->
        <section class="section-margin">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <br>
                    <h2>Available Books</h2>
                </div>
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 5,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>

                    <?php 
                        $fetch_book = $conn->query("SELECT * FROM book ORDER by book_id desc LIMIT 6 ");
                        while ($books = $fetch_book->fetch_assoc()) {
                    ?>
                        <div class="single-slide">
                            <div class="product-card">
                                <div class="product-header">
                                    <a href="#" class="author">
                                        <?php echo $books['authors'] ?>
                                    </a>
                                    <h3><a href="book-details?id=<?php echo $books['book_id'] ?>"><?php echo $books['name'] ?> </a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="images/<?php echo $books['cover'] ?>" alt="">
                                        <div class="hover-contents">
                                            <a href="book-details?id=<?php echo $books['book_id'] ?>" class="hover-image">
                                                <img src="images/<?php echo $books['cover'] ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price">&#8358;<?php echo $books['price'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php include "includes/footer/main.php"; ?>
</body>

</html>