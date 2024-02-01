<?php
      include('condb.php');
      session_start();

      if (!isset($_SESSION['username']) || $_SESSION['user_type'] !== 'teacher') {
          header('Location: index.php');
          exit();
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600&family=Raleway:wght@300;400;500;600&display=swap');
    *{
    font-family: 'Noto Sans Thai', sans-serif;
    }
    .button{text-align: center; margin-top: 20px;}
    </style>
    <title>Document</title>
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('navbarteacher.php'); ?>
    
    
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="width: 25rem; height: 20rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title" >ข้อมูลส่วนตัว</h5>               
    <?php
  
      include('condb.php');
  
      $username = $_SESSION['username'];
  
      $query = "SELECT * FROM teacher WHERE t_username='$username'";
      $result = mysqli_query($con, $query);
  
      if ($result) {
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<div class='container'>";
                  echo  " ชื่อ - นามสกุล : " . $row["t_name"] . "    " . $row["t_surname"] . "<br>";
                  echo  " เพศ  : " . $row["t_gender"] . "<br>";
                  echo  " ตำแหน่งทางวิชาการ  : " . $row["t_rank"] . "<br>";
                  echo  " หลักสูตร  : " . $row["t_course"] . "<br><br>";

                  echo "<div class='button'>";
                  echo  "<a style='text-decoration:none;' href='teacher_edit.php?ID={$row["t_id"]}' class='btn btn-warning btn-xs'>แก้ไขข้อมูล</a>";
                  echo "</div>";
                  echo "</div>";
                
              }
  
          } else {
              echo "0 results";
          }
          mysqli_free_result($result);
      } else {
          echo "Error: " . mysqli_error($con);
      }
      mysqli_close($con);
    ?>
            </div>
        </div>
    </div>

    <?php 
    include('footer.php');  
    ?>
</body>
</html>
