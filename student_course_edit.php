<?php
    session_start();
    include('condb.php');
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
    .button{text-align: center; margin-top: 20px;}
    input[readonly] {background-color: #f0f0f0; color: #888;}
    </style>
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('navbar.php'); ?>
    <?php
    include('condb.php');
    $id = $_REQUEST["ID"];
    $username = $_SESSION['username'];

    $sql = "SELECT r.c_id, c.c_name, r.r_year, r.r_grade FROM record r, course c WHERE r.c_id = c.c_id AND r.c_id = '$id' AND r.s_id = '$username' ";
    $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        extract($row);
    } else {
        echo "No data found for the given ID.";
    }
    ?>
    
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="width: 40rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title">แก้ไขรายวิชา</h5>               
        <div class="container">
        <form name="insert" action="student_course_edit_db.php" method="POST" class="form-horizontal">
            <div class="form-group">
                <label for="id"><b>รหัสรายวิชา : </b></label>
                <input type="text" name="id" value="<?php echo $c_id; ?>" class="form-control" readonly>
            </div>
            <br>

            <div class="form-group">
                <label for="name"><b>ชื่อรายวิชา : </b></label>
                <input type="text" name="name" value="<?php echo $c_name; ?>" class="form-control" readonly>
            </div>
            <br>

            <div class="form-group">
                <label for="year-select"><b>ปีการศึกษา : </b></label>
                <select name="year" id="year-select" class="form-control">
                    <option value="1/2564" <?php if ($r_year == '1/2564') echo 'selected'; ?>>1/2564</option>
                    <option value="2/2564" <?php if ($r_year == '2/2564') echo 'selected'; ?>>2/2564</option>
                    <option value="1/2565" <?php if ($r_year == '1/2565') echo 'selected'; ?>>1/2565</option>
                    <option value="2/2565" <?php if ($r_year == '2/2565') echo 'selected'; ?>>2/2565</option>
                    <option value="1/2566" <?php if ($r_year == '1/2566') echo 'selected'; ?>>1/2566</option>
                    <option value="2/2566" <?php if ($r_year == '2/2566') echo 'selected'; ?>>2/2566</option>
                </select>
            </div>
            <br>

            <div class="form-group">
                <label for="grade-select"><b>เกรด : </b></label>
                <select name="grade" id="grade-select" class="form-control">
                    <option value="A" <?php if ($r_grade == 'A') echo 'selected'; ?>>A</option>
                    <option value="B+" <?php if ($r_grade == 'B+') echo 'selected'; ?>>B+</option>
                    <option value="B" <?php if ($r_grade == 'B') echo 'selected'; ?>>B</option>
                    <option value="C+" <?php if ($r_grade == 'C+') echo 'selected'; ?>>C+</option>
                    <option value="C" <?php if ($r_grade == 'C') echo 'selected'; ?>>C</option>
                    '<option value="D+" <?php if ($r_grade == 'D+') echo 'selected'; ?>>D+</option>
                    <option value="D" <?php if ($r_grade == 'D') echo 'selected'; ?>>D</option>
                </select>
            </div>
            <br>

            <div class="button">
            <button type="submit" class="btn btn-success" name="btninsert">บันทึก</button>
            <a href="student_course.php" class="btn btn-danger">ยกเลิก</a>
            </div>
            
        </form>
    </div>
            </div>
        </div>
    </div>

    <?php 
    include('footer.php');  
    ?>
</body>
</html>
