<?php
session_start();
include 'config.php';
if (isset($_SESSION['unique_id'])) {
    $outgoing_id = mysqli_real_escape_string($con,$_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($con,$_POST['incoming_id']);
    $message = mysqli_real_escape_string($con,$_POST['message']);
    if (!empty($message)) {
        $sql = mysqli_query($con,"INSERT INTO messages (incoming_msg_id,outgoing_msg_id,msg) VALUES ({$incoming_id},{$outgoing_id},'{$message}')") or die();
    }
}else{
    header("location: login.php");
}
?>