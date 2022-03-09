<?php
include_once ("include/config.php");
// initializ shopping cart class

?>

<!doctype html>
<html>
<head>
<title>mylokalFood</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/mystyle v2.css">
<link rel="stylesheet" type="text/css" href="css/COD.css">
<!-- Load font and icon library -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
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

<h2 class="text-center"> 
<a>Thank you for Ordering at Lokal Food!</a>
<a>The ordering process is now complete.</a></h2>

<?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: #45b6fe;"><?php echo "$number"; ?></span> </h3>

		<tr>
		<td style="text-align:center;"><a href="index.php" class="btn btn-lg btn-block btn-primary"><button type="submit">Go back to home</button></a></td>
        </body>

</html>