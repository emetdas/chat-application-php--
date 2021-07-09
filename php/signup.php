<?php
session_start();
include 'config.php';
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($con, "SELECT email FROM users WHERE email='{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email - This email Already exist";
        } else {
            if (isset($_FILES['image'])) {
                $Img_name = $_FILES['image']['name'];
                $temp_name = $_FILES['image']['tmp_name'];
                $img_expload = explode('.', $Img_name);
                $img_ext = end($img_expload);
                $extenisons = ['jpg', 'png', 'jpeg', 'svg'];
                if (in_array($img_ext, $extenisons) === true) {
                    $time = time();
                    $new_image = $time . $Img_name;
                    if (move_uploaded_file($temp_name, "upload/$new_image")) {
                        $status = "Active now";
                        $random_id = rand(time(), 10000);
                        $sql1 = mysqli_query($con, "INSERT INTO users(unique_id,fname,lname,email,password,image,status) VALUES({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_image}','{$status}')");
                        if ($sql1) {
                            $sql2 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql2) > 0) {
                                $row = mysqli_fetch_assoc($sql2);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            }
                        } else {
                            echo "Somthing went worng";
                        }
                    }
                } else {
                    echo "Image formate is jpg,png,svg,jpeg";
                }
            } else {
                echo "Please Select an Image file";
            }
        }
        $email_find = mysqli_fetch_assoc($sql);
    } else {
        echo "$email -This in not valid email!";
    }
} else {
    echo "All input field are required!";
}
