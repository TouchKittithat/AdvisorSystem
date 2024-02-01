<?php
session_start();
include('condb.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ตรวจสอบ username และ password ในตาราง student
    $query_check_s = "SELECT * FROM student WHERE s_id='$username' AND s_password='$password'";
    $result_check_s = mysqli_query($con, $query_check_s);

    // ตรวจสอบ username และ password ในตาราง teacher
    $query_check_t = "SELECT * FROM teacher WHERE t_username='$username' AND t_password='$password'";
    $result_check_t = mysqli_query($con, $query_check_t);

    // ตรวจสอบ username และ password สำหรับ admin
    if ($username === 'admin' && $password === '12345') {
        $_SESSION['user_type'] = 'admin';
        header('Location: admin_home.php');
        exit(); // ต้องใส่ exit() เพื่อป้องกันการทำงานต่อในที่นี้
    } elseif (mysqli_num_rows($result_check_s) == 1) {
        $_SESSION['user_type'] = 'student';
        $_SESSION['username'] = $username;
        header('Location: student_home.php');
        exit(); // ต้องใส่ exit() เพื่อป้องกันการทำงานต่อในที่นี้
    } elseif (mysqli_num_rows($result_check_t) == 1) {
        $_SESSION['user_type'] = 'teacher';
        $_SESSION['username'] = $username;
        header('Location: teacher_home.php');
        exit(); // ต้องใส่ exit() เพื่อป้องกันการทำงานต่อในที่นี้
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Login failed. Please try again.');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
        exit(); // ต้องใส่ exit() เพื่อป้องกันการทำงานต่อในที่นี้
    }
}
?>
