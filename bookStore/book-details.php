<?php 
session_start();
include_once 'php/connect.php';

if (!isset($_GET["id"])) {
    header("location: store");
    exit();
}
$id = $_GET["id"];
$fetch_book = $conn->query("SELECT * FROM book JOIN department ON department.department_id = book.dept_id WHERE book_id = '$id' ");
$book = $fetch_book->fetch_assoc();
$dept_id = $book['dept_id'];

$fetch_related_books = $conn->query("SELECT * FROM book JOIN department ON department.department_id = book.dept_id WHERE book_id <> '$id' AND dept_id = '$dept_id' LIMIT 16");
//$related_books = $fetch_related_books->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poly Consult - <?php echo $book['name'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>


    <div class="site-wrapper" id="top">
        <?php include "includes/header/main.php"; ?>

        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $book['name'] ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <main class="inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row  mb--60">
                    <div class="col-lg-5 mb--30">
                        <!-- Product Details Slider Big Image-->
                        <div>
                            <div class="single-slide">
                                <img src="images/<?php echo $book['cover'] ?>" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-details-info pl-lg--30 ">
                            <p class="tag-block">Authors: <a href="#"><?php echo $book['authors'] ?></a></p>
                            <h3 class="product-title"><?php echo $book['name'] ?></h3>
                            <ul class="list-unstyled">
                                <li>Department: <a href="#" class="list-value font-weight-bold"> <?php echo $book['dept'] ?></a></li>
                                <li>Product Code: <span class="list-value"> PCB-<?php echo $book['book_id'] ?></span></li>
                                <li>Availability: 
                                    <?php if ($book['quantity'] > 0 ): ?>
                                        <span class="list-value"><?php echo $book['quantity']?> Copies Available</span>
                                    <?php else: ?>
                                        <span class="text-danger">Out of stock ></span>
                                    <?php endif ?>
                                </li>
                            </ul>
                            <div class="price-block">
                                <span class="price-new">&#8358;<?php echo $book['price'] ?></span>
                            </div>
                            <div class="rating-widget">
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <!-- <div class="review-widget">
                                    <a href="#">(1 Reviews)</a> <span>|</span>
                                    <a href="#">Write a review</a>
                                </div> -->
                            </div>
                            <article class="product-details-article">
                                <h4 class="sr-only">Product Description</h4>
                                <p><?php echo $book['description'] ?></p>
                            </article>
                            <?php if (isset($_SESSION['pc_student'])): ?>
                                <div class="add-to-cart-row">
                                    <div class="count-input-block">
                                        <span class="widget-label">Qty</span>
                                        <input type="number" class="form-control text-center" id="txtQty" value="1">
                                    </div>
                                    <div class="add-cart-btn">
                                        <a id="buyBtn" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Buy Now</a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-info">Please Login or Register <a href="auth"> Here </a> to Continue</div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>

            </div>
            <section class="">
                <div class="container">
                    <div class="section-title section-title--bordered">
                        <h2>RELATED PRODUCTS</h2>
                    </div>
                    <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 4,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                            {"breakpoint":992, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} }
                        ]'>

                        <?php while ($books = $fetch_related_books->fetch_assoc()): ?>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="#" class="author">
                                            <?php echo $books['authors'] ?>
                                        </a>
                                        <h3><a href="book-details?id=<?php echo $books['book_id'] ?>"><?php echo $books['name'] ?></a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="images/<?php echo $books['cover'] ?>" alt="">
                                        </div>
                                        <div class="price-block">
                                            <span class="price">&#8358;<?php echo $books['price'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile ?>
                    </div>
                </div>
            </section>
            <!-- Modal -->

        </main>
    </div>

    <?php include "includes/footer/main.php"; ?>
</body>

</html>

<script>
    $('#buyBtn').click(function(e) {
        e.preventDefault();
        var quantity = $('#txtQty').val();
        var a = "checkout?book="+'<?php echo $id ?>'+'&qty='+quantity;
        location.href = a;
    })
</script>