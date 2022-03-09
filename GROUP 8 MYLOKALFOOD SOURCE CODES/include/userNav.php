<img src="img/header.png" class="imgcenter" >	

<?php 
//login&logout section
	if(isset($_SESSION["UID"])){
		echo '<p style="text-align:left;padding-left: 16px;"><b> '. $_SESSION["userName"] . '</b> <a href="logout.php"><i class="fa fa-sign-out" style="font-size:24px" align="right"></i>Logout</a>';		
	}
	else {
		echo '<p align="left"><a href="login.php"><i class="fa fa-sign-in" style="font-size:24px" align="right"></i> Login </a>';
	}

?>
