<?php
session_start();
include('condb.php');

if (isset($_POST['username']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $query_check_s_username = "SELECT * FROM student WHERE s_id='$username'";
    $result_check_s_username = mysqli_query($con, $query_check_s_username);

    $query_check_t_username = "SELECT * FROM teacher WHERE t_username='$username'";
    $result_check_t_username = mysqli_query($con, $query_check_t_username);

    if (mysqli_num_rows($result_check_s_username) == 1) {
        if ($new_password === $confirm_password) {
            $query_update_password = "UPDATE student SET s_password='$new_password' WHERE s_id='$username'";
            mysqli_query($con, $query_update_password);
    
            echo "Password changed successfully.";
        } else {
            echo "New password and confirm password do not match.";
        }
    } elseif (mysqli_num_rows($result_check_t_username) == 1) {
        if ($new_password === $confirm_password) {
            $query_update_password = "UPDATE teacher SET t_password='$new_password' WHERE t_username='$username'";
            mysqli_query($con, $query_update_password);
    
            echo "Password changed successfully.";
        } else {
            echo "New password and confirm password do not match.";
        }
    } else {
        echo "Username not found.";
    }

    mysqli_close($con);

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('Update Successful');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Update Successful');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
}
?>
