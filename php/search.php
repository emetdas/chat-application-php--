<?php
session_start();
include 'config.php';
$outgoing_id = $_SESSION['unique_id'];
$searchTerm = mysqli_real_escape_string($con, $_POST['searchTeam']);
$output ="";
$sql = mysqli_query($con, "SELECT * FROM users WHERE NOT unique_id ={$outgoing_id} AND(fname LIKE '%$searchTerm%' OR lname ='%$searchTerm%')");
if (mysqli_num_rows($sql) > 0) {
    include 'data.php';
}
else{
    $output .="No user found related to your search trem";
}
echo $output;
