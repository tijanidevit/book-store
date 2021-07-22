<?php
session_start();
include_once 'php/connect.php';
?>
<!DOCTYPE html>


<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poly Consult - Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    <div class="site-wrapper" id="top">
        <?php 
            include "includes/header/main.php"; 

            $user_id = $student['student_id'];
            $email = $student['email'];
            $phone = '08149617083';
            $department = 'Computer Science';

            $fullname = explode(" ", $student['fullname']);
            $first_name = $fullname[0];
            $last_name =  $fullname[1];
            $qty = isset($_GET['qty']) ? $_GET['qty'] : 1;
            $id = $_GET['book'];

            $fetch_book = $conn->query("SELECT * FROM book WHERE book_id = '$id' ");
            $book = $fetch_book->fetch_assoc();

            $book_title = $book['name'];
            $amount =  $book['price'];

            $fetch_pickup_locations = $conn->query("SELECT * FROM pickup_location ORDER BY pickup_location ");
        ?>


        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Checkout Form s-->
                        <div class="checkout-form">
                            <div class="row row-40">
                                <div class="col-12">
                                    <h1 class="quick-title">Checkout</h1>
                                    <!-- Slide Down Blox ==> Login Box  -->
                                    <div class="checkout-slidedown-box" id="quick-login">
                                        <form action="#">
                                            <div class="quick-login-form">
                                                <p>If you have shopped with us before, please enter your details in the
                                                    boxes below. If you are a new
                                                    customer
                                                    please
                                                    proceed to the Billing & Shipping section.</p>
                                                <div class="form-group">
                                                    <label for="quick-user">Username or email *</label>
                                                    <input type="text" placeholder="" id="quick-user">
                                                </div>
                                                <div class="form-group">
                                                    <label for="quick-pass">Password *</label>
                                                    <input type="text" placeholder="" id="quick-pass">
                                                </div>
                                                <div class="form-group">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <a href="#" class="btn btn-outlined   mr-3">Login</a>
                                                        <div class="d-inline-flex align-items-center">
                                                            <input type="checkbox" id="accept_terms" class="mb-0 mr-1">
                                                            <label for="accept_terms" class="mb-0">I’ve read and accept
                                                                the terms &amp; conditions</label>
                                                        </div>
                                                    </div>
                                                    <p><a href="javascript:" class="pass-lost mt-3">Lost your
                                                            password?</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="col-lg-7 mb--20">
                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb-40">
                                        <h4 class="checkout-title">Delivery Address</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb--20">
                                                <label>First Name*</label>
                                                <input type="text" readonly value="<?php echo $first_name; ?>">
                                            </div>
                                            <div class="col-md-6 col-12 mb--20">
                                                <label>Last Name*</label>
                                                <input type="text" readonly value="<?php echo $last_name; ?>">
                                            </div>
                                            <div class="col-12 mb--20">
                                                <label>Department Name</label>
                                                <input type="text" readonly value="<?php echo $department; ?>">
                                            </div>
                                            <div class="col-12 col-12 mb--20">
                                                <label>Pickup Location*</label>
                                                <select class="nice-select" name="pickup_location_id" id="pickup-location" required="required">
                                                    <?php while ($row = $fetch_pickup_locations->fetch_assoc()): ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['pickup_location'] ?></option>
                                                    <?php endwhile ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <!-- Cart Total -->
                                        <div class="col-12">
                                            <div class="checkout-cart-total">
                                                <h2 class="checkout-title">YOUR ORDER</h2>
                                                <h4>Product <span>Price</span></h4>
                                                <ul>

                                                    <li><span class="left"><?php echo $book_title . " x " . $qty; ?></span>
                                                        <span class="right">&#8358;<?php echo number_format($amount, 2); ?></span></li>
                                                </ul>
                                                <h4>Grand Total <span>&#8358;<?php echo number_format($amount * $qty, 2); ?></span></h4>
                                                <form>
                                                    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                                                    <button class="place-order w-100" id="payment-btn">Place order</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <?php include "includes/footer/main.php"; ?>
    <script>
        $(function() {
            const API_FLUTTERWAVE_PK = 'FLWPUBK_TEST-0f9fd4e3dbd0809a6c3b8cdf518650a1-X',
                customerEmail = <?php echo "'" . $email . "'"; ?>,
                customerPhone = <?php echo "'" . $phone . "'"; ?>,
                customerFName = <?php echo "'" . $first_name . "'"; ?>,
                customerLName = <?php echo "'" . $last_name . "'"; ?>,
                amount = <?php echo "'" . ($amount * $qty) . "'"; ?>;


            $('#payment-btn').click(function(e) {

                e.preventDefault();
                const n = new Date();
                var t =
                    "PC" +
                    n.getFullYear().toString() +
                    n.getMonth().toString() +
                    n.getMilliseconds().toString() +
                    Math.floor(1).toString(),
                    o = getpaidSetup({
                        PBFPubKey: API_FLUTTERWAVE_PK,
                        customer_email: customerEmail,
                        amount: amount.toString(),
                        customer_phone: customerPhone,
                        customer_firstname: customerFName,
                        customer_lastname: customerLName,
                        currency: "NGN",
                        country: "NG",
                        txref: t,
                        onclose: function() {},
                        callback: function(e) {
                            handlePaymentResponse(e.data.tx), o.close();
                        }
                    });
            })

            const handlePaymentResponse = (t) => {
                let e = {
                    userId: <?php echo "'" . $user_id . "'"; ?>,
                    trxref: t.txRef,
                    orderRef: t.orderRef,
                    flwChargedAmount: t.charged_amount,
                    flwRef: t.flwRef,
                    pickupLocation: $('#pickup-location').val()

                };
                $('#payment-btn').attr('disabled', 'disabled').text("Processing...");


                $.ajax({
                    url: 'php/checkout.php',
                    type: 'POST',
                    data: {
                        book_id : '<?php echo $id ?>',
                        qty : '<?php echo $qty ?>',
                        student_id : '<?php echo $user_id ?>',
                        pickup_location_id : $('#pickup-location').val()
                    },
                    success: function(response) {
                        if (response == 1) {
                            location.href = 'receipt?_ref=' + response._ref
                        }

                        console.log(response);
                    },
                    error: function(error) {
                        alert("Opps! There's a problem processing your payment. Please contact us.");
                        console.log(error);
                    }
                })
            }
        });
    </script>

    <script>
                
    </script>
</body>

</html>