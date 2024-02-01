<?php
  session_start();
  include('condb.php');
  $id = $_REQUEST["ID"];
  $username = $_SESSION['username'];

  $sql = "DELETE FROM record WHERE c_id='$id' AND s_id='$username' ";
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Delete Succesfuly');";
    echo "window.location = 'student_course.php';";
    echo "</script>";
  } else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "window.location = 'student_course.php';";
    echo "</script>";
  }
?>