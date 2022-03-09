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

<?php

$name = $_POST['name']; 
$email = $_POST['email'];
$message = $_POST['comments'];

$sql = "INSERT INTO contactus (name, email, comments)
VALUES('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo '<p style="text-align:center;padding-left: 16px;"><b><i style="font-size:30px" align="right"></i>Thank You For Contacting Us</a>';
} else {
    echo '<p style="text-align:center;padding-left: 16px;"><b><i style="font-size:30px" align="right"></i>Error</a>' . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>

<!-- Footer -->
	<footer>
		<br><div class="footer">
		<small><i>Copyright &copy; 2021 mylokalfood</i></small></div>
		
	</footer>

</body>
</html>