<?php
session_start();
 

?>
<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" class="ihome">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <title>Fortis</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/blue.css" id="style-switch" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.min.css" media="screen" />
    <!--[if IE 9]>
    	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    
    <link rel="icon" type="image/png" href="images/fevicon.png">

    <link rel="stylesheet" type="text/css" href="css/slides.css" />
    <link rel="stylesheet" type="text/css" href="css/inline.min.css" />
	

</head>
    <body>
    		<div id="loader-overlay"><img src="images/loader.gif" alt="Loading" /></div>
			
            <header>
            
            <div class="header-bg">
            
            <div id="search-overlay">
            <div class="container">
        						<div id="close">X</div>
        	
        						<input id="hidden-search" type="text" placeholder="Start Typing..." autofocus autocomplete="off"  /> <!--hidden input the user types into-->
        						<input id="display-search" type="text" placeholder="Start Typing..." autofocus autocomplete="off" /> <!--mirrored input that shows the actual input value-->
        					</div></div>
               
                	
                    <!--Topbar-->
                    <div class="topbar-info no-pad">                    
                        <div class="container">                     
                            <div class="social-wrap-head col-md-2 no-pad">
                                <ul>
                                <li><a href="#"><i class="icon-facebook head-social-icon" id="face-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-social-twitter head-social-icon" id="tweet-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-google-plus head-social-icon" id="gplus-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-linkedin head-social-icon" id="link-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-rss head-social-icon" id="rss-head" data-original-title="" title=""></i></a></li>
                                </ul>
								<?php 
								$img=$_SESSION['image'];
								$name=$_SESSION['name'];
								echo "<a href='profile.php'><img src='$img' width=40px height=40px style='padding:8px;'/></a>";
								
								?>
								
                            </div>     
								
									
                            <div class="top-info-contact pull-right col-md-6">Call Us Today! +91 22 61532 532  |    contact@fortis.com  <div id="search" class="fa fa-search search-head"></div>
							
                            </div>  
								
                        </div>
						
                    </div><!--Topbar-info-close-->
                    
                    
                    
                    
                    
                    <div id="headerstic">
                    
                    <div class=" top-bar container">
                    	<div class="row">
                            <nav class="navbar navbar-default" role="navigation">
                              <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                          
                          <button type="button" class="navbar-toggle icon-list-ul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                          </button>
                          <button type="button" class="navbar-toggle icon-rocket" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                          </button>

                          <a href="index.php"><div class=""><img src="images/logo.png"/></div></a>
                        </div>
							
                            
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  
                                  <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php"><i class="icon-home"></i>Home</a></li>

                            <li class="dropdown"><a href="services.php" class="dropdown-toggle" ><i class="icon-cog"></i>Services<b class="icon-angle-down"></b></a>
                                
                            </li>
                            
                            <li ><a href="about-us.php" ><i class="icon-file"></i>About Us</a>
                                
                            </li>
                            
                            
                            
                          
                            <li><a href="contact-2.php" >Contact Us</b></a>
                                
                            </li>
                            <li><a href="profile.php"><i class="icon-home"></i>Profile</a></li>
							<li><a href="appointment.php"><i class="icon-home"></i>Appointments</a></li>
							<li><a href="feedback.php"><i class="icon-home"></i>Feedback</a></li>
							<li><a href="logout.php"><i class="icon-home"></i>Logout</a></li>
							
									
                          </ul>
						  
						  
                                </div><!-- /.navbar-collapse -->
                                
                                
                                <div class="hide-mid collapse navbar-collapse option-drop" id="bs-example-navbar-collapse-2">
                                  
                                  
                                  <ul class="nav navbar-nav navbar-right other-op">
                                    <li><i class="icon-phone2"></i>+91 9028556688</li>
                                    <li><i class="icon-mail"></i><a href="#" class="mail-menu">demo@companyname.com</a></li>
                                    
                                    <li><i class="icon-globe"></i>
                                        <a href="#" class="mail-menu"><i class="icon-facebook"></i></a>
                                        <a href="#" class="mail-menu"><i class="icon-google-plus"></i></a>
                                        <a href="#" class="mail-menu"><i class="icon-linkedin"></i></a>
                                        <a href="#" class="mail-menu"><i class="icon-social-twitter"></i></a>
                                    </li>
                                    <li><i class="icon-search"></i>
                                    <div class="search-wrap"><input type="text" id="search-text" class="search-txt" name="search-text">
                                    <button id="searchbt" name="searchbt" class="icon-search search-bt"></button></div>
                                    </li>
                                    
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                                
                                <div class="hide-mid collapse navbar-collapse cart-drop" id="bs-example-navbar-collapse-3">
                                  
                                  
                                  <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#"><i class="icon-cart"></i>0 item(s) - $0.00</a></li>
                                    <li><a href="#"><i class="icon-user"></i>My Account</a></li>
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                                
                                
                                
                              </div><!-- /.container-fluid -->
							  
                            </nav>
                    	</div>  
								
                    </div><!--Topbar End-->
                	</div>
                    
                    
                    
                    
                    
                    
                    
              </div>
            </header>
            
            <div class="complete-content">	
           
            <div class="container full-width-container ihome-banner">
            	<div class="banner col-sm-12 col-xs-12 col-md-12">
                	
                    <ul>
            <!-- THE BOXSLIDE EFFECT EXAMPLES  WITH LINK ON THE MAIN SLIDE EXAMPLE -->

              
             
              <li data-transition="papercut" data-slotamount="7">
               
                    <!-- MAIN IMAGE -->
                    <img src="images/new-slider/s1-bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    

                    <!-- LAYER NR. 2 -->
                    
                    <!-- LAYER NR. 3 -->
                    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lft skewtoright imed-sl1"
                        data-x="left"
                        data-y="45"
                        data-hoffset="61"
                        data-speed="1600"
                        data-start="1900"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/slider-4-doc.png" alt="" class="img-responsive">
                    </div>
                    
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption bluebg-t1 sfr skewtoright imed-sl1"
                        data-x="right"
                        data-y="115"
                        data-hoffset="-60"
                        data-speed="1000"
                        data-start="2400"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >Highly Qualified Doctors
                    </div>


                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption bluebg-t2 sfr skewtoright imed-sl1"
                        data-x="right"
                        data-y="222"
                        data-hoffset="-10"
                        data-speed="1000"
                        data-start="2900"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >Backed up with many years of experience!
                    </div>


                    <!-- LAYER NR. 7 -->
                    
                    <!-- LAYER NR. 8 -->
                
              
             </li> 


             <li data-transition="papercut" data-slotamount="7">
               
                    <!-- MAIN IMAGE -->
                    <img src="images/new-slider/s2-bg.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption lfb stl imed-sl1"
                        data-x="left"
                        data-y="bottom"
                        data-hoffset="-50"
                        data-speed="1000"
                        data-start="1000"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s2-img1.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption skewfromright stl imed-sl1"
                        data-x="left"
                        data-y="65"
                        data-hoffset="-20"
                        data-speed="1500"
                        data-start="1300"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s2-img2.png" alt="" class="img-responsive">
                    </div>

                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="173"
                        data-hoffset="583"
                        data-speed="1400"
                        data-start="1600"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic1.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="143"
                        data-hoffset="493"
                        data-speed="1400"
                        data-start="1900"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic2.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="115"
                        data-hoffset="408"
                        data-speed="1400"
                        data-start="2200"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic3.png" alt="" class="img-responsive">
                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="89"
                        data-hoffset="332"
                        data-speed="1400"
                        data-start="2500"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic4.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="68"
                        data-hoffset="268"
                        data-speed="1400"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic5.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="47"
                        data-hoffset="204"
                        data-speed="1400"
                        data-start="3100"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic6.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="222"
                        data-hoffset="478"
                        data-speed="1400"
                        data-start="3400"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic7.png" alt="" class="img-responsive">
                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="177"
                        data-hoffset="370"
                        data-speed="1400"
                        data-start="3700"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic8.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="140"
                        data-hoffset="278"
                        data-speed="1400"
                        data-start="4000"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic9.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="108"
                        data-hoffset="198"
                        data-speed="1400"
                        data-start="4300"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic10.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="76"
                        data-hoffset="120"
                        data-speed="1400"
                        data-start="4600"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic11.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="292"
                        data-hoffset="398"
                        data-speed="1400"
                        data-start="4900"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic12.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="240"
                        data-hoffset="294"
                        data-speed="1400"
                        data-start="5200"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic13.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="196"
                        data-hoffset="203"
                        data-speed="1400"
                        data-start="5500"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic14.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="158"
                        data-hoffset="123"
                        data-speed="1400"
                        data-start="5800"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic15.png" alt="" class="img-responsive">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lft stt imed-sl1"
                        data-x="left"
                        data-y="123"
                        data-hoffset="51"
                        data-speed="1400"
                        data-start="6100"
                        data-easing="Power4.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><img src="images/new-slider/s3-ic16.png" alt="" class="img-responsive">
                    </div>

                    
                    
                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption whitebg-t1 sfr skewtoright imed-sl1"
                        data-x="right"
                        data-y="115"
                        data-hoffset="-60"
                        data-speed="1500"
                        data-start="6500"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >Now you can easily take<br>appointments !
                    </div>


                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption whitebg-t2 sfr skewtoright imed-sl1"
                        data-x="right"
                        data-y="222"
                        data-hoffset="-10"
                        data-speed="1500"
                        data-start="6800"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        >With our Android <br>& IOS Application !
                    </div>


                    <!-- LAYER NR. 8 -->
                    

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption s1-but customin skewtoright imed-sl1"
                        data-x="center"
                        data-y="365"
                        data-hoffset="205"
                        data-speed="1500"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-start="7400"
                        data-easing="Back.easeOut"
                        data-endspeed="400"
                        data-endeasing="Power1.easeIn"
                        ><a href="#">Download Now</a></div>
                    
                    
                    
              
             </li>


            
            </ul>
                    
                </div>
            </div>
             
            
            
            <center><?php
            echo "welcome <b><u><a href=profile.php>".$name."!</a></u></b>";
								?></center>
            
            <!--Icon Boxes 1-->
            <div class="container">
            	<div class="row">
            	<div class="no-pad icon-boxes-1"> 
                
                	<!--Icon-box-start-->
                    <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
                     <div class="icon-box-3 wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="150">
                    	<div class="icon-boxwrap2"><i class="fa fa-medkit icon-box-back2"></i></div>
                        <div class="icon-box2-title">24 hour Service</div>
                        <p>Day and Night avilability of doctors! Ambulances also available 24X7</p>
                        <!--<section class="color-10">
                            <nav class="cl-effect-10">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>
                            </nav>
                        </section>-->
                        <div class="iconbox-readmore"><a href="#">Read More</a></div>
                     </div>   
                    </div>
                    
                    <!--Icon-box-start-->
                    <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
                     <div class="icon-box-3 wow fadeInDown" data-wow-delay="0.9s" data-wow-offset="150">
                    	<div class="icon-boxwrap2"><i data-icon="\e609" class="icon-stethoscope icon-box-back2"></i></div>
                        <div class="icon-box2-title">Health Care Solutions</div>
                        <p>Specialists in treatment of Cancer and Cardiac diseases</p>
                        <!--<section class="color-10">
                            <nav class="cl-effect-10">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>
                            </nav>
                        </section>-->
                        <div class="iconbox-readmore"><a href="#">Read More</a></div>
                     </div>   
                    </div>
                    
                    <!--Icon-box-start-->
                    <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
                     <div class="icon-box-3 wow fadeInUp" data-wow-delay="1.2s" data-wow-offset="150">
                    	<div class="icon-boxwrap2"><i class="icon-ambulance icon-box-back2"></i></div>
                        <div class="icon-box2-title">Advanced Technology</div>
                        <p>Cutting edge technology for diagnosis and operation!</p>
                        <!--<section class="color-10">
                            <nav class="cl-effect-10">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>
                            </nav>
                        </section>-->
                        <div class="iconbox-readmore"><a href="#">Read More</a></div>
                     </div>   
                    </div>
                    
                    <!--Icon-box-start-->
                    <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
                     <div class="icon-box-3 notViewed wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="150">
                    	<div class="icon-boxwrap2"><i class="fa fa-clock-o icon-box-back2"></i></div>
                         <div class="icon-box2-title">Opening Hours</div>
                        <ul>
                        <li>Monday - Friday <span class="ibox-right-span">8.00  - 18.00</span></li>
                        <li>Saturday <span class="ibox-right-span">8.00  - 16.00</span></li>
                        <li>Sunday <span class="ibox-right-span">8.00 - 13.00</span></li>
                        </ul>
                     </div>   
                    </div>
                
                </div>
                </div>
            </div><!--Icon Boxes 1 end-->
            
            
            
        	<div class="parallax-out wpb_row vc_row-fluid ihome-parallax">    
              
                
                    <div id="second" class="upb_row_bg vcpb-hz-jquery" data-upb_br_animation="" data-parallax_sense="30" data-bg-override="ex-full">
                    
                          <div class="container">
                          	<div class="row">
                          
                          <div class="bg col-lg-4 col-sm-4 col-md-5 col-xs-12 notViewed wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="200"></div>
                          
                            <div class="float-right col-lg-7 col-sm-7 col-md-7 col-xs-12">
                                
                                <div class="iconlist-wrap">
                                <div class="subtitle notViewed wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="20">Why <span class="iconlist-mid-title">Choose</span> Us</div>
                                <ul>
                                	<li class="notViewed wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="50">
                                	<i class="icon-hospital2 icon-list-icons"></i>
                                	<div class="iconlist-content">
                                    	
                                    	<div class="iconlist-title">Great Infrastructure</div>
                                        <p class="iconlist-text">World class Infrastructure with many operation theatres, ICUs, Wards etc. </p>
                                    </div>
                                    
                                	</li>
                                    
                                    <li class="notViewed wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="60">
                                	<i class="fa fa-user-md icon-list-icons"></i>
                                	<div class="iconlist-content">
                                    	
                                    	<div class="iconlist-title">Qualified Doctors</div>
                                        <p class="iconlist-text">  We have very qualified and highly experienced Doctors to treat you! </p>
                                    </div>
                                   
                                	</li>
                                    
                                    <li class="notViewed wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="70">
                                	<i class="fa fa-ambulance icon-list-icons"></i>
                                	<div class="iconlist-content">
                                    	
                                    	<div class="iconlist-title">Emergency Departments</div>
                                        <p class="iconlist-text"> Emergency handling department on any hour of the day, we are just one call away! </p>
                                    </div>
                                	</li>
                                </ul>
                                </div>
                                
                                
                            </div>
                        </div> <!--.story-->
                        </div>
                    </div> <!--#second-->
                    
                </div>
           
            
            
            <!--Purchase Box-->
            
             
            <!--Purchase Box-->
            
            
            
             
             <!--Latest Post Start-->
             
                        <!--Post item-->
                        
                         
                         <!--Post item-->
                       
                 
                 
                 
                 <!--Latest Post End-->
             
                 <!--Departments Start-->
                 
                   <div class="testimonial-wrap ihome-testi-wrap">
            
            
            	<div class="container">
                <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left client-logo-flexx wow fadeInUp" data-wow-delay="0.2s" data-wow-offset="100">
                     <i class="fa fa-quote-right testi-quote"> Vision</i>
                     <div class="testimonial-content top"></div>
                     
                    <center> <P style="font-size:20px;">
					 Saving & Enriching Lives. To be nationally respected for excellence in patient care and most trusted for personalized coordinated care. </P><center>
                     
                     </div>
                        
                </div>
                </div>
            
            </div>
                 <!--Departments End-->
                
        <!--Counter Start-->
            
            <div class="Counter-wrap" id="counters">
            
            <div id="third" class="back-color-holder">
            	<div class="container">
                <div class="row">
                
                
                <div class="banner-bottom-text2 no-pad col-xs-12 wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="100">
                
                <div class="subtitle">About Fortis</div>
        	    
        	    </div>
                
                
                	<!--Counter Box-->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    	<div class="counter-box">
                        	
                            <div class="counter-style" id="myTargetElement"></div>
                            <div class="counter-lable">Doctors</div>
                            
                        </div>
                    </div>
                    
                    <!--Counter Box-->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    	<div class="counter-box">
                        	
                            <div class="counter-style" id="myTargetElement2"></div>
                            <div class="counter-lable">Clinic Rooms</div>
                            
                        </div>
                    </div>
                    
                    <!--Counter Box-->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    	<div class="counter-box">
                        	
                            <div class="counter-style" id="myTargetElement3"></div>
                            <div class="counter-lable">Awards</div>
                            
                        </div>
                    </div>
                    
                    <!--Counter Box-->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    	<div class="counter-box">
                        	
                            <div class="counter-style" id="myTargetElement4"></div>
                            <div class="counter-lable">Happy Patients</div>
                            
                        </div>
                    </div>
                    
                    
                </div>
                </div>
                </div>
            
            </div>
            
        <!--Counter End-->
        <!--Testimonail Wrap-->
            <div class="testimonial-wrap ihome-testi-wrap">
            
            
            	<div class="container">
                <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left client-logo-flexx wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="100">
                     <i class="fa fa-quote-right testi-quote"> Mission</i>
                     <div class="testimonial-content top"></div>
                     
                    <center> <P style="font-size:20px;">
					To be a globally respected healthcare organization known for Clinical Excellence and Distinctive Patient Care.</P><center>
                     
                     </div>
                        
                </div>
                </div>
            
            </div>
           
        <!--Testimonail Wrap-->
                 
                 
                 
            
               <!--Footer Start-->
            
            </div>
            <div>
           
            
           <section class="complete-footer">
    <footer id="footer">
    
      <div class="container">
          <div class="row">
              <!--Foot widget-->

         
                 
				 <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                <div class="foot-widget-title">Our Address</div>
                <address class="foot-address">
                  <div class="col-xs-12 no-pad"><i class="icon-globe address-icons"></i>Fortis Health Care Center <br />123 Fifth Avenue <br />Mulund, Mumbai 400074.</div>
                    <div class="col-xs-12 no-pad"><i class="icon-phone2 address-icons"></i>+123 455 755</div>
                    <div class="col-xs-12 no-pad"><i class="icon-file address-icons"></i>+123 555 755</div>
                    <div class="col-xs-12 no-pad"><i class="icon-mail address-icons"></i>contact@fortis.com</div>
                </address>
                </div>
                
                <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-3 recent-post-foot foot-widget">
                  <div class="foot-widget-title">Recent Posts</div>
                  <ul>
                      <li><a href="#">@josh got treated and is out of danger!<br /><span class="event-date">3 days ago</span></a></li>
                        <li><a href="#">Cancer is curable!<br /><span class="event-date">5 days ago</span></a></li>
                        <li><a href="#">Best Cancer treatment Award!<br /><span class="event-date">7 days ago</span></a></li>
                    </ul>
                </div>
                
                 <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-3 recent-tweet-foot foot-widget">
                  <div class="foot-widget-title">Recent Tweets</div>
                  <ul>
                      <li>Fortis has a world class medical equipments!<b>t.co/fortis</b><br /><span class="event-date">7 days ago</span></li>
                        <li>Fortis is among the top health care centers! <b>t.co/fortis</b><br /><span class="event-date">7 days ago</span></li>
                    </ul>
                </div>
                
                <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                  <div class="foot-widget-title">newsletter</div>
                  <p>Subscribe for newsletter on cancer & Heart diseases </p>
                    <div class="news-subscribe"><input type="text" class="news-tb" placeholder="Email Address" /><button class="news-button">Subscribe</button></div>
                    <div class="foot-widget-title">social media</div>
                    <div class="social-wrap">
                        <ul>
                        <li><a href="#"><i class="icon-facebook foot-social-icon" id="face-foot" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a></li>
                        <li><a href="#"><i class="icon-social-twitter foot-social-icon" id="tweet-foot" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus foot-social-icon" id="gplus-foot" data-toggle="tooltip" data-placement="bottom" title="Google+"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin foot-social-icon" id="link-foot" data-toggle="tooltip" data-placement="bottom" title="Linked in"></i></a></li>
                        <li><a href="#"><i class="icon-rss foot-social-icon" id="rss-foot" data-toggle="tooltip" data-placement="bottom" title="RSS"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
         </div>       
         
    </footer>
    
    <div class="bottom-footer">
    <div class="container">
    
        <div class="row">
            <!--Foot widget-->
            <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
            <p class="col-xs-12 col-md-5 no-pad">Copyright 2015 Fortis | All Rights Reserved | Designed by ADDB Inc</p>

            </div>
        </div>
    </div> 
    </div>
    
    </section>
    
 
        	
        
    <!--JS Inclution-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>  
    <script type="text/javascript" src="bootstrap-new/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.min.js"></script>
    <script type="text/javascript" src="js/jquery.imedica.min.js"></script>
    <script type="text/javascript" src="js/custom-imedicajs.min.js"></script>
	<script type='text/javascript'>
		$(window).load(function(){
			$('#loader-overlay').fadeOut(900);
			$("html").css("overflow","visible");
		});
	</script>

    </body>
</html>
<?php
mysql_close($connection); // Closing Connection
?>