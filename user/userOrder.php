<?php include 'header.php';?>
    <section class="user-dashboard page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-wrapper user-dashboard">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Item Name</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#451231</td>
                                        <td>Mar 25, 2016</td>
                                        <td>QWERTY</td>
                                        <td>$99.00</td>
                                        <td><span class="label label-primary">Processing</span></td>
                                    </tr>
                                    <tr>
                                        <td>#451231</td>
                                        <td>Mar 25, 2016</td>
                                        <td>ASDFG</td>
                                        <td>$150.00</td>
                                        <td><span class="label label-success">Completed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer section text-center">
        <div class="container">
            <h3>CONTACT</h3>
            <h4><i>We Always Ready to Help You</i></h4>
            <div class="contact-form col-md-12">
                <form onsubmit="return validateFormContact()" id="contact-form" method="post" action="" role="form">
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

</html>