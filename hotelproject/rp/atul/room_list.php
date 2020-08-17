
<?php
$z='ALL';
if(isset($_POST['stbbtn']))
{
$z=$_POST['name'];
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendors/css/ionicons.min.css"
    />
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />

    <link rel="stylesheet" href="detail-page.css" />
    <link
      href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic"
      rel="stylesheet"
      type="text/css"
    />

    <title>Redstone</title>
  </head>
  <body>
    <header
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.7)
          ),
          url(resources/img/hotel7.jpg);
        background-size: cover;
        background-position: center;
        height: 80vh;
        background-attachment: fixed;
      "
    >
      <nav style="margin-left: 30px;">
        <div class="row">
          <img src="resources/img/log.svg" alt="Redstone" style="width: 200px;"class="logo">
          <ul class="main-nav" style="margin-left: 400px;">
            <li><a href="../index.php">Home</a></li>
            <li><a href="room_list.php">Rooms</a></li>
            <li><a href="../subrato/contact.php">Contact Us</a></li>
            <li><a href="../subrato/about.php">About Us</a></li>
            <li><a href="../sanju/register.php">Register</a></li>
            <li><a href="../sanju/login.php">Login</a></li>

          </ul>
        </div>
      </nav>
      <div class="hero-text-box">
        <div class="header-hotel">
          <form action='room_list.php' method='POST'>
            <h1 style="color: #fff; font-size: 40px;">
              FIND HOTELS & GUEST ROOMS AT BEST DEAL
            </h1>
            <div
              class="form-box"
              style="background: rgba(0, 0, 0, 0.5); padding: 30px;"
            >
              <input
                type="text"
                class="search-field hotels"
                style="
                  height: 60px;
                  padding: 10px;
                  border: none;
                  border-radius: 25px;
                  outline: none;
                  width: 900px;
                "
                name='name'
                placeholder="Search for location,hotel"
              />
              <button class="search-btn" type="submit" name='stbbtn' style="height: 60px;">
                Search
              </button>
            </div>
          </form>
        </div>
      </div>
    </header>

    <!-- Room List -->
    <div class="container">
      <div class="row mt-5" >
    
        <h2 style= "margin-left: 350px;"> <?php
       echo $z;
        //echo $name;
        echo '  Rooms';
        ?>
       </h2> 
     
       </div>

      <div class="row mt-5">
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="5.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
                <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>

              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="2.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="3.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="8.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row mt-5">
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="3.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="4.jpg"/>
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src=2.jpg />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src=2.jpg />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
     
      <div class="row mt-5">
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="2.jpg"/>
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="4.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="5.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="7.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
     
      <div class="row mt-5">
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="3.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="7.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="5.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top img-fluid" src="4.jpg" />
            <div class="card-title">
              <h4>TREEBO TREND KONAR INN</h4>
            </div>
            <div class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Repudiandae fugiat et voluptate sunt officia vero molestias.<br /><br />
              <a class="btn btn-success text-light" href="detail.php"> Details </a> &nbsp;
              <a class="btn btn-danger text-light"
                ><i class="fa fa-inr" aria-hidden="true"></i>₹599
              </a>
              <br /><br />
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="row">
        <div class="col span-1-of-2">
          <ul class="footer-nav">
            <li><a href="#">About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">iOS App</a></li>
            <li><a href="#">Android App</a></li>
          </ul>
        </div>
        <div class="col span-1-of-2">
          <ul class="social-links">
            <li>
              <a href="#"><i class="ion-social-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-googleplus"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <p>
          Copyright &copy; 2020 by Redstone. All rights reserved.
        </p>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
