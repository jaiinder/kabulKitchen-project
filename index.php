<?php include("config.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Kabul Kitchen</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">		
		
    </head>

    <body>
	
		<?php
		if(isset($_REQUEST['res']) && $_REQUEST['res']=='sucess')
		{
		?>
		<script type="text/javascript">
		alert('Thank your for your reservation request! We will get back to you soon.');
		</script>
		<?php
		}
		?>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div>
                 	<button style="float:right; margin-right:10px; color:Red; background-color:white; border-radius:16px; border:1px solid blue; margin-top:-10px; padding:8px; font-family:Tahoma, Geneva, sans-serif; " ><a href="admin/" target="_blank" style=" text-decoration:none;color:Red;"> Admin</a></button>
            </div>
            <div class="container">
            
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" style="margin-top:27px;">Kabul Kitchen</a>
                        
                    </div>
                   

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#story">WHY US</a></li>
                            <li><a class="color_animation" href="#pricing">PRICING</a></li>
                            
                    <!--<li><a class="color_animation" href="#beer">BEER</a></li> -->
                            <li><a class="color_animation" href="#bread">BREAD</a></li>
                            <li><a class="color_animation" href="#featured">FEATURED</a></li>
                            <li><a class="color_animation" href="#reservation">RESERVATION</a></li>
                            <li><a class="color_animation" href="#contact">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
                
            </div><!-- /.container-fluid -->
             			
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Kabul Kitchen</h2>
                    <h2 class="white second-title">" Best in Brisbane "</h2>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6" >
                    <h1>About us</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text"> Kabul Kitchen is a place for simplicity. Good food, good beer, and good service. We arrange the birthday parties. This is a place for relax and enjoy your food items. Our kababs, Afgani food and the indian foods are one of the most popular food of brisbane..</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/kabab.jpg" width="250" height="220">
                       <img src="images/limes.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/radish.jpg"  width="250" height="220">
                       <img src="images/corn.jpg"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1><span>Affordable</span> pricing</h1>
             </div>
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter="breakfast">Breakfast</li>
                                <li class="filter" data-filter="special">Special</li>
                                <li class="filter" data-filter="desert">Desert</li>
                                <li class="filter" data-filter="dinner">Dinner</li>
                            </ul><!-- @end #filter-list -->    
                           <ul id="portfolio">
                                <li class="item breakfast"><img src="images/food_icon01.jpg" alt="1" >
                                    <h2>Pizza.....$20</h2>
                                </li>

                                <li class="item dinner special"><img src="images/food_icon02.jpg" alt="2" >
                                    <h2>Prawns Cutlet.....$20</h2>
                                </li>
                                <li class="item dinner breakfast"><img src="images/food_icon03.jpg" alt="3" >
                                    <h2>Spring Rolls.....$18</h2>
                                </li>
                                <li class="item special"><img src="images/food_icon04.jpg" alt="4" >
                                    <h2>Kabul Kabaab.....$15</h2>
                                </li>
                                <li class="item dinner"><img src="images/food_icon05.jpg" alt="Food" >
                                    <h2>Kabul Burger.....$20</h2>
                                </li>
                                <li class="item special"><img src="images/food_icon06.jpg" alt="Food" >
                                    <h2>Kheer.....$22</h2>
                                </li>
                                <li class="item desert"><img src="images/food_icon07.jpg" alt="Food" >
                                    <h2>Fruit Salad.....$32</h2>
                                </li>
                                <li class="item desert breakfast"><img src="images/food_icon08.jpg" alt="Food" >
                                    <h2>Sweet Yogurt.....$38</h2>
                                </li>
                            </ul><!-- @end #portfolio -->
                        </div><!-- @end #w -->
                    </div>
                </div>
            </div>  
        </section>


        <!-- ============ Our Beer  ============= 


        <section id ="beer" class="description_content">
            <div  class="beer background_content">
                <h1>Great <span>Place</span> to enjoy</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-5">
                   <div class="img-section">
                       <img src="images/beer_spec.jpg" width="100%">
                   </div>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-1">
                    <h1>OUR BEER</h1>
                    <div class="icon-beer fa-2x"></div>
                    <p class="desc-text">Here at Restaurant we’re all about the love of beer. New and bold flavors enter our doors every week, and we can’t help but show them off. While we enjoy the classics, we’re always passionate about discovering something new, so stop by and experience our craft at its best.</p>
                </div>
            </div>
        </section> -->


       <!-- ============ Our Bread  ============= -->


        <section id="bread" class=" description_content">
            <div  class="bread background_content">
                <h1>Our Breakfast <span>Menu</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>OUR BREAD</h1>
                    <div class="icon-bread fa-2x"></div>
                    <p class="desc-text">We love the smell of fresh baked bread. Each loaf is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/bread1.jpg" width="260" length="260" alt="Bread">
                    <img src="images/bagel.jpg" width="260" length="260" alt="Bread">
                </div>
            </div>
        </section>


        
        <!-- ============ Featured Dish  ============= -->

        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>Our Featured Dishes <span>Menu</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Have a look to our dishes!</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">Each food is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/slider1.jpg"  alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider2.jpg" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider3.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ============ Reservation  ============= -->

        <section  id="reservation"  class="description_content">
            <div class="featured background_content">
                <h1>Reserve a Table!</h1>
            </div>
            <div class="text-content container"> 
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
								
								<h2 style="margin-top:-60px;">Now Reserve your Table Online</h2>
                             
                                        
										<?php 
											$query="select * from tables";
											$result=db_query($query);
											while($row=mysqli_fetch_assoc($result))
											{
										?>
                                           <!-- <div class="col-sm-4 col-md-4 col-xs-" style="float:left; padding:20px; background:#ecc; margin:10px;">-->
                                            <div class="col-sm-4" style="float:left; padding:20px;">
												
												
												
													<table align="center" style=" border:1px solid #ccc; ">
														<tr>
															<td style="padding:10px; margin-top:20px;">
														<?php
															
																echo"<img src='admin/table_img/".$row['tb_img']."' style='max-width:100%;' />","<br>";
																echo "<p style='margin-top:20px; font-weight:bold;'>", $row['tb_name'],"</p>";
																echo "<p style='margin:10px 0px; font-size:13px;'> For Person(s) :",$row['tb_person'],"</p>";
																//echo "<a href='reserve.php?id='".$row['tb_id']."'> <button type='submit' name='submit' style='float:none;'>Book Now</button></a>";
														?>
														<a style="text-decoration:none; text-align:center; float:none;" href="reserve.php?id=<?php echo $row['tb_id']; ?>"  class="text-center form-btn form-btn">
															<!--<button type="submit"  >--> Book Now <!--</button>-->
														</a>
															<div style="clear:both;"></div>
															</td>
														</tr>
													</table>
													
												
											</div>
											<?php
												}
											?>
											   <!-- Name 
                                                <input type="text" name="res_fname" id="first_name" required class="form" placeholder="First Name" />
                                                <input type="text" name="res_lname" id="last_name" required class="form" placeholder="Last Name" />
                                                <input type="text" name="res_state" id="state" required class="form" placeholder="State" />
                                                <input type="date" name="res_date" id="datepicker" required class="form" placeholder="Reservation Date" style="line-height:100%;" min="<?php //echo date('Y-m-d'); ?>" />-->
                                          

											<!--<div class="col-lg-6 col-md-6 col-xs-6">
                                                
                                                <input type="text" name="res_phone" id="phone" required class="form" placeholder="Phone" />
                                                <input type="text" name="res_guest" id="guest" required class="form" placeholder="Guest Number" />
                                                <input type="email" name="res_email" id="email" required class="form" placeholder="Email" />
                                                <input type="text" name="res_subject" id="subject" required class="form" placeholder="Subject" />
                                            </div>

                                            <div class="col-xs-6 ">
                                                
                                                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Book now</button> 
                                            </div>-->
                                            
                             
                                 
                                    
                                    <!--<div class="col-lg-4 col-md-6 col-xs-12">
                                        
                                        <div class="right-text">
                                            <h2>Hours</h2><hr>
                                            <p>Monday to Friday: 7:30 AM - 9:30 PM</p>
                                            <p>Saturday & Sunday: 8:00 AM - 9:00 PM</p>
                                            
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </section>

        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">FOLLOW</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">OR DIAL</span>
                    <span class="social_info"><a class="color_animation" href="tel:883-335-6524">0450785649</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section id="contact">
            <div class="map">
                <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0277251784732!2d153.20155431512777!3d-27.716430233876885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b916a7ff36145db%3A0x71960784d089ce4f!2sKabul+Kitchen+Restaurant!5e0!3m2!1sen!2sau!4v1495633662095" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="contact.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" required class="form" placeholder="Name" />
                                        <!-- Email -->
                                        <input type="email" name="email" id="email" required class="form" placeholder="Email" />
                                        <!-- Subject -->
                                        <input type="text" name="subject" id="subject" required class="form" placeholder="Subject" />
                                    </div><!-- End Left Inputs -->
                                    <!-- Right Inputs -->
                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                                    </div><!-- End Right Inputs -->
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit" id="submit" name="submit" class="form-btn">Send Message</button> 
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Kabul Kitchen 2017</div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">BY the group no 2 <a href="#" target="_blank">Us</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
	
		
		
</html>