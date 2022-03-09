<?php
session_start();
include("include/config.php");

//check login
if(!isset($_SESSION["UID"])){
	header("location:login.php");	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>mylokalFood</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/checkout.css">
<link rel="stylesheet" type="text/css" href="css/mystyle v2.css">
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
<p style="margin: 15px;"><i class="fa fa-shopping-cart" style="font-size:24px"></i> / Checkout Information</p>

<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table cellpadding="10" cellspacing="1" id="carttable" width="60%" style="margin: 0 10px 0 10px;">
<tbody>
<tr id="carttable tr">
	<th style="padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #909090; color: white;">Item</th>
	<th style="padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #909090; color: white;">Code</th>
	<th style="padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #909090; color: white;" width="15%">Quantity</th>
	<th style="padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #909090; color: white;" width="15%">Unit Price (RM)</th>
	<th style="padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #909090; color: white;" width="15%">Price (RM)</th>
</tr>	

<?php		
foreach ($_SESSION["cart_item"] as $item){
	$item_price = $item["quantity"]*$item["price"];
	?>
	<tr>
	<td id="#carttable td" style="text-align:left;"><?php echo $item["name"];?></td>				
	<td id="#carttable td" style="text-align:center;"><?php echo $item["prodID"]; ?></td>
	<td id="#carttable td" style="text-align:center;"><?php echo $item["quantity"]; ?></td>
	<td id="#carttable td" style="text-align:center;"><?php echo $item["price"]; ?></td>
	<td id="#carttable td" style="text-align:center;"><?php echo number_format($item_price,2); ?></td>

	</tr>
	<?php
	$total_quantity += $item["quantity"];
	$total_price += ($item["price"]*$item["quantity"]);
	}
	?>

<tr>
<td colspan="2" align="right"><b>Total:</b></td>
<td style="text-align:center;"><?php echo $total_quantity; ?></td>
<td style="text-align:center;" colspan="2"><strong><?php echo "RM ".number_format($total_price, 2); ?></strong></td>
<form method="post" action="checkout.php?price=<?php echo $total_price;?>">
<input type = "hidden" name = "tot_price" value = "<?php echo $total_price;?>">
</form>
</tr>
</tbody>
</table>	
	
<?php
} else {
?>
<p style="margin: 15px;">Your Cart is Empty</p>
<?php 
}
?>

<h1 class="text-center">
<td style="text-align:center;" colspan="2"><strong><?php echo "RM ".number_format($total_price, 2); ?></strong></td></h1>


<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>



<?php
if(!empty($_GET["price"])) {
	$order_amt = $_GET["price"];
	$order_status = 1;//1= New, 2=Process, 3= Completed
	
	//sql for order_invoice table
	$sql = "INSERT INTO order_invoice (order_status, order_amt, cust_id)
		VALUES ('" . $order_status . "','" . $order_amt . "','" . $_SESSION["UID"] . "')";
	
		if (mysqli_query($conn, $sql)) {	
			echo '<p style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp; New customer order record has the Order id:' . mysqli_insert_id($conn) . "<br>";	
			$order_id = mysqli_insert_id($conn);
		} else {
		echo "Error: </p>" . $sql . "<br>" . mysqli_error($conn);
		}	
		
	foreach ($_SESSION["cart_item"] as $item){	
		//sql for order_line table
		$sql2 = "INSERT INTO order_line (order_id, food_id, food_qty)
		VALUES ('" . $order_id . "','" . $item["prodID"] . "','" . $item["quantity"] . "')";
	
	if (mysqli_query($conn, $sql2)) {
			//echo "<p>New customer order record created successfully.";	
			echo '<p style="font-size:12px;"> &nbsp;&nbsp;&nbsp;&nbsp; Order line record has the Line id: ' . mysqli_insert_id($conn) . "<br>";	
			$line_id = mysqli_insert_id($conn);
		} else {
		echo "Error: </p>" . $sql . "<br>" . mysqli_error($conn);
		
		}
	}

}
mysqli_close($conn);
unset($_SESSION["cart_item"]);//unset cart
?>
<!--<p style="margin: 15px;"><a href="index.php">Continue Shopping</a></p>-->

<br>

<div class="invoice-box">
<h2><center>CHECKOUT ORDER</center></h2>
<br>
    <table cellpadding="0" cellspacing="0">
        		<tr class="heading">
            <td>
                Payment Method
            </td>

        </tr>
		
		<tr>
		<td style="text-align:center;"><a href="onlinepay.php" class="btn btn-lg btn-block btn-primary"><button type="submit">Pay Online</button></a></td>
		<td style="text-align:center;"><a href="COD.php" class="btn btn-lg btn-block btn-primary"><button type="submit">COD</button></a></td>
		<td style="text-align:center;"><a href="cart_action.php" class="btn btn-lg btn-block btn-primary"><button type="submit">Go back to cart</button></a></td>
		</tr>

		
		
    </table>

</div>
        


<br><br><br><br><br><br>
</body>
</html>