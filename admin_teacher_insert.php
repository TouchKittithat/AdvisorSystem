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
    .btn-success{text-align: center; margin-right:10px;}
    .button{text-align: center; margin-top: 20px;}
    </style>
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('navbaradmin.php'); ?>
    
    
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="width: 50rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title">เพิ่มข้อมูลอาจารย์</h5>               
                
                <form  name="edit" action="admin_teacher_insert_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                

        <div class="form-group">
          <label><b>ชื่อ : </b></label>
          <input type="text"  name="name" class="form-control" required placeholder="ชื่อ">
        </div>
        <br>

        
        <div class="form-group">    
            <label><b>นามสกุล : </b></label>
            <input type="text"  name="surname" class="form-control" required placeholder="นามสกุล">
        </div>
        <br>
        

        <div class="form-group">
            <label for="gender"><b>เพศ :</b></label>
            <select name="gender" class="form-control" id="t_gender">
                <option value="">เลือกเพศ</option>
                <option value="ชาย"> ชาย </option>
                <option value="หญิง"> หญิง </option>
            </select>
        </div>
        <br>
        
        <div class="form-group">
            <label for="rank" ><b>ตำแหน่งทางวิชาการ :</b></label>
            <select name="rank" class="form-control" id="t_rank">
                <option value="">เลือกตำแหน่งทางวิชาการ</option>
                <option value="รองศาสตราจารย์"> รองศาสตราจารย์ </option>
                <option value="ผู้ช่วยศาสตราจารย์"> ผู้ช่วยศาสตราจารย์ </option>
                <option value="อาจารย์"> อาจารย์ </option>
            </select>
        </div>
        <br>


        <div class="form-group">
            <label for="course" ><b>หลักสูตร :</b></label>
            <select name="course" class="form-control" id="s_course">
                <option value="">เลือกหลักสูตร</option>
                <option value="วิทยาการคอมพิวเตอร์"> วิทยาการคอมพิวเตอร์ </option>
                <option value="เทคโนโลยีสารสนเทศและการสื่อสาร"> เทคโนโลยีสารสนเทศและการสื่อสาร </option>
                <option value="คณิตศาสตร์"> คณิตศาสตร์ </option>
                <option value="สถิติ"> สถิติ </option>
            </select>
        </div>
        <br>


        <div class="form-group">
          <div class="">
          <label><b>ชื่อผู้ใช้ : </b></label>
            <input type="text"  name="username" class="form-control" required placeholder="ชื่อผู้ใช้">
          </div>
        </div>
        <br>


        <div class="form-group">
          <div class="">
          <label><b>รหัสผ่าน : </b></label>
            <input type="password"  name="password" class="form-control" required placeholder="รหัสผ่าน">
          </div>
        </div>

              <?php
              echo "<br>" ;
              echo '<div class="button">';
              echo "<button class='btn btn-success'><a onclick=\"return confirm('ต้องการเพิ่มหรือไม่?')\">บันทึก</a></button> ";
              echo "<a class='btn btn-danger' href='admin_teacher_list.php'>ยกเลิก</a>";
              echo '</div>';
              ?>
      </form>
            </div>
        </div>
    </div>

    <?php 
    include('footer.php');  
    ?>
</body>
</html>
