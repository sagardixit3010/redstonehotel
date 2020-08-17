<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='admin.css'/>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    	<style type="text/css">
	nav ul{
		margin-left:40em;
		margin-top:-70px;
		font-weight:bold;

		display: flex;
		text-decoration: none;
		}
	nav ul li {
		padding:30px;
		color:white;
		list-style: none;

	}
	nav ul li a{
		text-decoration: none;
		color:white;
	}
	</style>
    
	<title>Admin contact</title>
</head>
<body>
	<nav>
		<img src="log.svg" alt="Redstone" style="width: 200px; margin:40px 0px 0px 100px;"class="logo">
		<ul>
			<li><a href='../index.php'>Home</a></li>
			<li><a href='contact.php'>Contact</a></li>
			<li><a href='payment.php'>Payment</a></li>
			<li><a href='register.php'>Register</a></li>
			<li><a href='login.php'>Login</a></li>
			<li><a href='customer_review.php'>Customer Review</a></li>
		</ul>
	</nav>
	<h1 style='text-align:center;margin-top:150px; font-size:50px; color:white;'>Admin Contact Form</h1>
	<div class="container">
	<table class='content-table' style='margin-left:120px; margin-top:90px; font-size:30px;border:10px solid white;color:white;'>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
			</tr>

		</thead>
		<tbody>
			<?php
			$connection = mysqli_connect('localhost','root','','redstonepro');
			$query='SELECT * FROM contact';
			$qryobj = mysqli_query($connection,$query);
			while($row=mysqli_fetch_assoc($qryobj))
			{

			echo '<tr>';
			echo '<td>'.$row['firstname'].'</td>';
			echo '<td>'.$row['lastname'].'</td>';
			echo '<td>'.$row['email'].'</td>';
			echo '<td>'.$row['subject'].'</td>';
			echo '<td>'.$row['message'].'</td>';
			echo '</tr>';
		    }


			?>
		</tbody>
	</table>


	</div>
</body>

</html>
