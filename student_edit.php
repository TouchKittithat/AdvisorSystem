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
    <?php include('navbar.php'); ?>
    <?php
    include('condb.php');
    $id = $_REQUEST["ID"];
    $sql = "SELECT * FROM student WHERE s_id='$id' ";
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
                    <form name="edit" action="student_edit_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <input class="form-control" type="hidden" name="s_id" value="<?php echo $id; ?>" />
                    <p1>ชื่อ :</p1>
                    <input class="form-control" type="text" name="s_name" value="<?php echo $s_name; ?>">
                    <br>
                    <p2>นามสกุล :</p2>
                    <input class="form-control" type="text" name="s_surname" value="<?php echo $s_surname; ?>">
                    <br><br>

                    <div class="button">
                    <input class="btn btn-success" type="submit" value="บันทึก" name="update">
                    <a href="student_info.php" class="btn btn-danger">ยกเลิก</a>
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
