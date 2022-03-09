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
<link rel="stylesheet" type="text/css" href="css/contact.css">
<!-- Load font and icon library -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- Header -->

<header>

</div>
</header>

<?php
include("include/userNav.php");
?>	

<!-- Navigation Menu -->
<nav class="topnav">
<?php
include("include/topnav_others.php")
?>
</nav>

<!-- Page content row -->
<body>


<div class="container">
    <center><h3>Contact Us Form</h3>
            <center><h4>Leave a review, feedback or suggestion.</h4>
    <form action="contact_data.php" method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div><br>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div><br>
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" name="comments" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>

<!-- Footer -->
	<footer>
		<br><div class="footer">
		<small><i>Copyright &copy; 2021 mylokalfood</i></small></div>
		
	</footer>

</body>
</html>