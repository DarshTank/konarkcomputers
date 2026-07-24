<?php
$tital="contact";
include("hader.php");
error_reporting(0);

?>   
   <!--  PAGE HEADING -->

        <section class="page-header" data-stellar-background-ratio="0.1">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">


                        <h3>
                            Contact Us
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / Contact
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->


        <!--  MAIN CONTENT  -->


        <section class="">

            <div id=""><div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300px;" id="gmap_canvas" src="https://maps.google.com/maps?q=Konark%20Computers%2C%20Rajkot%2C%20Gujarat%2C%20India&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>

        </section> <!-- end .section-content-block  -->

        <section class="section-content-block section-contact-block">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">

                            <h2 class="contact-title">Say hello to us</h2>

                            <form action="contact1.php" method="post" id="contact-form">

                                <div class="form-group">
                                    <input type="text" name="Name" class="form-control" id="author" placeholder="Name">                                            
                                </div>

                                <div class="form-group">
                                    <input type="email" name="Email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Phone" class="form-control" id="url" placeholder="Subject">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="Msg" id="comment" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-custom">Send Now</button>
                                </div>

                            </form>

                        </div> <!-- end .contact-form-block  -->

                    </div> <!--  end col-sm-6  -->

                    <div class="col-sm-6 wow fadeInRight">

                        <div class="content-block">

                            <h2 class="contact-title">Contact us</h2>

                            <ul class="contact-info">
                                <li>
                                    <span class="icon-container"><i class="fa fa-home"></i></span>
                                    <address><font style="font-weight:bold;"><b>Konark Computers</b></font></address><br>
									<div style="margin-left:50px; ">234-Vitt Bhavan, 
									<br>Near Gondal Road Flyover, <br>Rajkot. 360002 Gujarat. India</div>

                                </li>
                                <li>
                                    <span class="icon-container"><i class="fa fa-phone"></i></span>
                                    <address><a href="#">Free Helpline:+91-942 642 9416</a></address>
                                </li>
                                <li>
                                    <span class="icon-container"><i class="fa fa-phone"></i></span>
                                    <address><a href="#">Mobile Number:+91-968 769 8680</a></address>
                                </li>
                                <li>
                                    <span class="icon-container"><i class="fa fa-envelope"></i></span>
                                    <address><a href="mailto:omesh_tank@yahoo.com">omesh_tank@yahoo.com</a></address>
                                </li>
                             
                            </ul>

                            <h2 class="contact-title">We are social</h2>

                            <div class="social-icons margin-top-11 clearfix">
                              

                                <a title="Share at Facebook" href="https://www.facebook.com/Konark.Computers/" target="_blank" class="btn btn-social-icon btn-facebook petition_share">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a title="Share at Google+" href="https://plus.google.com/+KonarkComputersLaptopComputerServiceRepairRajkot" target="_blank" class="btn btn-social-icon btn-goggle-plus petition_share">
                                    <i class="fa fa-google-plus"></i>
                                </a>

                              
                            </div>

                        </div> <!-- end .content-block  -->

                    </div> <!--  end col-sm-6  -->

                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section> <!-- end .section-content-block  -->



      

        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/wow.min.js"></script>
       <script src="js/jquery.backTop.min.js"></script>
       <script src="js/waypoints.min.js"></script>
       <script src="js/waypoints-sticky.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="js/jquery.stellar.min.js"></script>
       <script src="js/jquery.counterup.min.js"></script>
       <script src="js/venobox.min.js"></script>
       <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/jquery.gmap.min.js"></script>
       <script src="js/custom-scripts.js"></script>
     <!-- FOOTER  -->
                    <?php
include("footer.php");

?>  