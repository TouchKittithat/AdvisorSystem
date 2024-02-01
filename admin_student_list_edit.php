<?php
include('condb.php');
$id = $_REQUEST["ID"];
$sql = "SELECT * FROM student WHERE s_id ='$id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);
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
    .btn-success{text-align: center; margin-right:10px;}
    .button{text-align: center; margin-top: 20px;}
    input[readonly] {background-color: #f0f0f0; color: #888;}
    </style>
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('navbaradmin.php'); ?>
    
    
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="width: 50rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title">แก้ไขข้อมูลอาจารย์</h5>               
                
                <form  name="edit" action="admin_student_list_edit_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
      <input type="hidden" name="id" value="<?php echo $id; ?>" />

      <div class="form-group">
          <div class="">
            <label><b>รหัสนักศึกษา : </b></label>
            <input type="text"  name="id" class="form-control" required placeholder="id" value="<?php echo $s_id; ?>" readonly>
          </div>
        </div>
        <br>


      <div class="form-group">
          <div>
            <label><b>ชื่อ : </b></label>
            <input type="text"  name="name" class="form-control" required placeholder="name" value="<?php echo $s_name; ?>">
          </div>
        </div>
        <br>

        <div class="form-group">
          <div >
            <label><b>นามสกุล : </b></label>
            <input type="text"  name="surname" class="form-control" required placeholder="surname" value="<?php echo $s_surname; ?>">
          </div>
        </div>
        <br>

        <div class="form-group">
            <label for="gender" ><b>เพศ : </b></label>
            <select name="gender" class="form-control" id="t_gender">
                <option value="ชาย" <?php if ($s_gender == 'ชาย') echo 'selected'; ?>> ชาย </option>
                <option value="หญิง" <?php if ($s_gender == 'หญิง') echo 'selected'; ?>> หญิง </option>
            </select>
        </div>
        <br>

        

        <div class="form-group">
            <div>
            <label for="course" ><b>หลักสูตร : </b></label>
            <select name="course" class="form-control" id="s_course">
                <option value="วิทยาการคอมพิวเตอร์" <?php if ($s_course == 'วิทยาการคอมพิวเตอร์') echo 'selected'; ?>> วิทยาการคอมพิวเตอร์ </option>
                <option value="เทคโนโลยีสารสนเทศและการสื่อสาร" <?php if ($s_course == 'เทคโนโลยีสารสนเทศและการสื่อสาร') echo 'selected'; ?>> เทคโนโลยีสารสนเทศและการสื่อสาร </option>
                <option value="คณิตศาสตร์" <?php if ($s_course == 'คณิตศาสตร์') echo 'selected'; ?>> คณิตศาสตร์ </option>
                <option value="สถิติ" <?php if ($s_course == 'สถิติ') echo 'selected'; ?>> สถิติ </option>
            </select>
            </div>
        </div>
        <br>

        <div class="form-group">
          <div class="">
            <label><b>รหัสอาจารย์ที่ปรึกษา : </b></label>
            <input type="text"  name="t_id" class="form-control" required placeholder="teacherid" value="<?php echo $t_id; ?>">
          </div>
        </div>

        
              <?php
              echo "<br>" ;
              echo '<div class="button">';
              echo "<button class='btn btn-success'><a onclick=\"return confirm('ต้องการเพิ่มหรือไม่?')\">บันทึก</a></button> ";
              echo "<a class='btn btn-danger' href='admin_student_list.php'>ยกเลิก</a>";
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