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
<link rel="stylesheet" type="text/css" href="css/delete_item.css">
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
 
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="delete_item1.php" method="POST">
        <br style="clear: both">
          <h3 class="delete"> DELETE YOUR FOOD ITEMS FROM HERE </h3>


<?php
$sql = "SELECT * FROM food WHERE food_id ORDER BY food_id";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>


<div>
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr style="float:center">
        <th width="2%" > # </th>
        <th width="10%"> Food ID </th>
		<th width="12%"> Restaurant ID </th>
        <th width="20%"> Food Name </th>
        <th width="15%"> Food Category </th>
        <th width="15%"> Halal/Non Halal </th>
        <th width="15%"> Food Price(RM) </th>
        <th width="15%"> Food Availability </th>
    </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr style="float:center">
      <td> <input name="checkbox[]" type="checkbox" value="<?php echo $row['food_id']; ?>"/> </td>
      <td style="text-align:center;"><?php echo $row["food_id"]; ?></td>
	  <td style="text-align:center;"><?php echo $row["rest_id"]; ?></td>
      <td style="text-align:center;"><?php echo $row["food_name"]; ?></td>
      <td style="text-align:center;"><?php echo $row["food_cat"]; ?></td>
      <td style="text-align:center;"><?php echo $row["halal_nonhalal"]; ?></td>
	  <td style="text-align:center;"><?php echo $row["food_price"]; ?></td>
      <td style="text-align:center;"><?php echo $row["food_availability"]; ?></td>
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
</div>


    <br>
          <div class="form-group">
          <button type="submit" id="submit" name="delete" value="Delete" class="btn btn-danger pull-right"> DELETE</button>    
      </div>

  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>

        
        </div>
      
    </div>
</div>

<!-- Footer -->
	<footer>
		<br><div class="footer">
		<small><i>Copyright &copy; 2021 mylokalfood</i></small></div>
		
	</footer>

</body>
</html>