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
<link rel="stylesheet" type="text/css" href="css/edit_item.css">
<!-- Load font and icon library -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;

}
</style>

<script type="text/javascript">
    function display_alert()
    {
      alert("Data Updated Successfully...!!!");
    }
  </script>

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

<div class="row">
<?php
include("include/sideNav_admin.php");
?>

    <div style="text-align: center;">
      <h3>Click On Menu <br><br></h3>
    </div>
    <?php
   
    if (isset($_GET['submit'])) {
    $food_id = $_GET['f_id'];
    $name = $_GET['dname'];
    $category = $_GET['dcat'];
    $halal = $_GET['dhalal'];
    $price = $_GET['dprice'];
    $available = $_GET['davailable'];


    $query = mysqli_query($conn, "UPDATE food set
    food_name='$name', food_cat = '$category', halal_nonhalal='$halal', food_price='$price',food_availability = '$available'  where food_id='$food_id'");
    }
    $query = mysqli_query($conn, "SELECT * FROM food  WHERE food_id  ORDER BY food_id");
    while ($row = mysqli_fetch_array($query)) {

      ?>

      <div class="list-group" style="text-align: center;">
        <?php
      echo "<b><a href='edit_item.php?update= {$row['food_id']}'>{$row['food_name']}</a></b>";  
        ?>
      </div>


    <?php
    }
    ?>
    

    <?php
    if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = mysqli_query($conn, "SELECT * FROM food WHERE food_id =$update");
    while ($row1 = mysqli_fetch_array($query1)) {

    ?>
</div>
</div>

<div class="container">
<div class="col-md-6">
<div class="form-area">
        <form action="edit_item.php" method="GET">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT YOUR FOOD ITEMS HERE </h3>

          <div class="form-group">
            <input class='input' type='hidden' name="f_id" value=<?php echo $row1['food_id'];  ?> />
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Name: </label>
            <input type="text" class="form-control" id="dname" name="dname" value=<?php echo $row1['food_name'];  ?> placeholder="Your Food name" required="">
          </div>  
          
          
          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Category </label>
            <input type="text" class="form-control" id="dcat" name="dcat" value=<?php echo $row1['food_cat'];  ?> placeholder="Your Food Category" required="">
          </div>    

           <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Halal/Non-Halal </label>
            <input type="text" class="form-control" id="dhalal" name="dhalal" value=<?php echo $row1['halal_nonhalal'];  ?> placeholder="H/NH" required="">
          </div> 

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Price: </label>
            <input type="text" class="form-control" id="dprice" name="dprice" value=<?php echo $row1['food_price'];  ?> placeholder="Your Food Price (INR)" required="">
          </div>

           <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Inventory Availability </label>
            <input type="text" class="form-control" id="davailable" name="davailable" value=<?php echo $row1['food_availability'];  ?> placeholder="Availability" required="">
          </div> 
<br>

          <div class="form-group">
          <div class="center">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box" > Update </button>    
      </div>
      </div>
        </form>


    <?php
}
}


  ?>
      
  </div>

</div>


<?php
mysqli_close($conn);
?>
</div>
</div>

<!-- Footer -->
	<footer>
		<br><div class="footer">
		<small><i>Copyright &copy; 2021 mylokalfood</i></small></div>
		
	</footer>

</body>
</html>