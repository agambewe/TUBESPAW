<?php
session_start();
include('db.php');
echo '
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Aviato E-Commerce Template">

    <meta name="author" content="Themefisher.com">

    <title>ICONIC | Shoe and Cleaning</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

    <!-- animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/navigation.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

    <!-- Start Top Header Bar -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="contact-number">
                        <i class="tf-ion-ios-telephone"></i>
                        <span>0129- 12323-123123</span>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Site Logo -->
                    <div class="logo text-center">
                        <a href="index.php">
                            <!-- replace logo here | GANTI pake logo .jpg-->
                            <!--<img src="images/logo.png" alt="website main logo" />-->
                            <h1 class="text-center">ICONIC</h1>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Cart -->
                    <ul class="top-menu text-right list-inline">
                        <li class="dropdown cart-nav dropdown-slide">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-android-cart"></i>Cart</a>
                            <div class="dropdown-menu cart-dropdown">';
                            if(isset($_SESSION['isLogin'])){
                                if(isset($_SESSION['user']['email'])){
                                    $email = $_SESSION['user']['email'];
                                    $total=0;
                                }
                                function rupiah($angk)
                                    {
                                        return 'Rp '.strrev(implode('.',str_split(strrev(strval($angk)),3)));
                                    }
                                $query = mysqli_query($con,"SELECT * FROM cart WHERE email='$email'") or die(mysqli_error($con));
                                foreach ($query as $result) :
                                    echo '
                                <!-- Cart Item -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="'.$result['image'].'" alt="image" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="">'.$result['name'].'</a></h4>
                                        <div class="cart-price">
                                            <span>'.$result['pieces'].' x</span>
                                            <span>'.rupiah($result['price']).'</span>
                                        </div>
                                    </div>
                                </div>';
                                $peritem = $result['pieces']*$result['price'];
                                $total = $total + $peritem;
                                endforeach;
                                echo '
                                <!-- / Cart Item -->

                                <div class="cart-summary">
                                    <span>Total</span>
                                    <span class="total-price">'.rupiah($total).'</span>
                                </div>
                                <ul class="text-center cart-buttons">
                                    <li><a href="user/userCart.php" class="btn btn-small">Manage Cart</a></li>
                                    <li><a href="" class="btn btn-small btn-solid-border">Checkout</a></li>
                                </ul>';
                            }else {
                            echo '
                            <h4 class="mt-20">You need to login for access this.</h4>';
                            }echo '
                            </div>

                        </li>
                        <!-- / Cart -->
                        <!-- Login|GANTI LOGIN -->
                        '; if(isset($_SESSION['isLogin'])){
                        echo '<li class="dropdown dropdown-slide">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                                <img src="'.$_SESSION['user']['image'].'" width="15px" heigh="15px" class="rounded-circle z-depth-0" alt="avatar image">My Profile</a>
                                <ul class="dropdown-menu search-dropdown">
                                    <li>
                                        <a class="dropdown-item" href="user/editProfile.php">Edit Profil</a>
                                        <a class="dropdown-item" href="user/userCart.php">Cart</a>
                                        <a class="dropdown-item" href="proses/prosesLogout.php">Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        <!-- / Login -->


                        <!-- ifLogin -->';
                        }else{
                        echo '<li class="dropdown dropdown-slide">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i> Login</a>
                            <ul class="dropdown-menu search-dropdown">
                                <li> 
                                    <form class="text-left clearfix" action="proses/prosesLogin.php" method="post">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-main text-center">Login</button>
                                        </div>
                                    </form>
                                <p class="mt-20">New in this site ?<a href="signin.php"> Create New Account</a></p>
                                </li>
                            </ul>
                        </li>
                        <!-- / ifLogin -->';
                    };
                    echo '</ul>
                    <!-- / .nav .navbar-nav .navbar-right -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Header Bar -->'
?>