<div class="site-header header-3  d-none d-lg-block">
     <div class="header-middle pt--10 pb--10">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-3">
                     <a href="./" class="site-brand">
                         <img src="image/logo.png" alt="">
                     </a>
                 </div>
                 <div class="col-lg-5">
                     <div class="header-search-block">
                         <form action="search">
                             <input type="text" name="s" placeholder="Search entire store here">
                             <button>Search</button>
                         </form>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="main-navigation flex-lg-right">
                         <div class="cart-widget">
                             <?php if (isset($_SESSION['pc_student'])): ?>
                                 <div class="login-block">
                                     <a href="account" class="font-weight-bold">Account</a></a>
                                 </div>
                                 <div class="cart-block">
                                     <a href="account#orders">
                                         <div class="cart-total">
                                             <span class="text-item">
                                                 Order History
                                             </span>
                                         </div>
                                     </a>
                                 </div>

                             <div class="menu-item">
                                 <a href="logout">Logout</a>
                             </div>
                             <?php else: ?>
                                <div class="login-block">
                                     <a href="auth" class="font-weight-bold">Register/Login</a></a>
                                 </div>
                             <?php endif ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="header-bottom">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-3">
                     <nav class="category-nav   ">
                         <div>
                             <a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Browse
                                 Departments</a>
                             <?php include "includes/widget/department-dropdown.php"; ?>
                         </div>
                     </nav>
                 </div>
                 <div class="col-lg-3">
                     <div class="header-phone ">
                         <div class="icon">
                             <i class="fas fa-headphones-alt"></i>
                         </div>
                         <div class="text">
                             <p>Free Support 24/7</p>
                             <p class="font-weight-bold number">+01-202-555-0181</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="main-navigation flex-lg-right">
                         <ul class="main-menu menu-right li-last-0">
                             <li class="menu-item">
                                 <a href="./">Home</a>
                             </li>
                             <li class="menu-item">
                                 <a href="store">Store</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="site-mobile-menu">
     <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
         <div class="container">
             <div class="row align-items-sm-end align-items-center">
                 <div class="col-md-4 col-7">
                     <a href="./" class="site-brand">
                         <img src="image/logo.png" alt="">
                     </a>
                 </div>
                 <div class="col-md-5 order-3 order-md-2">
                     <nav class="category-nav   ">
                         <div>
                             <a href="javascript:void(0)" class="category-trigger"><i class="fa fa-bars"></i>Browse
                                 Department</a>


                             <?php include "includes/widget/department-dropdown.php"; ?>
                         </div>
                     </nav>
                 </div>
                 <div class="col-md-3 col-5  order-md-3 text-right">
                     <div class="mobile-header-btns header-top-widget">
                         <ul class="header-links">

                             <li class="sin-link">
                                 <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i class="ion-navicon"></i></a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <!--Off Canvas Navigation Start-->
     <aside class="off-canvas-wrapper">
         <div class="btn-close-off-canvas">
             <i class="ion-android-close"></i>
         </div>
         <div class="off-canvas-inner">
             <!-- search box start -->
             <div class="search-box offcanvas">
                 <form action="search">
                     <input type="text" name="s" placeholder="Search Here">
                     <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                 </form>
             </div>
             <!-- search box end -->
             <!-- mobile menu start -->
             <div class="mobile-navigation">
                 <!-- mobile menu navigation start -->
                 <nav class="off-canvas-nav">
                     <ul class="mobile-menu main-mobile-menu">
                         <li class="menu-item">
                             <a href="./">Home</a>
                         </li>
                         <li class="menu-item">
                             <a href="store">Store</a>
                         </li>
                     </ul>
                 </nav>
                 <!-- mobile menu navigation end -->
             </div>
             <!-- mobile menu end -->
             <nav class="off-canvas-nav">
                 <ul class="mobile-menu menu-block-2">
                     <li class="menu-item-has-children">
                         <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                         <ul class="sub-menu">
                         <?php if (isset($_SESSION['pc_student'])): ?>
                             <li class="menu-item">
                                 <a href="account">Account</a>
                             </li>
                             <li class="menu-item">
                                 <a href="account#orders">Order History</a>
                             </li>
                             <li class="menu-item">
                                 <a href="logout">Logout</a>
                             </li>
                         <?php else: ?>
                             <li class="menu-item">
                                 <a href="auth">Login/Register</a>
                             </li>
                         <?php endif ?>
                         </ul>
                     </li>
                 </ul>
             </nav>
             <div class=" off-canvas-bottom">
                 <div class="contact-list mb--10">
                     <a href="#" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                     <a href="#" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                 </div>
             </div>
         </div>
     </aside>
     <!--Off Canvas Navigation End-->
 </div>
 <div class="sticky-init fixed-header common-sticky">
     <div class="container d-none d-lg-block">
         <div class="row align-items-center">
             <div class="col-lg-4">
                 <a href="./" class="site-brand">
                     <img src="image/logo.png" alt="">
                 </a>
             </div>
             <div class="col-lg-8">
                 <div class="main-navigation flex-lg-right">
                     <ul class="main-menu menu-right ">
                         <li class="menu-item">
                             <a href="./">Home</a>
                         </li>
                         <?php if (isset($_SESSION['pc_student'])): $student = $_SESSION['pc_student'] ?>
                             <li class="menu-item">
                                 <a href="account">Account</a>
                             </li>
                             <li class="menu-item">
                                 <a href="account#orders">Order History</a>
                             </li>
                             <li class="menu-item">
                                 <a href="logout">Logout</a>
                             </li>
                         <?php else: ?>
                             <li class="menu-item">
                                 <a href="auth">Login/Register</a>
                             </li>
                         <?php endif ?>

                         <li class="menu-item">
                             <a href="store">Store</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>