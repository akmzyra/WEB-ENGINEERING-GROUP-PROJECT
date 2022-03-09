<?php
session_start();
include("include/config.php");
?>

<?php

$r_id = $_POST['r_id']; 
$name = $_POST['name'];
$category = $_POST['category'];
$halal = $_POST['halal'];   
$price = $_POST['price'];
$images_path = $conn->real_escape_string($_POST['images_path']);
$available = $_POST['available']; 


$sql = "INSERT INTO food (rest_id, food_name, food_cat, halal_nonhalal, food_price, food_img, food_availability)
VALUES ('$r_id', '$name', '$category', '$halal', '$price', '$images_path', '$available')";

if (mysqli_query($conn, $sql)) {
    ?>
<!DOCTYPE html>
<html>
<head>
<title>mylokalfood</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/admin_dash.css">
<!-- Load font and icon library -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- Header -->

<header>

</header>


<?php
include("include/userNav.php");
?>	


<!-- Navigation Menu -->
<nav class="topnav">
<?php
include("include/topNav.php");
?>
<a href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i> Admin Dashboard</a>
</nav>

<!-- Page content row -->

<body>
<div class="container">
    <div class="jumbotron">
     <center><h1>Hello Manager! </h1>
     <p>Manage all your inventory from here</p>

    </div>
    </div>
	
<?php
include("include/sideNav_admin.php");
?>

    <div class="container">
    <div class="jumbotron">
     <center><h1>Item added succesfully. </h1>
    </div>
    </div>
    <!-- Footer -->
	<footer>
		<br><div class="footer">
		<small><i>Copyright &copy; 2021 mylokalfood</i></small></div>
		
	</footer>

</body>
</html>
<?php
} 

else {
      ?>
<!DOCTYPE html>
<html>
<head>
<title>mylokalfood</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/mystyle v2.css">
<!-- Load font and icon library -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- Header -->

<header>

</header>


<?php
include("include/userNav.php");
?>	


<!-- Navigation Menu -->
<nav class="topnav">
<?php
include("include/topNav.php");
?>
<a href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i> Admin Dashboard</a>
</nav>

<!-- Page content row -->

<body>
<div class="container">
    <div class="jumbotron">
     <center><h1>Hello Manager! </h1>
     <p>Manage all your inventory from here</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>
    <div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="admin_dashboard.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_item.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_item.php" class="list-group-item ">Delete Food Items</a>
    	</div>
    </div>
    <div class="container">
    <div class="jumbotron">
     <center><h1>Failed to add item. Try again </h1>
    </div>
    </div>
    <!-- Footer -->
	<footer>
		<br><div class="footer">
		<small><i>Copyright &copy; 2021 mylokalfood</i></small></div>
		
	</footer>

</body>
</html>

<?php
}

?> 