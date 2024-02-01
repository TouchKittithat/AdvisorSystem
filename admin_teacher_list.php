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
    .search{}
    </style>
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('navbaradmin.php'); ?>
    
    <div class="container">
        <div class="search">
            <form class="form-label" name="search" action="admin_teacher_search.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="t_name" class="form-control" required placeholder="ค้นหาชื่ออาจารย์">
            </form>
        </div>
    </div>
    
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="width: 70rem; margin-top: 60px;">
            <div class="card-body">
                <h5 class="card-title">ข้อมูลอาจารย์</h5>               
                <?php
    include('condb.php');

    $query = "SELECT * FROM teacher ORDER BY t_id ";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '<table class="table table-bordered table-striped">';
        echo "
            <tr>
                <th>ลำดับที่</th>
                <th width='15%'>ชื่อ</th>
                <th width='15%'>นามสกุล</th>
                <th width='15%'>เพศ</th>
                <th width='15%'>ตำแหน่งทางวิชาการ</th>
                <th width='15%'>หลักสูตร</th>
            </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["t_id"] . "</td>";
            echo "<td>" . $row["t_name"] . "</td>";
            echo "<td>" . $row["t_surname"] . "</td>";
            echo "<td>" . $row["t_gender"] . "</td>";
            echo "<td>" . $row["t_rank"] . "</td>";
            echo "<td>" . $row["t_course"] . "</td>";
            echo "<td class='edit'><a href='admin_teacher_list_edit.php?ID={$row["t_id"]}'>แก้ไข</a></td>";
            echo "<td class='delete'><a href='admin_teacher_del_db.php?ID={$row["t_id"]}' onclick=\"return confirm('Do you want to delete this record?')\" >ลบ</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
    ?>
            </div>
        </div>
    </div>

    <?php 
    include('footer.php');  
    ?>
</body>
</html>
