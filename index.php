<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600&family=Raleway:wght@300;400;500;600&display=swap');
    *{
    font-family: 'Noto Sans Thai', sans-serif;
    }
      html,
    body {
      height: 100%;
    }

    .form-signin {
      max-width: 330px;
      padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin .edit-password{
      /* background: red; */
      text-align: right;
    }
    h1{
      text-align: center;
    }
    </style>
    
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
            <li><a href="index.php" class="nav-link px-2 link-secondary">หน้าหลัก</a></li>
            <li><a href="index.php" class="nav-link px-2">คุณสมบัติ</a></li>
            <li><a href="index.php" class="nav-link px-2">เกี่ยวกับ</a></li>
          </ul>
    
          <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href='index.php'">เข้าสู่ระบบ</button>
            <!-- <button type="button" class="btn btn-primary" onclick="window.location.href='register.html'">Sign-up</button> -->
          </div>
        </header>
      </div>

      <main class="form-signin w-100 m-auto">
        <form action="process_login.php" method="post">
          <!-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
          <h1 class="h3 mb-3 fw-normal">กรุณาเข้าสู่ระบบ</h1>
      
          <div class="form-floating">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">ชื่อผู้ใช้</label>
          </div>
          <p>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">รหัสผ่าน</label>
          </div>
          <br>
          <div class="edit-password">
            <a style="text-decoration:none" href="forgot_password.php">ลืมรหัสผ่าน ?</a>
          </div>
          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              จดจำฉัน
            </label>
          </div>

          <button class="btn btn-primary w-100 py-2" type="submit">เข้าสู่ระบบ</button>

          <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p>
        </form>
      </main>

      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 , Advisor System PSU By Kittithat</p>
        </footer>
      </div>
</body>
</html>