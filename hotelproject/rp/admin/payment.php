<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='admin.css'/>
    <!-- CSS only -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
	<title>Admin contact</title>
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


	<h1  style='text-align:center;margin-top:150px; font-size:50px; color:white;'>Admin Payment Form</h1>
	<div class="container">
	<table class='content-table' style='margin-left:300px; margin-top:90px; font-size:30px;border:10px solid white;color:white;'>
		<thead>
			<tr>
				<td>Room Number</td>
				<td>Card Number</td>
				<td>Card Exp Date</td>
				<td>Card Cvv</td>
				<td>Holder Name</td>
			</tr>

		</thead>
		<tbody>
			<?php
			$connection = mysqli_connect('localhost','root','','redstonepro');
			$query='SELECT * FROM payment';
			$qryobj = mysqli_query($connection,$query);
			while($row=mysqli_fetch_assoc($qryobj))
			{

			echo '<tr>';
			echo '<td>'.'Room '.$row['id'].'</td>';
			echo '<td>'.$row['card_number'].'</td>';
			echo '<td>'.$row['card_exp_date'].'</td>';
			echo '<td>'.$row['card_cvv'].'</td>';
			echo '<td>'.$row['holder_name'].'</td>';
			echo '</tr>';
		    }


			?>
		</tbody>
	</table>


	</div>
</body>

</html>
