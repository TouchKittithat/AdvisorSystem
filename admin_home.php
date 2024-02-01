<?php
      session_start();
      include('condb.php');

      if ($_SESSION['user_type'] !== 'admin') {
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
    <title>Admin</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php
      include('condb.php');
      include('navbaradmin.php');
    ?>
    <div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">เจ้าหน้าที่</h1>
        <div class="col-lg-6 mx-auto">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

            </div>
        </div>
    </div>
    

<div class="container">
    <h2>จัดการนักศึกษา</h2>
    <div class="row g-2 py-5 row-cols-1 row-cols-lg-2">
    <div class="card" style="width: 25rem; height: 15rem; margin-right:45px;">
        <div class="card-body">
            <h5 class="card-title">ข้อมูลนักศึกษา</h5>
                <p class="card-text">
                    รายชื่อข้อมูลของนักศึกษาทั้งหมด.
                </p>
            <br>
            <a href="admin_student_list.php" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a>
        </div>
    </div>
    <div class="card" style="width: 25rem; height:15rem;">
        <div class="card-body">
            <h5 class="card-title">เพิ่มข้อมูลนักศึกษา</h5>
                <p class="card-text">
                    เพิ่มรายชื่อข้อมูลนักศึกษา.
                </p>
            <br>
            <a href="admin_student_insert.php" class="btn btn-success">เพิ่มข้อมูลนักศึกษา</a>
        </div>
    </div>
    </div>
    <hr>
</div>

<div class="container">
    <h2>จัดการอาจารย์</h2>
    <div class="row g-2 py-5 row-cols-1 row-cols-lg-2">
    <div class="card" style="width: 25rem; height:15rem; margin-right:30px;">
        <div class="card-body">
            <h5 class="card-title">ข้อมูลอาจารย์</h5>
                <p class="card-text">
                    รายชื่อข้อมูลของอาจารย์ทั้งหมด.
                </p>
            <br>
            <a href="admin_teacher_list.php" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a>
        </div>
    </div>
    <div class="card" style="width: 25rem; height:15rem;">
        <div class="card-body">
            <h5 class="card-title">เพิ่มข้อมูลอาจารย์</h5>
                <p class="card-text">
                    เพิ่มรายชื่อข้อมูลอาจารย์.
                </p>
            <br>
            <a href="admin_teacher_insert.php" class="btn btn-success">เพิ่มข้อมูลอาจารย์</a>
        </div>
    </div>

    </div>
</div>

    <?php include("footer.php")?>
</body>
</html>