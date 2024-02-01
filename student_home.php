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
    <title>Student</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php
      include('navbar.php');
    ?>
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">นักศึกษา</h1>
    <?php ?>
    <div class="col-lg-6 mx-auto">
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      </div>
    </div>
  </div>

<div class="container">
    <div class="row g-3 py-5 row-cols-1 row-cols-lg-3">
    <div class="card" style="width: 25rem; height: 15rem; margin-right:45px;">
        <div class="card-body">
            <h5 class="card-title">ข้อมูลส่วนตัว</h5>
                <p class="card-text">
                    ข้อมูลส่วนตัวของนักศึกษา.
                </p>
            <br>
            <a href="student_info.php" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a>
        </div>
    </div>
    <div class="card" style="width: 25rem; height:15rem; margin-right:30px;">
        <div class="card-body">
            <h5 class="card-title">รายวิชาที่ผ่าน</h5>
                <p class="card-text">
                    ตารางรายวิชาที่นักศึกษาเรียนผ่านแล้ว.
                </p>
            <br>
            <a href="student_course.php" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a>
        </div>
    </div>
    <div class="card" style="width: 25rem; height:15rem;">
        <div class="card-body">
            <h5 class="card-title">เพิ่มรายวิชาที่ผ่าน</h5>
                <p class="card-text">
                    เพิ่มรายวิชาที่นักศึกษาเรียนผ่านแล้ว.
                </p>
            <br>
            <a href="student_course_insert.php" class="btn btn-success">เพิ่มข้อมูลรายวิชา</a>
        </div>
    </div>
    </div>
</div>

    <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 , Advisor System PSU </p>
        </footer>
    </div>
</body>
</html>