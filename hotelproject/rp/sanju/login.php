<?php 
if(isset($_POST['submit_btn']))
{
$z = False;
$name=$_POST['username'];
$pass1=$_POST['pass1'];
$connection=mysqli_connect('localhost','root','','redstonepro');
$query='SELECT * FROM register';
$qryobj = mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($qryobj))
{
if($row['username']==$name && $row['pass1']==$pass1)
{
$connection = mysqli_connect('localhost','root','','redstonepro');
$query= "Insert into login(username,password) values ('$name','$pass1')";
$qryobj = mysqli_query($connection,$query);
break;
}
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="sanju.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'> 
</head>
<body><div class="hero">
    <header>
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
        		<button type="button" class="toggle-btn" style="color: #c2eaf0;">User Login</button>
        	</div>
        		<div class="social-icons">
        		   <img src="fb.jpg">
        		   <img src="tw.jpg">
        		   <img src="gp.jpg">
        	    </div>
        	    <form id="login" method='POST' action='' class="input-group">
        	    <input type="text" class="input-field" style="border-radius: 10px; border:none; background-color: #e6ebeb;" placeholder="User Name" name='username' required>
        	    <input type="password" class="input-field" style="border-radius: 10px; border:none; background-color: #e6ebeb;"  placeholder="Enter Password" name='pass1' required>
        	  
                <br>
                <br>
                <br>
        	    <button type="submit" class="submit_btn" name='submit_btn'style="color: #c2eaf0;">Log in</button>
        	</form>  	 
            </div>
        </div>
</body>
</html>