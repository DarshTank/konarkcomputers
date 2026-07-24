<?php
$tital="home";
include("hader.php");
include("konarka/connection.php");
error_reporting(0);

?><!--  HOME SLIDER BLOCK  -->
        
        <!-- slider start -->
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel owl-theme">
                
                <?php
                $has_slides = false;
                if(function_exists('mysql_query')) {
                    $result = "select * from tbl_slider";
                    $sql = @mysql_query($result);
                    if ($sql && @mysql_num_rows($sql) > 0) {
                        while($record = mysql_fetch_array($sql)) {
                            $has_slides = true;
                            ?>
                            <div class="item">
                                <img src="konarka/<?php echo $record['Image'];?>" alt="Konark Computers">
                                <div class="slider-content">
                                    <div class="container"></div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
                if (!$has_slides) {
                    ?>
                    <div class="item">
                        <img src="images/computerr.jpg" alt="Konark Computers">
                        <div class="slider-content">
                            <div class="container"></div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider3.jpg" alt="Konark Computers">
                        <div class="slider-content">
                            <div class="container"></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                
                
            </div>
        </div>
        <!-- slider end -->
        
        <!--  HOME HIGHLIGHTS SECTION 1 -->

        <section class="section-content-block section-home-highlights">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Fast and Easy online support for your computer and laptop at your doorsteps.</h2>
                        
                    </div> <!-- end .col-sm-10  -->
                </div> <!--  end .row  -->
				
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="highlight-block xs-margin margin-bottom-20">
                            <div class="highlight-block-inner">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <h5>WELCOME </h5>
                                <p>We help to resolve all types of computer and Laptop problems and improve the speed and performance of your computer and Laptop. Our technicians provide computer support for all brands of laptops and desktops, including HP, Dell, Lenovo, Asus, Sony, Acer, Samsung and Toshiba. Get instant access to our IT support experts at your doorstep.
</p>
                               
                            </div> <!--  end .main_highlights  -->
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .col-md-3  -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="highlight-block xs-margin margin-bottom-20">
                            <div class="highlight-block-inner">
                                <i class="fa fa-building-o" aria-hidden="true"></i>
                                <h5>NETWORKING</h5>
                                <p>While a wireless network helps keep your office connected, an unsecure one can leave you prone to security problems. KONARK will not only help you configure your wireless router and adapter, but we will also secure your network, and show you how to use the new network and prevent any vulnerabilities.
</p>
                               
                            </div> <!--  end .main_highlights  -->
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .col-md-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="highlight-block xs-margin margin-bottom-20">
                            <div class="highlight-block-inner">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <h5>CONSULTING</h5>
                                <p>Are you worried about your technology reliability? Are you confused about what you really need? Konark Computers can answer all your technology questions to let you focus on growing your business.
</p>
                             
                            </div> <!--  end .main_highlights  -->
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .col-md-3  -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="highlight-block xs-margin">
                            <div class="highlight-block-inner">
                                <i class="fa fa-building-o" aria-hidden="true"></i>
                                <h5>Service</h5>
                                <p>Fast and Easy online support for your computer and laptop at your doorsteps.
Critical inspection for possible defects, virus checking & system tuning & optimization.
Boost speed and performance of your computer.
Resolve conflicts with software and driver.
Fix problems with Internet browsing and related errors.</p>
                               
                            </div> <!--  end .main_highlights  -->
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .col-md-3  -->
                    
                </div> <!--  end .row  -->


            </div> <!--  end .container  -->

        </section> <!--  end our-services -->
         <!--  PROCESS SECTION  -->

        <section class="section-content-block section-process">

            <div class="container wow fadeInUp">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading section-heading-alt">Our Process</h2>
                         <p class="section-subheading section-subheading-alt">
                            Easy and effective way to get your device repaired
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

                <div class="row">
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        
                        <div class="process-holder xs-margin" >
                            <h3>
                              <span class="heading-numbers">1</span>
                              DAMAGE<br/>DEVICE
                            </h3>
                            <p>Just relaxed when your device is need to be fixed and no panic</p>
                        </div>
                        
                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        
                        <div class="process-holder xs-margin" >
                            <h3>
                              <span class="heading-numbers">2</span>
                              SEND THEM<br/>TO US
                            </h3>
                            <p>Send the device to us which you need to be fixed and stay relaxed</p>
                        </div>
                        
                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        
                        <div class="process-holder xs-margin" >
                            <h3>
                              <span class="heading-numbers">3</span>
                              FAST <br/>FIX
                            </h3>
                            <p>We will take care of it and work with it to fix it accurately</p>
                        </div>
                        
                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        
                        <div class="process-holder xs-margin" >
                            <h3>
                              <span class="heading-numbers">4</span>
                              QUICK<br/>RETURN
                            </h3>
                            <p>After a quick fix, we just return to it you fast and securely</p>
                        </div>
                        
                    </div> <!--  end col-sm-3  -->

                </div> <!-- end row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .section-process -->
        
       
        <!--  ABOUT SECTION 1 -->

        <section class="section-content-block about-section">

            <div class="container">
				
                <div class="row">
                    <div class="col-md-6" >
                        <div class="about-image">
                        <img class="img-responsive" src="kon.gif" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-details" >
                            <h3>
                              <span class="number-years">18</span>
                              Years of experience in digital <br/>device repair services
                            </h3>
                            <p>We have established on 1999. We have vast experience for maintaining Computer and Network for BANK, Other Corporate Client, Industrial Corporation, Hospitals and Educational Institutes & University.
.</p>
                            <p>We feel proud that in such work where knowledge, experience and Rapid Complaint Response are most important, we didn't give them a single opportunity to say any word of complain.</p>
                            <div class="quote-block">
                                <h5>Call us to get free Quotes</h5>
                                <div class="phone-number"><a href="http://nebula.wsimg.com/51c11eed9db800d984087f71474a4716?AccessKeyId=47505DB1C4B956859425&disposition=0&alloworigin=1" target="_blank"><i class="fa fa-fighter-jet" style="color: #fff;"></i> <font style="color: #fff;"> Offers & Scheme </font></a></div>
                                
                            </div>
                        </div>
                    </div>
                </div> <!--  end .row  -->
  

            </div> <!--  end .container  -->

        </section> <!--  end .about-section -->
        
       
		<?php
include("footer.php");

?>