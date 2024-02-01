<?php
                include('condb.php');
                session_start();

    if (!isset($_SESSION['username']) || $_SESSION['user_type'] !== 'student') {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600&family=Raleway:wght@300;400;500;600&display=swap');
    *{font-family: 'Noto Sans Thai', sans-serif;}
    h5{text-align: center;}
    </style>
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('navbar.php'); ?>
    
    
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="width: 70rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title">รายวิชาที่ผ่าน</h5>               
                <?php
                include('condb.php');

    $username = $_SESSION['username'];

    $query = "SELECT c.c_id, c.c_name, r.r_year, r.r_grade FROM course c, record r WHERE c.c_id = r.c_id AND r.s_id = '$username'";
    $result = mysqli_query($con, $query);
    echo "<br><br>";
    echo '<table class="table table-bordered table-striped">';
    echo "
            <tr>
                <th>รหัสรายวิชา</th>
                <th>ชื่อรายวิชา</th>
                <th>ปีการศึกษา</th>  
                <th>เกรด</th>                
            </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["c_id"] .  "</td> ";
        echo "<td>" . $row["c_name"] .  "</td> ";
        echo "<td>" . $row["r_year"] .  "</td> ";
        echo "<td>" . $row["r_grade"] .  "</td> ";
        echo "<td class='edit' ><a href='student_course_edit.php?act=edit&ID=$row[0]'>แก้ไข</a></td> ";
        echo "<td class='delete' ><a href='student_course_delete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">ลบ</a></td> ";
        echo "</tr>";
    }
    echo "</table>";
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
