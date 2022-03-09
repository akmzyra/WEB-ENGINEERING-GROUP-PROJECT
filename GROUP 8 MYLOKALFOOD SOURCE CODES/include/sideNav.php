<div class="col-nav menu">

	<?php 
//mycart section
	echo '<p style="font-size:12px; text-align:center"><a href="cart_action.php"><img src="img/icon/my_cart.png" class="imgbuttoncart"> </a>';
	if(isset($_SESSION["cart_item"])){
		$countItem = count($_SESSION["cart_item"]);		
		echo "<b>($countItem)</b>&nbsp;</p>";
	} else {
		echo "<b>(0)Item &nbsp;</p>";
	}
	
?>
	<br>
	<ul>
		<li><a href="index.php"><img src="img/icon/RESTAURANTS.png" class="imgbuttonnav"></a></li>
		<li><a href="index.php?page=product&action=view&cat=1"><img src="img/icon/BREAKFAST.png" class="imgbuttonnav"></a></li>
		<li><a href="index.php?page=product&action=view&cat=2"><img src="img/icon/LUNCH.png" class="imgbuttonnav"></a></li>
		<li><a href="index.php?page=product&action=view&cat=3"><img src="img/icon/DINNER.png" class="imgbuttonnav"></a></li>
		<li><a href="index.php?page=product&action=view&cat=4"><img src="img/icon/DESSERT.png" class="imgbuttonnav"></a></li>
		<li><a href="index.php?page=product&action=view&cat=5"><img src="img/icon/BEVERAGES.png" class="imgbuttonnav"></a></li>
	
	</ul>
	

</div>

