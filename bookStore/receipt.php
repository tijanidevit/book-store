<?php
    include_once 'php/connect.php';
if (!isset($_GET['_ref']) || empty($_GET['_ref'])) {
    header("Location: ./");
}

$_ref = $_GET['_ref']; ?>
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

        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active">Order Complete</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- order complete Page Start -->
        <section class="order-complete inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row" id="receipt-pane">
                    <div class="col-12">
                        <div class="order-complete-message text-center">
                            <h1 class="text-success">Thank you !</h1>
                            <p>Your order has been received.</p>
                        </div>
                        <ul class="">
                            <li>Order Number: <strong>#<?php echo $_ref; ?></strong></li>
                            <li>Date: <strong><?php echo date("F d,Y"); ?></strong></li>
                            <li>Pickup Location: <strong>Abule Ijoko</strong></li>
                        </ul>
                        <br>
                        <h3 class="order-table-title">Order Details</h3>
                        <div class="table-responsive">
                            <table class="table order-details-table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="single-product.html">Vans Off The Wall T-Shirt In</a> <strong>× 1</strong></td>
                                        <td><span>&#8358;59.00</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Subtotal:</th>
                                        <td><span>&#8358;117.00</span></td>
                                    </tr>
                                    <tr>
                                        <th>Payment Method:</th>
                                        <td>Online: Flutterwave</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td><span>&#8358;117.00</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="text-center">
                    <button id="download-btn" class="place-order w-100 ">Download Receipt</button>
                </div>
            </div>
        </section>
        <!-- order complete Page End -->
    </div>

    <?php include "includes/footer/main.php"; ?>

    <script src="js/html2pdf/html2pdf.bundle.min.js"></script>
    <script>
        $(function() {
            $('#download-btn').click(function(e) {
                e.preventDefault();
                // Choose the element that our invoice is rendered in.
                let element = document.getElementById("receipt-pane");
                // Choose the element and save the PDF for our user.
                html2pdf().from(element).set({
                    margin: 1,
                    filename: <?php echo "'Receipt_" . $_ref . "'"; ?>,
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        orientation: 'portrait',
                        unit: 'in',
                        format: 'letter',
                        compressPDF: true
                    }
                }).save();
            })
        })
    </script>
</body>

</html>