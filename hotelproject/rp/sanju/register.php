<?php
if(isset($_POST['submit_button'])){
  $username= $_POST['username'];
  $email = $_POST['email'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
    $conn = mysqli_connect('localhost','root','','redstonepro');
    $query ="INSERT into register(username,email,pass1,pass2) values ('$username','$email','$password1','$password2')";
    mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="sanju.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>  
</head>
<body><div class="hero"><header>
            <nav>
                <div class="row">
                    <img src="resources/img/log.svg" alt="Redstone" style="width: 200px;"class="logo">
                    <ul class="main-nav">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../atul/room_list.php">Rooms</a></li>
                         <li><a href="../subrato/contact.php">Contact Us</a></li>
                        <li><a href="../subrato/about.php">About Us</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
            
                    </ul>
                </div>
            </nav>
        </header>
        <div class="form-box">
          <div class="button-box">
        	<div id="btn"></div>
        		<button type="button" class="toggle-btn1" style="color: #c2eaf0;">Register</button>
        	</div>
        		<div class="social-icons">
        		   <img src="fb.jpg">
        		   <img src="tw.jpg">
        		   <img src="gp.jpg">
        	    </div>
        	 <form id="register" class="input-group" action='' method='POST'>
        	 	<input type="text" class="input-field" name='username' placeholder="User Name" style="border-radius: 10px; border:none; background-color: #e6ebeb;" required>
        	    <input type="email" class="input-field" name='email' placeholder="Email Id" style="border-radius: 10px; border:none; background-color: #e6ebeb;" required>
        	    <input type="password" class="input-field" name='password1' placeholder="Enter Password" style="border-radius: 10px; border:none; background-color: #e6ebeb;" required>
        	    <input type="password" class="input-field" name='password2' placeholder="Confirm Password" style="border-radius: 10px; border:none; background-color: #e6ebeb;" required>
        	   
                <br>
                <br>
        	    <button type="submit" class="submit_btn" name='submit_button'style="color: #c2eaf0;">Register</button>
        	</form>
            </div>
        </div>
</body>
</html>