<?php
session_start();
include("include/config.php");

$food_id = $_GET["food-id"];
$order_id = $_GET["order-id"];
$food_name = $_GET["food-name"];
?>
<!DOCTYPE html>
<html>
<head>
<title>mylokalFood</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/review.css">
<link rel="stylesheet" type="text/css" href="css/star.css">
<!-- Load font and icon library -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- Header -->
<header>
<?php
include("include/userNav.php");
?>	
</header>	
<!-- Navigation Menu -->
<nav class="topnav">
<?php
include("include/topNav.php");
?>
</nav>

<div class="row">
<main><center>
				<h1>Review Form</h1>
				<p>Send us your review of our food. Required fields marked with an
				asterisk *</p>
				<p>Food ID: </p>
				<p>(1) Nasi Lemak, (2) Hainanese Chicken Rice, 
				<p>(3) Nasi Kerabu, (4) Roti Canai, 
				<p>(5) Bak Kut Teh, (6) Chicken Satay, 
				<p>(7) Ais Kacang COOL, (8) Cendol COOL, 
				<p>(9) Tom Yam, (10) Teh Tarik</p>
				<form method="post" action="review_process.php">
				<p><label for="food_id">* Food ID:</label>
				<input type="text" name="food_id" id="food_id" required="required"
				placeholder="Food ID"></p>
				

			<p><label for="userReview">* Food Rating:</label>

				<td><input type="radio" name="food_ratings" value="1"/>1</td></tr>
				<td><input type="radio" name="food_ratings" value="2"/>2</td></tr>
				<td><input type="radio" name="food_ratings" value="3"/>3</td></tr>
				<td><input type="radio" name="food_ratings" value="4"/>4</td></tr>
				<td><input type="radio" name="food_ratings" value="2"/>5</td></tr>

				<p><label for="userReview">* Food Review:</label>
				<textarea name="food_review" id="review" rows="2" cols="20"
				required="required"></textarea></p>
				
				


				<!--- <input id="mySubmit" type="submit" value="Submit"> --->


				<button onclick="myFunction()" input id="mySubmit" type="submit" value="Submit">Submit</button>
				<br>

				<script>
				function myFunction() {
				  alert("Thank you for reviewing!");
				}
				</script>
				</br>
				</form>

				</center>
		
</main>
</div>
</body>
</html>