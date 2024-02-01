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
    .search{}
    </style>
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('navbarteacher.php'); ?>
    
    <div class="container">
        <div class="search">
            <form class="form-label" name="search" action="teacher_student_search.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="s_name" class="form-control" required placeholder="ค้นหาชื่อนักศึกษา">
            </form>
        </div>
    </div>
    
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="width: 70rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title">ข้อมูลนักศึกษา</h5>               
                <?php

    include('condb.php');
        $name = $_POST['s_name'];
        $query = "SELECT s.s_id, s.s_name, s.s_surname, s.s_gender, s.s_course
          FROM student s WHERE s_name LIKE '%$name%'";

    $result = mysqli_query($con, $query);
        echo '<table class="table table-bordered table-striped">';
        echo "
            <tr>
                <th width='15%'>รหัสนักศึกษา</th>
                <th width='10%'>ชื่อ</th>
                <th width='15%'>นามสกุล</th>
                <th width='15%'>เพศ</th>
                <th width='20%'>หลักสูตร</th>           
            </tr>";            
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["s_id"] . "</td>";
            echo "<td>" . $row["s_name"] . "</td>";
            echo "<td>" . $row["s_surname"] . "</td>";
            echo "<td>" . $row["s_gender"] . "</td>";
            echo "<td>" . $row["s_course"] . "</td>";
            echo "<td class='edit'>
            <a href='teacher_student_course.php?ID={$row[0]}' class='btn btn-warning btn-xs'> รายวิชาที่ผ่าน </a>
            </td>";
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

