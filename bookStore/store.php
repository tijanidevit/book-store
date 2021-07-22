<?php
session_start();
include_once 'php/connect.php';

$query =  $conn->query("SELECT * FROM book JOIN department ON department.department_id = book.dept_id ORDER BY name ASC ");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query =  $conn->query("SELECT * FROM book JOIN department ON department.department_id = book.dept_id WHERE book.dept_id = '$id' ORDER BY name ASC ");
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poly Consult - Book Store</title>
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
                            <li class="breadcrumb-item active">Search</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <main class="inner-page-sec-padding-bottom">
            <div class="container">
                <div class="shop-toolbar mb--30">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
                                <a href="#" class="sorting-btn" data-target="grid-four">
                                    <span class="grid-four-icon">
                                        <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                                    </span>
                                </a>
                                <a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">

                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">

                        </div>
                    </div>
                </div>
                <div class="shop-toolbar d-none">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
                                <a href="#" class="sorting-btn" data-target="grid-four">
                                    <span class="grid-four-icon">
                                        <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                                    </span>
                                </a>
                                <a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">

                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">

                        </div>
                    </div>
                </div>

                <div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">

                    <?php while ($row = $query->fetch_assoc()): ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-card">
                                <div class="product-grid-content">
                                    <div class="product-header">
                                        <a href="#" class="author">
                                            <?php echo $row['dept'] ?>
                                        </a>
                                        <h3><a href="book-details?id=<?php echo $row['book_id'] ?>"><?php echo $row['name'] ?></a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="images/<?php echo $row['cover'] ?>" alt="">
                                        </div>
                                        <div class="price-block">
                                            <span class="price">&#8358;<?php echo $row['price'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="card-image">
                                        <img src="images/<?php echo $row['cover'] ?>" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                <?php echo $row['dept'] ?>
                                            </a>
                                            <h3><a href="book-details?id=<?php echo $row['book_id'] ?>" tabindex="0"><?php echo $row['name'] ?></a></h3>
                                        </div>
                                        <article>
                                            <h2 class="sr-only">Description</h2>
                                            <p><?php echo $row['description'] ?></p>
                                        </article>
                                        <div class="price-block">
                                            <span class="price">&#8358;<?php echo $row['price'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>


                    <?php if ($query->num_rows < 1): ?>
                        <h4>No books added yet </h4>
                    <?php endif ?>
                <!-- Pagination Block -->
                <!-- <div class="row pt--30">
                    <div class="col-md-12">
                        <div class="pagination-block">
                            <ul class="pagination-btns flex-center">
                                <li><a href="#" class="single-btn prev-btn ">|<i class="zmdi zmdi-chevron-left"></i> </a>
                                </li>
                                <li><a href="#" class="single-btn prev-btn "><i class="zmdi zmdi-chevron-left"></i> </a>
                                </li>
                                <li class="active"><a href="#" class="single-btn">1</a></li>
                                <li><a href="#" class="single-btn">2</a></li>
                                <li><a href="#" class="single-btn">3</a></li>
                                <li><a href="#" class="single-btn">4</a></li>
                                <li><a href="#" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a>
                                </li>
                                <li><a href="#" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i>|</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </main>
    </div>
    <?php include "includes/footer/main.php"; ?>
</body>

</html>