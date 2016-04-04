<?php 
	define("TITLE", "Home | David Mendez");
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
                                <h1 class="dark-tb"><span>Interior</span> Home Solutions</h1>
                                <h3 class="learn-more">Learn why you should choose us for your next home renovation.</h3>
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
                            <form action="#" class="reservation-form">
                                <div class="row">
                                    <div class="input-container col-md-6">
                                        <input type="text" name="reservation-fname" id="reservation-fname" placeholder="First Name*">
                                    </div><!-- /input-container -->
                                    <div class="input-container col-md-6">
                                        <input type="text" name="reservation-lname" id="reservation-lname" placeholder="Last Name*">
                                    </div><!-- /input-container -->
                                    <div class="input-container col-md-6">
                                        <input type="text" name="reservation-phone" id="reservation-phone" placeholder="Phone*">
                                    </div><!-- /input-container -->
                                    <div class="input-container col-md-6">
                                        <input type="text" name="reservation-email" id="reservation-email" placeholder="Email*">
                                    </div><!-- /input-container -->
                         
                                    <div class="input-container col-md-12">
                                        <textarea name="reservation-comment" id="reservation-comment" placeholder="Comment" rows="5"></textarea>
                                    </div><!-- /input-container -->
                                    <div class="input-container col-md-12">
                                        <button type="submit" class="custom-button button-style1"><i class="icon-eye"></i>Send</button>
                                    </div><!-- /input-container -->
                               </div><!-- /row -->
                           </form>
                       </div><!-- /col-md-6 -->
                       <div class="col-md-6 wow fadeInRight">
                           <div class="reservation-by-phone">
                               <header class="section-title">
                                   <h2><span>By</span> Phone</h2>
                               </header>
                               <div class="contact-info">
                                   <figure><img src="img/template-assets/icon-phone.png" alt="Marine Food Calling Info"></figure>
                                    <div class="info-container">
                                       <h3 class="phone-number">(512) <span>124-5678</span></h3>
                                       <p class="call-time">Monday to Friday.</p>
                                   </div><!-- /info-container -->
                               </div><!-- /call-info -->
                               <address class="contact-info">
                                   <figure><img src="img/template-assets/icon-map-pin.png" alt="Marine Food Calling Info"></figure>
                                   <div class="info-container">
                                       <p>Interior Home Solutions.</p>
                                       <p>PO Box 21177 </p>
                                       <p>Austin, Texas </p>
                                       <p>308 E wonsley Austin, Texas</p>
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
