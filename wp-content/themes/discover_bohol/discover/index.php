			
<?php

if (isset($_POST['submit'])){


        
        $myemail = "discoverboholbookings@gmail.com";
                    
        //declare our variables  
        $captcha = $_POST['captcha'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['contact'];
        $message = $_POST['message'];
        
        if ($captcha == 6 || $captcha == "six"){
        //get todays date
        date_default_timezone_set("Asia/Manila");
        $todayis = date("l, F j, Y, g:i a") ;
        //set a title for the message
        $subject = "Message from Your Discover Bohol Tours Website";
        
        $body = 
            "Name: $name\n\n <br /><br />"
            . "Email: $email\n\n <br /><br />"
            . "Phone Number: $number\n\n <br /><br />"
            . "Message: $message\n\n <br /><br />"
            . "Date Sent: $todayis"
            ;
            
        $sms_msg = 
            "Name: $name\n"
            . "Email: $email\n"
            . "Phone Number: $number\n"
            . "Message: $message\n"
            . "Date Sent: $todayis"
            ;
            
        $headers = 'From: '.$email.'' . "\r\n" .
            'Reply-To: '.$email.'' . "\r\n" .
            'Content-type: text/html; charset=utf-8' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        //put your email address here
        mail($myemail, $subject, $body, $headers);
        
        // sms notification
        
        function gw_send_sms($user,$pass,$sms_from,$sms_to,$sms_msg)  
                {           
                            $query_string = "api2.aspx?apiusername=".$user."&apipassword=".$pass;
                            $query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
                            $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
                            $url = "http://gateway80.onewaysms.ph/".$query_string;       
                            $fd = @implode ('', file ($url));      
                            if ($fd)  
                            {                       
                        if ($fd > 0) {
                        Print("MT ID : " . $fd);
                        $ok = "success";
                        }        
                        else {
                        print("Please refer to API on Error : " . $fd);
                        $ok = "fail";
                        }
                            }           
                            else      
                            {                       
                                        // no contact with gateway                      
                                        $ok = "fail";       
                            }           
                            return $ok;  
                }  
         Print("Sending to one Discover Bohol " . gw_send_sms('APIPMZNUW5CCB', 'APIPMZNUW5CCBPMZNU', 'DISCOVER', '09334865197', $sms_msg));
        
        
        ?>
        <script type="text/javascript">
                             window.location = "thankyou.html";
         </script>
        <?php 
        }else{
            ?>
        <script type="text/javascript">
                             alert('Please answer the security question properly. You may answer in number or word in lowercase');
         </script>
        <?php 
            }
        
        }
        ?>
<!DOCTYPE html>
<html>

	<head>
    
        <title>Discover Bohol Tours - Bohol's best travel and tour provider</title>


        <!-- META Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Discover Bohol Tours">
        <meta name="robots" content="index, follow, archive">
        <meta name="revisit-after" content="2 days">    
        <meta name="rating" content="general">
        <meta name="publication_date" content="2016">
        <meta name="zipcode" content="6300">
        <meta name="city" content="Tagbilaran City">
        <meta name="state" content="Bohol">
        <meta name="country" content="Philippines ">
        
        <meta name="description" content="Discover Bohol Tours offers you the best deals for your unforgettable Bohol experience. Enjoy hassle-free bookings for your amazing Bohol trip. Let us take you the beautiful spots and sights Bohol has to offer.">
        <meta name="keywords" content="bohol tours,affordable bohol tours,bohol accomodation,bohol travel,bohol travel and tours,bohol tours travel,bohol tourist spots,bohol tour packages,bohol countryside tour,bohol package tour promo,bohol package tour promo 2016,bohol tour package,bohol package tour,bohol countryside tour,bohol vehicle rental,bohol car rental,bohol van rental, panglao island hopping,panglao island tour,,bohol island tour,bohol island travel,island,bohol,philippines ">
        
        <meta name="google-site-verification" content="Q4EsWn3E2AuSW5ajBP3FoQ6aSIW1D-VOClThZwBpIuA" />
        <meta name="msvalidate.01" content="5563D4FF10B3EEFCA8C7B09FBB98A150" />
        
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Discover Bohol Tours - Bohol's best travel and tour provider">
        <meta property="og:description" content="Discover Bohol Tours offers you the best deals for your unforgettable Bohol experience. Enjoy hassle-free bookings for your amazing Bohol trip. Let us take you the beautiful spots and sights Bohol has to offer.">
        <meta property="og:url" content="http://www.discoverboholtours.com/">
        <meta property="og:site_name" content="Discover Bohol Tours">
        <meta property="og:image" content="http://discoverboholtours.com/assets/images/hero.jpg" />
        
        <meta name="twitter:card" content="summary">
        <meta name="twitter:description" content="Discover Bohol Tours offers you the best deals for your unforgettable Bohol experience. Enjoy hassle-free bookings for your amazing Bohol trip. Let us take you the beautiful spots and sights Bohol has to offer.">
        <meta name="twitter:title" content="Discover Bohol Tours - Discover how beautiful the Island of Bohol in the Philippines">
        
     
        <!-- Loading Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Loading Font Styles -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


        <!-- Loading Elements Styles -->   
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        
        <!-- Owl Stylesheets -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        
        <!-- Favicons -->
        <link rel="icon" href="assets/images/fav/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/images/fav/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/fav/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/fav/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/fav/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/images/fav/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/images/fav/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/images/fav/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/images/fav/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="assets/images/fav/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="assets/images/fav/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="assets/images/fav/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="assets/images/fav/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="assets/images/fav/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="assets/images/fav/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="assets/images/fav/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="assets/images/fav/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="assets/images/fav/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="assets/images/fav/mstile-310x310.png" />
        

            <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-83193064-1', 'auto');
          ga('send', 'pageview');
        
        </script>
        <?php endif; ?>
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MR9H42"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MR9H42');</script>
        <!-- End Google Tag Manager -->

    </head>
	<body>
        <div class="wrap">
            
            <nav class="main-nav">
                <div id="nav-icon2">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>    
                <a class="logo" href="#hero" ><img src="assets/images/logo.png" alt="" class="button_effect"></a>
                <ul>
                    <li class=""><a href="#whyUs">About US</a></li>
                    <li class=""><a href="#dayTours">Bohol Day Tours</a></li>
                    <li class=""><a href="#packageTours">Package Tour</a></li>
                    <li class=""><a href="#reviews">Reviews</a></li>
                    <li class=""><a href="#legalities">Legalities</a></li>
                    <li class=""><a href="#transport_rentals">Vehicle Rentals</a></li>
                    <li class=""><a href="#form">BOOK NOW!</a></li>
                    <li class=""><a href="tel:+639613883052"><i class="fas fa-phone hvr-buzz-out"></i>&nbsp;0933-486-5197</a></li>
                </ul>
            </nav>
            <!-- HERO SECTION -->
            <section class="hero" id="hero">
                            
                <div class="type_wrap">
                    <span id="typed" style="white-space:pre;">ESCAPE <br/ ><strong>COMPLETELY.</strong></span>
                    <div class="logo_wrap">
                        <h1><span class="discover">Discover</span> <span class="bohol">Bohol!</span></h1>
                    </div>
                </div>
                
            
                <div id="slideshow">
                   <div>
                     <div class="img1"></div>
                   </div>
                   <div>
                     <div class="img2"></div>
                   </div>
                   <div>
                     <div class="img3"></div>
                   </div>
                   <div>
                     <div class="img4"></div>
                   </div>
                   <div>
                     <div class="img5"></div>
                   </div>
                   <div>
                     <div class="img6"></div>
                   </div>
                </div>
            </section>
            <!-- END of Hero Section -->

            <!-- Why Us -->
            <section class="why_us" id="whyUs">
                <h1 class="title">ABOUT <span class="discover">Discover</span> <span class="bohol">Bohol</span></h1>
                <div class="company_desc">
                    <img class="ribbon" src="assets/images/logo_ribbon.png">
                    <h3>
                        <span class="discover">Discover</span> <span class="bohol">Bohol</span> offers you the best deals for your unforgettable Bohol experience. Enjoy hassle-free bookings for your amazing Bohol trip. Let us take you to the beautiful spots and sights Bohol has to offer.
                        <br/><br/>
                        Our company is dedicated to give you unparalleled service in providing you the best yet very affordable rates in car/mpv/van/motorcycle rentals, accommodation and tour packages. Enjoy a number of options on how you want to discover Bohol. Feeling adventurous? Just grab a map or prepare your GPS and rent one of our motorcycles. Or if you want some comfort, you can rent a car or van and let our friendly and honest tour drivers take you around. Prefer convenience and let us take care of your accommodation as well? No problem!
                        <br/><br/>

                        <span class="discover">Discover</span> <span class="bohol">Bohol</span> guarantees you an enjoyable vacation in the wonderful island of Bohol. What are you waiting for? <span class="discover">Discover</span> <span class="bohol">Bohol</span> now!
                    </h3>
                </div>
            </section>
            <!-- End of Why us -->

            <!-- Day Tours -->
            <section class="day_tours" id="dayTours">
                <h1 class="title">BOHOL DAY TOURS</h1>

                <!-- Countryside Tour -->
                <div class="cards">
                    <div class="card button_effect">
                      <img class="card-img-top" src="assets/images/day_tours/CT.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Countryside</h5>
                        <p class="card-text">Explore the natural and cultural wonders of Bohol. Experience fun and enjoyment visiting Bohol’s famous tourist spots...
                        </p>
                        <a href="day_tours.php#ct_tour" class="btn btn1 button_effect">Discover!</a>
                        <a href="#form" class="btn btn2 button_effect">Book Now!</a>
                      </div>
                    </div>
                    <div class="card button_effect">
                      <img class="card-img-top" src="assets/images/day_tours/PT.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Panglao</h5>
                        <p class="card-text">Panglao Island is not only known for its white sand beaches, but also for its old Spanish-era churches...</p>
                        <a href="day_tours.php#pt_tour" class="btn btn1 button_effect">Discover!</a>
                        <a href="#form" class="btn btn2 button_effect">Book Now!</a>
                      </div>
                    </div>
                    <div class="card button_effect">
                      <img class="card-img-top" src="assets/images/day_tours/IH.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Island Hopping</h5>
                        <p class="card-text">Meet the playful dolphins of Balicasag Island, go snorkeling to discover the underwater wonders of Bohol...</p>
                        <a href="day_tours.php#ih_tour" class="btn btn1 button_effect">Discover!</a>
                        <a href="#form" class="btn btn2 button_effect">Book Now!</a>
                      </div>
                    </div>
                    <div class="card button_effect">
                      <img class="card-img-top" src="assets/images/day_tours/danao.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Danao E.A.T</h5>
                        <p class="card-text">If you love extreme adventure, then you must try our Danao Extreme Adventure Tour package. Enjoy challenging...</p>
                        <a href="day_tours.php#danao" class="btn btn1 button_effect">Discover!</a>
                        <a href="#form" class="btn btn2 button_effect">Book Now!</a>
                      </div>
                    </div>
                    <div class="card button_effect">
                      <img class="card-img-top" src="assets/images/day_tours/ANDA.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">A N D A</h5>
                        <p class="card-text">Get close to nature and explore what Anda and Candijay, Bohol has to offer. This has always been out from...</p>
                        <a href="day_tours.php#anda" class="btn btn1 button_effect">Discover!</a>
                        <a href="#form" class="btn btn2 button_effect">Book Now!</a>
                      </div>
                    </div>
                    <div class="card button_effect">
                      <img class="card-img-top" src="assets/images/day_tours/jardin.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Jardin Necitas</h5>
                        <p class="card-text">Jardin Necitas in Pilar, Bohol is the newest tourist spot in the Province of Bohol. A garden of illuminated LED flowers...</p>
                        <a href="day_tours.php#necitas" class="btn btn1 button_effect">Discover!</a>
                        <a href="#form" class="btn btn2 button_effect">Book Now!</a>
                      </div>
                    </div>
                    <div class="card button_effect">
                      <img class="card-img-top" src="assets/images/day_tours/Firefly.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Firefly Watching</h5>
                        <p class="card-text">A truly magical evening on the Abatan River. This breathtaking experience is not to be missed...</p>
                        <a href="day_tours.php#firefly" class="btn btn1 button_effect">Discover!</a>
                        <a href="#form" class="btn btn2 button_effect">Book Now!</a>
                      </div>
                    </div>
                </div>
            </section>

            <!-- End of Day Tours -->

            <!-- Package Tours -->
            <section class="package_tour" id="packageTours">
                 <h1 class="title">BOHOL Package Tours</h1>

                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h1 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Overnight(2D1N) PACKAGE TOUR <i class="fas fa-chevron-down float-right"></i>
                      </h1>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                       
                        <h2><a href="https://docs.google.com/document/d/18fdaWSYBjhjcuVwjOpvx7etteCNpewoS8qp8BOfpjdo/edit?usp=sharing" target="_blank">2D1N Package Tour with Countryside Tour Only</a></h2>
                        <h2><a href="https://docs.google.com/document/d/1gHBCBG9iOOOLCov7m_ZwVJ4ngnLUOCV0imHxYi7U5Zc/edit?usp=sharing" target="_blank">2D1N Package Tour with Countryside Tour &amp; Panglao Island Tour</a></h1>
                        <h2><a href="https://docs.google.com/document/d/1FFC3Z8qCXPQ0gldZTM6Jt0ctrf97k20eFe4-dWZLzoo/edit?usp=sharing" target="_blank">2D1N Package Tour with Countryside &amp; Island Hopping Tour</a></h1>
                        <h2><a href="https://docs.google.com/document/d/1Mod-IlRNjxL9zXFslNNJDwr5CdYUXav5vK4k-DZphuc/edit?usp=sharing" target="_blank">2D1N Package Tour with Countryside Tour, PanglaoTour &amp; Island hopping Tour</a></h1>
                        <h3>Do you have other activities or ideas in mind outside the itinerary? Create your own customized tour. Contact us for a free quote.</h3>
                        <a href="#form"><button class="cta button_effect" id="book_now">Free Quote!</button></a>
                            
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h1 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        3 Days &amp; 2 Nights PACKAGE TOUR <i class="fas fa-chevron-down float-right"></i>
                      </h1>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <h2><a href="https://docs.google.com/document/d/1ADwk9alcM_QwMlKu2W4VzTc4wt8668PWAGH-HoScsZU/edit?usp=sharing" target="_blank">3D2N Package Tour with Countryside Tour Only</a></h2>
                        <h2><a href="https://docs.google.com/document/d/1TD4P3lNO_1CQL0JefMeUFTHi-3GMhsf-W-p8tFRBjYo/edit?usp=sharing" target="_blank">3D2N Package Tour with Countryside Tour &amp; Panglao Island Tour</a></h1>
                        <h2><a href="https://docs.google.com/document/d/1dTWwnuE95EyIWeJH60CnqLOIBe0Zr-0mW-2d4tfhYbw/edit?usp=sharing" target="_blank">3D2N Package Tour with Countryside &amp; Island Hopping Tour</a></h1>
                        <h2><a href="https://docs.google.com/document/d/1ank6kxAqk7HpR3AAQ1jvR2IjobPK_9S8A_Ajf2o0Ofs/edit?usp=sharing" target="_blank">3D2N Package Tour with Countryside Tour, PanglaoTour &amp; Island hopping Tour</a></h1>
                        <h3>Do you have other activities or ideas in mind outside the itinerary? Create your own customized tour. Contact us for a free quote.</h3>
                        <a href="#form"><button class="cta button_effect" id="book_now">Free Quote!</button></a>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
             <!-- End of Package Tours -->

            <!-- Reviews -->
            <section class="reviews" id="reviews">
                <h1 class="title">Guest's Reviews</h1>
                <b><p>Featured reviews are taken from our facebook page reviews. Please visit, like and share our <a class="" href="https://www.facebook.com/discoverboholtours/" target="_blank"><i class="fab fa-facebook-square hvr-buzz-out"></i></a> facebook page.</p></b>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <h3><b>"</b> Our bohol experience has been amazing mostly because of sir george and his team.. it was a worry free vacation.. highly recommended if you're going to visit bohol.. thanks #discoverboholtours :):):) <b>"</b></h3>
                        <br>
                        <h2>Vhina Villoso</h2>
                        <a href="https://www.facebook.com/vhina.villoso/posts/10210028472582777:0" target="_blank"><img src="assets/images/testi_imgs/Vhina_Villoso.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <h3><b>"</b> Thank you for the wonderful experience we had during our stay in Bohol Sir George together with your staff, Dindo &amp; JP made it more fun thanks for ensuring our safety through out the trip. We really had a great time! We will definitely recommend you to our friends and family. <b>"</b>
                        </h3> <br>
                        <h2>Marjorie Mangundayao-Salute</h2>
                        <img src="assets/images/testi_imgs/marjorie.jpg" alt="">
                    </div>
                    <div class="item">
                        <h3><b>"</b> My family travelled from Canada and we were helped by George and driven around town by Ryan. Amazing service! George was very friendly and eager to help us with our requests. This service really tries their best to get you to all the activities you want to go to.</h3>

                        <h3>Highly recommend this service in Bohol. They are quick to respond and are very friendly! <b>"</b></h3>
                        <br>
                        <h2>Cheryll Paranaque</h2>
                        <img src="assets/images/testi_imgs/Cheryll_Paranaque.jpg" alt="">
                    </div>
                    <div class="item">
                        <h3><b>"</b> Just booked their Panglao tour with tarsier sanctuary last feb. 26, 2017. I don't have any problems dealing with the owner-George. He was very accommodating. His driver is on-time and knows the background of the said tourist spots. We enjoyed our tour and will definitely recommend Discover Bohol Tours on your visit to Bohol. <b>"</b> </h3>
                        <br>
                        <h2>Janice Ngo</h2>
                        <img src="assets/images/testi_imgs/Janice_Ngo.jpg" alt="">
                    </div>
                    <div class="item">
                        <h3><b>"</b> Super thank you George for accommodating us , we had a great day touring in Bohol, and the Driver as well was super nice , Friendly and accommodating :) thank you again! <b>"</b></h3>
                        <br>
                        <h2>Sharmain Sta Ana</h2>
                        <img src="assets/images/testi_imgs/Sharmaine_sta_ana.jpg" alt="">
                    </div>
                    <div class="item">
                        <h3><b>"</b> Excellent! More than expected! Super nagenjoy po kame ng family ko sa Bohol! Maraming salamat po Discover Bohol Tours. Napaka-accomodating po ng Tour Guide/Driver na sina Kuya Dindo at Kuya Wewen at head nilang si Sir George! Good Job! <b>"</b></h3>
                        <br>
                        <h2>Yan Yan</h2>
                        <img src="assets/images/testi_imgs/Yan_yan.jpg" alt="">
                    </div>
                    
                </div>
                        


            </section>
            <!-- End of Reviews -->
            <!-- legalities -->
            <section class="legalities" id="legalities">
                <h1 class="title">LEGALITIES</h1>
                <div class="leg_wrapper">
                    <a href="#" ><img class="button_effect" src="assets/images/Legalities/permit_small.jpg" alt=""></a>
                    <a href="#" ><img class="button_effect" src="assets/images/Legalities/dti_small.jpg" alt=""></a>
                    <a href="#" ><img class="button_effect" src="assets/images/Legalities/BIR_small.jpg" alt=""></a>
                    <a href="#" ><img class="button_effect" src="assets/images/Legalities/dot_small.jpg" alt=""></a>
                </div>
            </section>
            <section class="transport_rentals" id="transport_rentals">
                <h1 class="title">Bohol Transport Rentals</h1>
                <div class="wrap">
                    <img src="assets/images/cars.png" alt="">
                    <table class="greyGridTable">
                        <thead>
                            <tr>
                                <th>Destinations</th>
                                <th>Duration</th>
                                <th>Sedan <br> (max of 4 pax)</th>
                                <th>MPV<br> (max of 6 pax)</th>
                                <th>Van <br>(max of 14 pax)</th>
                                <th>Coaster <br>(max of 25 pax)</th>
                                <th>Bus<br>(max of 50 pax)</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>COUNTRYSIDE Tour</td>
                                <td>7 Hrs.</td>
                                <td>P2,200</td>
                                <td>P2,750</td>
                                <td>P3,000</td>
                                <td>P8,000</td>
                                <td>P11,000</td>
                            </tr>
                            <tr>
                                <td>PANGLAO Tour</td>
                                <td>4 Hrs.</td>
                                <td>P2,000</td>
                                <td>P2,500</td>
                                <td>P2,800</td>
                                <td>P5,000</td>
                                <td>P9,000</td>
                            </tr>
                            <tr>
                                <td>E.A.T. DANAO </td>
                                <td>9 Hrs.</td>
                                <td>P3,700</td>
                                <td>P4,000</td>
                                <td>P4,500</td>
                                <td>P8,000</td>
                                <td>P11,000</td>
                            </tr>
                            <tr>
                                <td>ANDA TOUR</td>
                                <td>8 Hrs.</td>
                                <td>P4,500</td>
                                <td>P5,000</td>
                                <td>P5,500</td>
                                <td>P10,000</td>
                                <td>P13,000</td>
                            </tr>
                            <tr>
                                <td>Countyside + Jardin Necitas</td>
                                <td>9 Hrs.</td>
                                <td>P3,000</td>
                                <td>P3,200</td>
                                <td>P4,250</td>
                                <td>P10,000</td>
                                <td>P13,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">LAND TRANSFER ARRANGEMENT (Trans In / Trans Out )</td>
                            </tr>
                            <tr>
                                <td>Tagbilaran - Panglao</td>
                                <td>30 Mins</td>
                                <td>P500</td>
                                <td>P600</td>
                                <td>P700</td>
                                <td>P2,500</td>
                                <td>P3,500</td>
                            </tr>
                            <tr>
                                <td>Tubigon - Panglao</td>
                                <td>2 Hrs</td>
                                <td>P2,000</td>
                                <td>P2,200</td>
                                <td>P2,500</td>
                                <td>P4,500</td>
                                <td>P7,500</td>
                            </tr>
                            
                        </tfoot>
                    </table>    
                </div>
                <!-- wrapper -->
            </section>
            <section class="form" id="form">
                <div class="form_container">
                    <form method="post" action="<?php echo $PHP_SELF;?>">
                        <div>
                            <input type="text" name="name" required placeholder="Name">
                            <input type="text" name="contact" required placeholder="Contact Number">
                            <input type="email" name="email" required placeholder="Email address">
                        </div>
                        <div>
                            <textarea name="message" placeholder="Message"></textarea>
                            <input type="text" name="captcha" required placeholder="What is 3 plus three?">
                        </div>
                        <button class="button_effect" name="submit" id="submit" type="submit">BOOK NOW!</button>
                    </form>
                </div>    
                <div class="contactus_details">
                    <div class="or">OR</div>
                    <h3>CONTACT US</h3>
                    <p class="address">
                        Discover Bohol Tours, <br />
                        0025B Palma Street, <br />
                        Tagbilaran City, Bohol, <br />
                        Philippines 
                    </p>
                    <p class="contact_info">
                        <strong>Contact Numbers</strong> <br />
                        <a href="tel:0384111867">(038)411 1867</a> (Landline)<br />
                        <a href="tel:09334865197">09334865197</a> (SUN &amp; Viber/WhatsApp/WeChat) <br />
                        <a href="tel:09613883052">09613883052</a> (SMART) <br />
                        <a href="tel:09164156939">09164156939</a> (GLOBE) <br /><br />
                        
                    </p>
                    <p style="display: block;text-align: left;"><strong>email:</strong> <a href="mailto:discoverboholbookings@gmail.com">discoverboholbookings@gmail.com</a></p>
                </div>
                
            </section>
            <footer>
                <div class="contain">
                     <h6>Like and share to get latest promos and updates: <a class="hvr-buzz-out" href="https://www.facebook.com/discoverboholtours/" target="_blank"><i class="fab fa-facebook-square"></i></a></h6>
                     <p>DISCOVERBOHOLTOURS.COM &copy; 2019, ALL RIGHTS RESERVED. </p>

                </div>

            </footer>
        </div>
	   
   
   

    <!-- JavaScript --> 
    <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="assets/js/typed.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>


    <script>
        
    </script>
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '90927220-0575-464a-bcae-9621a311d945', f: true }); done = true; } }; })();
    </script>
    </body>
    
</html>