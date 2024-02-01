<?php
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

    <title>Teacher</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php
      include('condb.php');
      include('navbarteacher.php');
    ?>
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">อาจารย์</h1>
    <?php ?>
    <div class="col-lg-6 mx-auto">
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      </div>
    </div>
  </div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
    <div class="card" style="height: 15rem;">
        <div class="card-body">
            <h5 class="card-title">ข้อมูลส่วนตัว</h5>
                <p class="card-text">
                    ข้อมูลส่วนตัวของอาจารย์.
                </p>
            <br>
            <a href="teacher_info.php" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a>
        </div>
    </div>
    </div>
    <div class="col">
    <div class="card" style="height:15rem;">
        <div class="card-body">
            <h5 class="card-title">ข้อมูลนักศึกษา</h5>
                <p class="card-text">
                    ตารางรายชื่อนักศึกษาและรายวิชาที่เรียนผ่านแล้ว.
                </p>
            <br>
            <a href="teacher_student_list.php" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a>
        </div>
    </div>
    </div>


    </div>
</div>
    <?php include("footer.php")?>
</body>
</html>