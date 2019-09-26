<?php include 'header.php';
echo'
    <!-- Main Menu Section -->
    <section class="menu">
        <nav class="navbar navigation">
            <div class="container">
                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">
                        <!-- Home |CEK-->
                        <li class="dropdown">
                            <a href="index.php">SHOP</a>
                        </li>
                        <!-- / Home -->

                        <!-- Laundry|CEK -->
                        <li class="dropdown ">
                            <a href="Laundry.php">LAUNDRY</a>
                        </li>
                        <!-- / Laundry -->
                    </ul>
                    <!-- / .nav .navbar-nav -->
                </div>
                <!--/.navbar-collapse -->
            </div>
            <!-- / .container -->
        </nav>
    </section>

    <section class="product-category section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="category-box">
                        <img src="images/pict1.png" alt="" />
                        <div class="content">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="title text-center">
                            <h1>Stylish and Comfortable Footwear</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- produk|GANTI -->
    <section class="products section">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h3>OUR NEW PRODUCT</h3>
                </div>
            </div>
            <!-- Sort By|GANTI -->
            <div>
                <select class="form-control" style="width: 100px; margin-left: 1000px; margin-bottom: 50px;">
                      <option>Sort By</option>
                      <option>DE</option>
                      <option>FR</option>
                      <option>ES</option>
                  </select>
            </div>
            <!-- / Languages -->
            <div class="row">';
            $api_url = "http://localhost:8080/TUBESPAW/api/read.php";
            $data = json_decode(file_get_contents($api_url), true);
            foreach ($data['result'] as $result) :
            echo '
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-thumb">
                                <img class="img-responsive" src="'.$result['image'].'" alt="product-img" width="330" height="220" />
                            </div>
                            <div class="product-content">
                                <h4><a href="product-single.php?id='.$result['id'].'">'.$result['name'].'</a></h4>
                                <p class="price">Rp.'.$result['price'].'</p>
                                <p class="card-text"><small class="text-muted">stock: '.$result['stock'].' left</small></p>
                            </div>
                        </div>
                    </div>';
                    endforeach;
                ?>
                <!-- produk|GANTI -->
            </div>
        </div>
    </section>


    <!--
ABOUT OUR STORE|CEK
==================================== -->
    <section class="section instagram-feed">
        <div class="container">
            <div class="col-md-12 text-center">
                <div class="col-md-12">
                    <div class="category-box">
                        <img src="images/pict2.png" alt="" />
                        <div class="content">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="title text-center">
                            <h2>ABOUT OUR STORE</h2>
                            <h5>​Style. Design. Service</h5>
                        </div>
                        </br>
                        <p>​Try was founded by a group of like-minded fashion devotees, determined to deliver style to shoppers worldwide. Our store offers a huge collection of goods at affordable prices, and our payment and shipping options are simply unmatched.
                            What are you waiting for? Start shopping online today and find out more about what makes us so special.</p>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <footer class="footer section text-center">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <h3 style="margin-left: 230px">CONTACT</h3>
                    <h4 style="margin-left: 160px"><i>We Always Ready to Help You</i></h4>
                    <!-- Contact Form -->
                    <div class="contact-form col-md-6 ">
                        <form id="contact-form" method="post" action="" role="form">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                            </div>
                            <div id="cf-submit">
                                <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                            </div>
                        </form>
                    </div>
                    <!-- ./End Contact Form -->

                    <!-- Contact Details -->
                    <div class="contact-details col-md-6 ">
                        <div class="google-map">
                            <div id="map"></div>
                        </div>
                        <ul class="contact-short-info">
                            <li>
                                <i class="tf-ion-ios-home"></i>
                                <span>Babarsari, Yogyakarta</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-phone-portrait"></i>
                                <span>Phone: 0129- 12323-123123</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-globe"></i>
                                <span>Fax: +880-31-000-000</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-mail"></i>
                                <span>Email: hello@example.com</span>
                            </li>
                        </ul>
                        <!-- Footer Social Links -->
                        <div class="social-icon">
                            <ul>
                                <li><a class="fb-icon" href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
                            </ul>
                        </div>
                        <!--/. End Footer Social Links -->
                    </div>
                    <!-- / End Contact Details -->



                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </footer>

    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed-js/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/count-down/jquery.countdown.min.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/assets/warning.js"></script>



    <!-- Custom js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBItRd4sQ_aXlQG_fvEzsxvuYyaWnJKETk&callback=initMap"></script>

    <script src="js/script.js"></script>



</body>

</html>'
?>