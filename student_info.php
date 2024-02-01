<?php
      include('condb.php');
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['user_type'] !== 'student') {
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
    <?php include('navbar.php'); ?>
    
    
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="width: 25rem; height: 20rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title" >ข้อมูลส่วนตัว</h5>               
    <?php
      include('condb.php');
    
    $username = $_SESSION['username'];

    $query = "SELECT s.s_id, s.s_name, s.s_surname, s.s_gender, s.s_course, s.t_id, t.t_name ,t.t_surname
          FROM student s 
          JOIN teacher t ON s.t_id = t.t_id 
          WHERE s.s_id = '$username'";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='container'>";
                echo  " รหัสนักศึกษา: " . $row["s_id"] . "<br>";
                echo  " ชื่อ-นามสกุล: " . $row["s_name"] . "    " . $row["s_surname"] . "<br>";
                echo  " เพศ: " . $row["s_gender"] . "<br>";
                echo  " หลักสูตร: " . $row["s_course"] . "<br>";
                echo  " อาจารย์ที่ปรึกษา : " . $row["t_name"] . "    " . $row["t_surname"]  . "<br><br>";

                echo "<div class='button'>";
                echo  "<a href='student_edit.php?ID={$row["s_id"]}' class='btn btn-warning btn-xs'>แก้ไขข้อมูล</a>";
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
