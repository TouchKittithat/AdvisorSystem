<?php
include('condb.php');

$id = $_POST["t_id"];
$name = $_POST["t_name"];
$surname = $_POST["t_surname"];
$rank = $_POST["t_rank"];

$sql = "UPDATE teacher SET t_name = '$name', t_surname = '$surname', t_rank = '$rank' WHERE t_id = '$id' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
mysqli_close($con);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Update Successful');";
    echo "window.location = 'teacher_info.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error. Please try updating again.');";
    echo "window.location = 'teacher_info.php'; ";
    echo "</script>";
}
