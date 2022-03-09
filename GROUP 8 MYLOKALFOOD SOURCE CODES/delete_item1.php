<?php
include("include/config.php");

$cheks = implode("','", $_POST['checkbox']);
$sql = "DELETE FROM food  WHERE food_id in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: delete_item.php');
$conn->close();


?>