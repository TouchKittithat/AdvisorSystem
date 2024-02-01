<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
</html>



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
    
    <div class="container" style="text-align:center; font-size:22px;">
        <?php
            include('condb.php');
            $id = $_REQUEST['ID'];
            $query_name = "SELECT s_name, s_surname FROM student WHERE s_id = '$id'";
            $result_name = mysqli_query($con, $query_name);
            if ($result_name) {
                $row = mysqli_fetch_array($result_name);
                echo "รหัสนักศึกษา: " . "$id" . " ชื่อ-นามสกุล: " . $row["s_name"]." ". $row["s_surname"];
            }
        ?>
    </div>
    
    <div class="container d-flex justify-content-center">
        
        <div class="card mb-3" style="width: 70rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title">รายวิชาที่ผ่าน</h5>               
                <?php
    include('condb.php');
    $id = $_REQUEST['ID'];

    $query_course = "SELECT c.c_id, c.c_name, r.s_id, r.c_id, r.r_year, r.r_grade FROM course c JOIN record r ON c.c_id = r.c_id WHERE r.s_id = '$id' ";
    $result_course = mysqli_query($con, $query_course);
    
    if ($result_course) {
        echo '<table class="table table-bordered table-striped">';
        echo "
            <tr>
                <th width='15%'>รหัสรายวิชา</th>
                <th width='10%'>ชื่อรายวิชา</th>
                <th width='15%'>ปีการศึกษา</th>
                <th width='15%'>เกรด</th>
            </tr>";

        while ($row = mysqli_fetch_array($result_course)) {
            echo "<tr>";
            echo "<td>" . $row["c_id"] . "</td>";
            echo "<td>" . $row["c_name"] . "</td>";
            echo "<td>" . $row["r_year"] . "</td>";
            echo "<td>" . $row["r_grade"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        mysqli_free_result($result_course);
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
