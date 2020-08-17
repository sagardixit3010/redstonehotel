<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'> 
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
  <div class="about-section">
  <header>
            <nav>
                <div class="row">
                    <img src="resources/img/log.svg" alt="Redstone" style="width: 200px;"class="logo">
                    <ul class="main-nav">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../atul/room_list.php">Rooms</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="../sanju/register.php">Register</a></li>
                        <li><a href="../sanju/login.php">Login</a></li>
          
                    </ul>
                </div>
            </nav>
        </header>
        <h1 style='font-size: 20px'>About Us Page</h1>
  <p>RedStone online Room booking is a well established website</p>
  <p>Online hotel reservations are a popular method for booking hotel rooms. Travellers can book rooms on a computer by using online security to protect their privacy and financial information and by using several online travel agents to compare prices and facilities at different hotels.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="imgs/sagar.jpg" alt="Sagar" style="width:100% ">
      <div class="container">
        <h2>Sager Dixit</h2>
        <p class="title">DEVELOPER AND DESIGNER</p>
        <p>I am full stack developer</p>
        <p style='margin-bottom: 10px;'>sagardixit.com</p>
        <p><button class="button" style='margin-bottom:30px;'>Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imgs/atul.jpg" alt="Atul" style="width:100%">
      <div class="container">
        <h2>Atul Kumar</h2>
        <p class="title">DEVELOPER AND DESIGNER</p>
        <p>I am full stack developer</p>
        <p style='margin-bottom: 10px;'>atul@gmail.com</p>
        <p><button class="button" style='margin-bottom:30px;'>Contact</button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="imgs/subrato2.jpg" alt="subrato" style="width:100%">
      <div class="container">
        <h2>Subrato Maji</h2>
        <p class="title">DEVELOPER AND DESIGNER</p>
        <p>I am full stack developer</p>
        <p style='margin-bottom: 10px;'>Subrato@gmail.com</p>
        <p><button class="button" style='margin-bottom:20px;'>Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="imgs/sanju2.jpg" alt="sanju" style="width:100%">
      <div class="container">
        <h2 style='font-size:30px;'>Sanju Kumar Satya</h2>
        <p class="title">DEVELOPER AND DESIGNER</p>
        <p>I am full stack developer</p>
        <p style='margin-bottom: 10px;'>sanju@gmail.com</p>
        <p><button class="button" style='margin-bottom:05px;'>Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
