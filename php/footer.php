            <footer class="main-footer ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 align-center">
                            <div class="logo-container wow fadeInLeft">
                                <a href="#">
                                    <h3>Interior Home Solutions</h3>
                                    <h4>Custom Cabinets and Interior Trim</h4>
                                </a>
                            </div><!-- /logo-container -->
                            <div class="socials-container">
                                <ul>
                                    <li class="wow fadeInLeft"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.1s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.2s"><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.5s"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div><!-- /socials-container -->
                        </div><!-- /col-md-3 -->
                        <div class="col-md-6 wow fadeInDown">
                            <div class="contact-form-contaienr">
                                <div class="section-title">
                                    <h1><span>Contact</span> Us</h1>
                                </div>
                                <form id="contact-form" method="post" action="php/contact.php">
                                    <input type="text" id="name" name="name" placeholder="Name*" required>
                                    <input type="email" id="email" name="email" placeholder="Email*" required>
                                    <textarea id="message" name="message" rows="6" placeholder="Message" required></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                                <div id="form-messages"></div>
                            </div><!-- /contact-form-container -->
                        </div><!-- /col-md-6 -->
                        <div class="col-md-3 wow fadeInRight">
                            <div class="address-container">
                                <address>
                                    <img src="img/template-assets/map-pin.png" alt="Marine Food Address">
                                    <p>
                                        <span>Interior Home Solutions</span>
                                        <span>1234 Cabinet Dr.</span>
                                        <span>Cabinet Street, Austin</span>
                                        <span>Austin, Texas USA</span>
                                    </p>
                                    <img src="img/template-assets/phone-icon.png" alt="Marine Food Address">
                                    <p>
                                        <span>Phone: (512) 124-5678</span>
                                        <span>Fax: (512) 124-5678</span>
                                    </p>
                                    <img src="img/template-assets/mail-icon2.png" alt="Marine Food Address">
                                    <p>
                                        <span>owner@interiorhomesolutions.com</span>
                                    </p>
                                </address>
                            </div><!-- /address-container -->
                        </div><!-- /col-md-3 -->
                        <div class="copyright col-md-12 wow fadeInUp" data-wow-delay="0.7s">
                            <p>&copy; 2016 Interior Home Solutions. All Rights Reserved</p>
                        </div><!-- /copyright -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </footer>

        </div><!-- /wrapper -->
        <!-- End wrapper -->

        <script src="js/vendor/jquery-2.1.3.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.themepunch.tools.min.js"></script>
        <script src="js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/cd-google-map.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/tweetie.min.js"></script>
        <script src="js/jquery.scrollme.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery('.main-slider').revolution(
                {
                    delay:9000,
                    startwidth:1170,
                    startheight: 960,
                    hideThumbs:10,
                    fullScreen: 'on',
                    navigationStyle: 'preview4',
                    parallax: 'scroll',
                    parallaxLevels:[100,-80]
                });
            });
        </script>

    </body>
</html>