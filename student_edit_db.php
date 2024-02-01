<?php
    include('condb.php');
    $id = $_POST['s_id'];
    $name = $_POST['s_name'];
    $surname = $_POST['s_surname'];

    $sql = "UPDATE student SET s_name = '$name', s_surname = '$surname' WHERE s_id = '$id'";

    $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    mysqli_close($con);

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('Update success !!!');";
        echo "window.location = 'student_info.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Error back to upload again');";
        echo "window.location = 'student_info.php'; ";
        echo "</script>";
    }
?>