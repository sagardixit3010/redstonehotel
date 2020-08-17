<?php
   $z='';
if(isset($_POST['submit_review'])){
 
  $name= $_POST['name'];
  $email = $_POST['email'];
  $find_us = $_POST['find_us'];
  $drop_message = $_POST['drop_message'];
    $conn = mysqli_connect('localhost','root','','redstonepro');
    $query ="INSERT into customer_review(name,email,find_us,drop_message) values ('$name','$email','$find_us','$drop_message')";
    if($obj=mysqli_query($conn,$query))
    {
        $z= 'Added Successfully';

    }
    else{
        $z='Please enter again';

    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Redstone</title>
        

        
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/log.svg" alt="Redstone" style="width: 200px;"class="logo">
                    <ul class="main-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="atul/room_list.php">Rooms</a></li>
                         <li><a href="subrato/contact.php">Contact Us</a></li>
                        <li><a href="subrato/about.php">About Us</a></li>
                        <li><a href="sanju/register.php">Register</a></li>
                        <li><a href="sanju/login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero-text-box">

                <div class="header-hotel">
                <form action='atul/room_list.php' method='POST'>
                   <h1>FIND HOTELS & GUEST ROOMS AT BEST DEAL</h1>
                   <div class='form-box' style="background:rgba(0,0,0,0.5);padding:30px;">
                         <input type="text" class="search-field hotels" style="height:60px;padding:10px;border:none;border-radius:25px;outline:none;width:900px;"  placeholder="Search for location,hotel" name='name'>
                         <button class="search-btn" type="submit" name='stbbtn' style="height:60px; ">Search</button>

                   </div>
               </form>
              </div>


            </div>

        </header>

        <section class="section-features" id="features">
            <div class="row">
                <h2>Welcome To Redstone &mdash; We Provide The Best Rooms</h2>
                <p class="long-copy">
                    Redstone provides you the most luxury hotels nearby your locaion. We provide the list of hotels where you can book for a stay. You get the best services under a minimal deal.
                </p>
            </div>
            
            <div class="row">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-monitor-outline icon-big"></i>
                    <h3>Modern Amenities</h3>
                    <p>
                        Redstone rooms provides with the best modern amenities in hotel.This includes TV,Elevator,Parking space, Ac Rooms. The room have light sensors with finest design interior,Fast Wireless Connectivity (Wi-Fi),Smart Rooms & Smart Technology and many more.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-clock-outline icon-big"></i>
                    <h3>24/7 Security</h3>
                    <p>
                       Further, room service, 24-hour CCTV surveillance for maximum security, round-the-clock power backup and complimentary Wi-Fi access are provided for added convenience.Our trained and hospitable staff at the front desk is always at your service.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-person-outline icon-big"></i>
                    <h3>Room Service</h3>
                    <p>
                        Redstone tied up hotels provide the world-class room service. Our room service is open 24 hours. You can book your dine with Redstone services by just dialing on phone.The availability of room service is an important element in order to be considered a full-service hotel.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-cart-outline icon-big"></i>
                    <h3>Easy Payment</h3>
                    <p>
                        We provide you the best and easy way to make payments via Credit, Debit or Paypal. With our continous intervention with our booking portal you can make the payment in no time. Our support team will always guide you if you face any issues with payment.
                    </p>
                </div>
            </div>
        </section>
        
        <section class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/17.jpg" style='height:33vh;'>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/18.jpg" style='height:33vh;' >
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/hotel5.jpg" style='height:33vh;'>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/13.jpg" style='height:33vh;'>
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/hotel9.jpg" style='height:30vh;'>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/15.jpg" style='height:30vh;' >
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/14.jpg" style='height:30vh;'>
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/123.jpg" style='height:30vh;'>
                    </figure>
                </li>
            </ul>
        </section>
        
        
        <section class="section-steps" id="works">
            <div class="row">
                <h2>Have A Look At Our Partner Hotel &mdash; Leela Palace</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
              <iframe width="600" height="450" src="https://www.youtube.com/embed/cr2Rrl3vz9I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step clearfix">
                        <div>1</div>
                        <p>Ranking amongst the best 5 star hotels in Delhi, The Leela Palace New Delhi offers you the finest in luxury and hospitality.</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>2</div>
                        <p>The rich heritage of the city, along with modern design elements, is beautifully reflected in this modern palace hotel.</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>3</div>
                        <p>The hotel also comes with an infinity pool, repeatedly rated among the top ten pools in a reputed list.</p>
                    </div>

                </div>
            </div>
        </section>
        
        <section class="section-cities" id="cities">
            <div class="row">
                <h2>We're currently in these cities</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/delhi.jpg" alt="Delhi">
                    <h3>Delhi</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        600+ happy customer
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        60+ top staff
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@Redstone_Delhi</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/chennai3.jpg" alt="Chennai">
                    <h3>Chennai</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        500+ happy customer
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        50+ top staff
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@Redstone_Shimla</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/bangalore.jpg" alt="Bangalore">
                    <h3>Bangaluru</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        600+ happy customer
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        60+ top staff
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@Redstone_Bangaluru</a>
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="resources/img/mumbai.jpg" alt="Mumbai">
                    <h3>Mumbai</h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        600+ happy customer
                    </div>
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        50+ top staff
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@Redstone_bombay</a>
                    </div>
                </div>
            </div>
            
        </section>
        
        <section class="section-testimonials" style='background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(resources/img/hotel6.jpg);
               background-size: cover;
               color: #fff;
               background-attachment: fixed;'>
            <div class="row">
                <h2>Our Customers Review</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                        <cite><img src="resources/img/customer-1.jpg" alt="Customer 1 photo">Alberto Duncan</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries  
                        <cite><img src="resources/img/customer-2.jpg" alt="Customer 2 photo">Joana Silva</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries 


                    <cite><img src="resources/img/customer-3.jpg" alt="Customer 3 photo">Milton Chapman</cite>
                    </blockquote>
                </div>
            </div>
        </section>
    
        
        <section class="section-form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form method="post" action="" class="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find_us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="drop_message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" name='submit_review' value="Send it!">
                        </div>
                    </div>
                       <?php
                    echo '<p>';
                   echo $z;
                   echo '</p>';
                      ?>
                    
                </form>
               

                
            </div>
        </section>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="subrato/contact.php">Contact</a></li>
                        <li><a href="subrato/about.php">About</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2020 by Redstone. All rights reserved.
                </p>
            </div>
        </footer>

    </body>  
    
</html>