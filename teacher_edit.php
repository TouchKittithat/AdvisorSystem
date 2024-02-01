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

    </style>
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('navbarteacher.php'); ?>
    <?php
        include('condb.php');
        $id = $_REQUEST["ID"];
        $sql = "SELECT * FROM teacher WHERE t_id='$id' ";
        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
        
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
                <h5 class="card-title">แก้ไขข้อมูลส่วนตัว</h5>               
                <div class="row">

                <form  name="edit" action="teacher_edit_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
                    <input  type="hidden" name="t_id" value="<?php echo $t_id; ?>" />
                    <p1><b>ชื่อ :</b></p1>
                    <input class="form-control" type="text" name="t_name" value="<?php echo $t_name; ?>">
                    
                    <br>
                    <p2><b>นามสกุล :</b> </p2>
                    <input class="form-control" type="text" name="t_surname" value="<?php echo $t_surname; ?>">
                    <br>
                    <div class="form-group">
                        <div class="">
                            <label for="rank"><b>ตำแหน่งทางวิชาการ :</b> </label>
                            <select name="t_rank" class="form-control" id="t_rank">
                                <option value="ศาสตราจารย์" <?php if ($t_rank == 'ศาสตราจารย์') echo 'selected'; ?>>ศาสตราจารย์</option>
                                <option value="รองศาสตราจารย์" <?php if ($t_rank == 'รองศาสตราจารย์') echo 'selected'; ?>>รองศาสตราจารย์</option>
                                <option value="ผู้ช่วยศาสตราจารย์" <?php if ($t_rank == 'ผู้ช่วยศาสตราจารย์') echo 'selected'; ?>>ผู้ช่วยศาสตราจารย์</option>
                                <option value="อาจารย์" <?php if ($t_rank == 'อาจารย์') echo 'selected'; ?>>อาจารย์</option>
                            </select>
                        </div>
                    </div>

                    <br><br>

                    <div class="button">
                    <input class="btn btn-success" type="submit" value="บันทึก" name="update">
                    <a href="teacher_info.php" class="btn btn-danger">ยกเลิก</a>
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
