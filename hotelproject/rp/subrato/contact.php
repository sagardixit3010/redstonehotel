
<?php
if(isset($_POST['submit_contact'])){
  $firstname= $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
    $conn = mysqli_connect('localhost','root','','redstonepro');
    $query ="INSERT into contact(firstname,lastname,email,subject,message) values (' $firstname','$lastname','$email','$subject','$message')";
    mysqli_query($conn,$query);
}
?>



<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="style/contact.css">
   <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Contact Us</title>
    </head>
     <body> <section id="contact-section">
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
        <div class="container">
           	 <h2>Contact Us</h2>
              <p>For any Query please free to share Your Feedback Here.</p>
             <div class="contact-form">
               <div>
                 <i class="fa fa-map-marker"></i><span class="form-info">RedStone hotels pvt. ltd.</span><br>
                 <i class="fa fa-phone" > </i><span class="form-info">9999 555 444</span><br>
                 <i class="fa fa-envelope"></i><span class="form-info">redstonehelp@gmail.com</span>
               </div>       
          <div>        
             <form class="form1" action='' method='POST' >
              <table style='color:white;'>
                <tbody>
                  <tr>
                    <td><label>First Name:</label></td>
                    <td><input type="text" name='firstname' placeholder="Your Name" style='margin:10px; border-radius:20px;'required></td>
                  </tr>
                  <tr>
                    <td><label>Last Name:</label></td>
                    <td><input type="text" name='lastname' placeholder="Last Name" style='margin:10px;border-radius:20px;'></td>
                  </tr>
                  <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name='email' placeholder="Email" style='margin:10px;border-radius:20px;' required></td>
                  </tr>
                  <tr>
                    <td><label>Subject:</label></td>
                    <td><input type="text" name='subject' placeholder="Subject of this message" style='margin:10px;border-radius:20px;'></td>
                  </tr>
                  <tr>
                    <td><label>Message:</label></td>
                    <td><textarea name="message" placeholder="Message" rows="5" style='margin:10px;border-radius:20px;' required></textarea></td>
                  </tr>
                </tbody>
              </table>
              <button class="submit" style='margin: 10px 5px 15px 150px;border-radius:25px;height:50px;color:white; background-color:#e67e22;' name='submit_contact'>Send Message</button><br>
              <br>
              <br>
              <br>
              <br>
              <br> 
             </form>   
               </div>
             </div>
           </div>
         </section>

         
     </body>
     </html>