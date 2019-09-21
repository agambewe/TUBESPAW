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
                            <a href="index.html">SHOP</a>
                        </li>
                        <!-- / Home -->

                        <!-- Laundry|CEK -->
                        <li class="dropdown ">
                            <a href="shop.html">LAUNDRY</a>
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
    <section class="single-product">
        <div class="container">

            <div class="row mt-20">';
                $id = $_GET['id'];
                $api_url = "http://localhost/TUBES/api/read.php?id=".$id;
                $data = json_decode(file_get_contents($api_url), true);
                foreach ($data['result'] as $result) :
                echo'
                <div class="col-md-6">
                    <img src="'.$result['image'].'" alt="" data-zoom-image="'.$result['image'].'" width="550" height="330" />
                </div>
                <div class="col-md-6">
                    <div class="single-product-details">
                        <h2>'.$result['name'].'</h2>
                        <p class="product-price">'.$result['price'].'</p>

                        <p class="product-description mt-20">
                            '.$result['detail'].'</p>
                        <div class="color-swatches">
                            <span>Colour:</span>
                            <ul>
                                <li>'.$result['colour'].'</li>
                            </ul>
                        </div>
                        <form class="text-left clearfix" action="proses/addCart.php" method="post">
                        <div class="product-size">
                            <span>Size(EU):</span>
                            <select name="size" class="form-control">
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
						</select>
                        </div>
                        <div class="product-quantity">
                            <span>Quantity:</span>
                            <div class="product-quantity-slider">
                                <input id="product-quantity" type="text" value="0" name="product-quantity">
                            </div>
                        </div>
                        <input type="hidden" name="id" value='.$result['id'].' />
                        <input type="hidden" name="email" value='.$_SESSION['user']['email'].' />
                        <p class="card-text"><small class="text-muted">stock: '.$result['stock'].' left</small></p>
                        <input type="submit" name="add_to_cart" class="btn btn-main mt-20" value="Add to Cart" />
                        </form>
                    </div>
                </div>
            </div>';
                    endforeach;
            ?>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal product-modal fade" id="product-modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="modal-image">
                                <img class="img-responsive" src="images/shop/products/modal-product.jpg" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-short-details">
                                <h2 class="product-title">DESCRIPTION AND FEATURES</h2>
                                <p class="product-short-description">
                                    The Authentic Platform combines the original and now iconic Vans low top style with sturdy canvas uppers, metal eyelets, and platform signature rubber waffle outsoles.
                                </p>
                                <p class="product-short-description">Composition: Canvas</p>
                                <p class="product-short-description">The materials used in the manufacturing of these styles (including adhesives) are free of any animal by-products and therefore are 100% vegan.</p>
                                <a href="" class="btn btn-main">Add To Cart</a>
                                <a href="" class="btn btn-transparent">View Product Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer section text-center">
        <div class="container">
            <h3>CONTACT</h3>
            <h4><i>We Always Ready to Help You</i></h4>
            <div class="contact-form col-md-12">
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
            <div class="row">
                <div class="col-md-12">
                    <ul class="footer-menu">
                        <li>
                            <a href="">SHIPPING</a>
                        </li>
                        <li>
                            <a href="">TERMS OF SERVICE</a>
                        </li>
                        <li>
                            <a href="">PRIVACY POLICY</a>
                        </li>
                    </ul>
                    <p class="copyright-text">Powered by Bootstrap</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="footer-menu">
                        <li>
                            <a href="">Babarsari, Yogyakarta</a>
                        </li>
                        <li>
                            <a href="">Phone: +00 151515</a>
                        </li>
                        <li>
                            <a href="">Email: mail@mail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
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