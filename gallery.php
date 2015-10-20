<?php
			$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "fortis";
$prefix = "";
if(isset($_POST['submit'])) 
{
$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
mysql_select_db($mysql_database,$con) or die("Could not select database");

	}		
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

                          <a href="index.html"><div class=""><img src="images/logo.png"/></div></a>
                        </div>
                            
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  
                                  
                                  <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html"><i class="icon-home"></i>Home</a></li>

                            <li class="dropdown"><a href="services.php" class="dropdown-toggle" ><i class="icon-cog"></i>Services<b class="icon-angle-down"></b></a>
                                
                            </li>
                            
                            <li class="dropdown"><a href="about-us.php" class="dropdown-toggle" ><i class="icon-file"></i>About Us<b class="icon-angle-down"></b></a>
                                
                            </li>
                            
                            
                            
                          
                            <li class="dropdown"><a href="contact-2.php" class="dropdown-toggle"><i class="icon-envelope"></i>Contact Us<b class="icon-angle-down"></b></a>
                                
                            </li>
                           
                            <li class="active"><a href="feedback.php"><i class="icon-home"></i>Feedback</a></li>
							<li><a href="login.php"><i class="icon-home"></i>Login</a></li>
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
                                
                                
                                
                                
                              </div><!-- /.container-fluid -->
                            </nav>
                    	</div>    
                    </div><!--Topbar End-->
                	</div>
                  
           
        <!--Register-->
		
		<div name="register">
		<div class="container">
		<br><br>
		<br><br>
		<br><br>
		
		<center>
		<table border="1px"/>
		<tr>
		<th style="padding:10px;">
		<img src="marketting/Charity1.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		
		<th style="padding:10px;">
		<img src="marketting/Charity2.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		<th style="padding:10px;">
		<h1></h1>
		<img src="marketting/Charity3.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		
		</TR>
		<tr>
			
		<th style="padding:10px;">
		<img src="marketting/HT.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		<th style="padding:10px;">
		<h1></h1><img src="marketting/ht1.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		<th style="padding:10px;">
		<h1></h1><img src="marketting/marketing1.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		</TR>
		<tr>
		
		
		<th style="padding:10px;">
		<img src="marketting/Charity1.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		
		<th style="padding:10px;">
		<img src="marketting/disposal.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		<th style="padding:10px;">
		<img src="marketting/disposal2.jpg" height="200px" width="300px"/><hr style="color:black;height:2px;">
		</th>
		
		</TR>
		
		
		</table>
	  </center>
<br><br>
			</center>
			</div>
			</div>
			</section>
			
			
               <!--Footer Start-->
 
        	
        
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
