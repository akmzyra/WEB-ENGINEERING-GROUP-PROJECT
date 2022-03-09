<?php
session_start();
include("include/config.php");
?>

<?php

$food_id = $_POST['food_id']; 
$food_review = $_POST['food_review'];
$food_ratings = $_POST['food_ratings'];

$sql = "INSERT INTO food_review (food_id, food_review, food_ratings)
VALUES('" . $food_id . "','" . $food_review . "','" . $food_ratings . "')";

if (mysqli_query($conn, $sql)) {
            header("location:review.php"); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
}


mysqli_close($conn);
?>