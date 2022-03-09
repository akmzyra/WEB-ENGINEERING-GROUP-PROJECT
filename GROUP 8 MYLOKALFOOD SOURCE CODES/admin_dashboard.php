<?php
session_start();
include("include/config.php");
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
<div>
     <center><h1>Hello Manager! </h1>
     <p>Manage all your inventory here</p>
</div>
	
<div class="row">
<?php
include("include/sideNav_admin.php");
?>

    <div class="container">
    <center><h3>Add Your Item</h3>
    <form action="add_items.php" method="POST">
    <div class="form-group">
    <div class="form-group">
          <input type="text" class="form-control" id="name" name="r_id" placeholder="Restaurant ID" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Food name" required="">
          </div> 
              
          <div class="form-group">
          <input type="text" class="form-control" id="category" name="category" placeholder="Food Category" required="">
          </div>

          <div class="form-group">
          <input type="text" class="form-control" id="halal" name="halal" placeholder="Halal/Non-Halal (pick H or NH)" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Your Food Price (INR)" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="images_path" name="images_path" placeholder="Your Food Image Path [images/<filename>.<extention>]" required="">
          </div>

           <div class="form-group">
          <input type="text" class="form-control" id="available" name="available" placeholder="Food Availability" required="">
          </div>

<br>
          <div class="form-group">
            <button class="btn btn-success" type="submit">Add Item</button>
        </div>
    </form>
</div>

        
        </div>
    <!-- Footer -->
	<footer>
		<br><div class="footer">
		<small><i>Copyright &copy; 2021 mylokalfood</i></small></div>
		
	</footer>

</body>
</html>