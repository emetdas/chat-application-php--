<?php
include 'config.php';
$searchTerm = mysqli_real_escape_string($con, $_POST['searchTeam']);
$output ="";
$sql = mysqli_query($con, "SELECT * FROM users WHERE fname LIKE '%$searchTerm%' OR lname ='%$searchTerm%'");
if (mysqli_num_rows($sql) > 0) {
    include 'data.php';
}
else{
    $output .="No user found related to your search trem";
}
echo $output;
