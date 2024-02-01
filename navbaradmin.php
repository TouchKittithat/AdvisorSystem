<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600&family=Raleway:wght@300;400;500;600&display=swap');
    *{
    font-family: 'Noto Sans Thai', sans-serif;
    }
    </style>
    <script type="text/javascript">
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <div class="col-md-3 mb-2 mb-md-0">
            <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none" style="font-size:20px;">
              ระบบอาจารย์ที่ปรึกษา
            </a>
          </div>
    
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="admin_home.php" class="nav-link px-2 link-secondary">หน้าหลัก</a></li>
            <li><a href="admin_student_list.php" class="nav-link px-2">นักศึกษา</a></li>
            <li><a href="admin_teacher_list.php" class="nav-link px-2">อาจารย์</a></li>
            <li><a href="admin_student_insert.php" class="nav-link px-2">เพิ่มนักศึกษา</a></li>
            <li><a href="admin_teacher_insert.php" class="nav-link px-2">เพิ่มอาจารย์</a></li>
            <li><a href="#" class="nav-link px-2">เกี่ยวกับ</a></li>
          </ul>
    
          <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-success me-2" onclick="logout()">ออกจากระบบ</button>
            <!-- <button type="button" class="btn btn-primary" onclick="window.location.href='register.html'">Sign-up</button> -->
          </div>
        </header>
      </div>

</body>
</html>