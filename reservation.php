<?php 
	define("TITLE", "Contact Us| Interior Home Solutions");
	include('php/head.php'); 
?>
<?php 
        define("RESERVATION", "active");
	include('php/main_menu.php'); 
?>
        <!-- Start wrapper -->
        <div class="wrapper">
        
           <!-- Start main-header -->
           <header class="main-header" id="top">
               <div class="top-banner-container top-banner-container-style1">
                   <div class="top-banner-bg custom-bg3 parallax" data-stellar-background-ratio="0.5"></div>
                   <div class="top-banner">
                       <div class="top-image">
                            <header class="section-title">
                                <h1 class="background-box">Interior Home Solutions</h1>
                                <h3 class="background-box .learn-more">Learn why you should choose us for your next home renovation.</h3>
                            </header>      
                       </div><!-- /top-image -->
                       <div class="bottom-image">
                          
                       </div><!-- /bottom-image -->
                   </div><!-- /top-banner -->
               </div><!-- /top-banner-container -->
           </header>
           <!-- End main-header -->

           <section class="reservation-terms dark-bg">
               <div class="container">
                   <div class="row">
                       <header class="col-md-12 section-title wow fadeInDown">
                           <h1><span>Contact</span> Us</h1>
                           <p>We would love to help with the interior design of your home.</p>
                       </header>

                   </div><!-- /row -->
               </div><!-- /container -->
           </section>

            <section class="reservation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft">
                            <header class="section-title">
                                <h2><span>Online</span> Form</h2>
                            </header>
                                <form id="contact-form" method="post" action="php/contact.php">
                                    <input type="text" id="name" name="name" placeholder="Name*" required>
                                    <input type="email" id="email" name="email" placeholder="Email*" required>
                                    <textarea id="message" name="message" rows="6" placeholder="Message" required></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                                <div id="form-messages"></div>
                       </div><!-- /col-md-6 -->
                       <div class="col-md-6 wow fadeInRight">
                           <div class="reservation-by-phone">
                               <header class="section-title">
                                   <h2><span>By</span> Phone</h2>
                               </header>
                               <div class="contact-info">
                                   <figure><img src="img/template-assets/icon-phone.png" alt="Marine Food Calling Info"></figure>
                                    <div class="info-container">
                                       <h3 class="phone-number">(512) <span>486-9996</span></h3>
                                       <p class="call-time">Mon-Sat 7:00AM-6:00PM</p>
                                   </div><!-- /info-container -->
                               </div><!-- /call-info -->
                               <address class="contact-info">
                                   <figure><img src="img/template-assets/icon-map-pin.png" alt="Marine Food Calling Info"></figure>
                                   <div class="info-container">
                                       <p>Interior Home Solutions.</p>
                                       <p>Austin, Texas 78753 </p>
                                     
                                   </div><!-- /info-container -->
                               </address>
                           </div><!-- /reservation-by-phone -->
                       </div><!-- /col-md-6 -->
                   </div><!-- /row -->
               </div><!-- /container -->
           </section>



            <section class="map">
                <div class="map-container wow fadeInDown">
                    <div id="google-map"></div>
                    <div id="cd-zoom-in"></div>
                    <div id="cd-zoom-out"></div>
                </div><!-- /map-container -->
            </section>

<?php 
	include('php/footer.php'); 
?>
