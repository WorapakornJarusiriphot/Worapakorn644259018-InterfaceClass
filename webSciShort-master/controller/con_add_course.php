<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>หลักสูตรระยะสั้น - คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <!-- <link href="css/styles.css" rel="stylesheet" /> -->

  <link href="../css/styles.css" rel="stylesheet" />
  <link href="../css/css.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
  <script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=6146da0840d29100191b272f&product=inline-share-buttons"
    async="async"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">

        <a class="navbar-brand " href="../view_course.php"><i class="fas fa-angle-left"></i> หลักสูตรระยะสั้น</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item "><a class="nav-link " aria-current="page"
                href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
            <li class="nav-item "><a class="nav-link " href="https://forms.gle/Gd6Yzdffsb83qpZw7"
                target="_blank">ยืนยันการชำระเงิน</a></li>
            <!-- <li class="nav-item bg-or-3 rounded"><a class="nav-link text-light ms-2 ms-md-auto" href="../">หลักสูตรทั้งหมด</a></li> -->
            </ul>
        </div>
        </div>
    </nav>

    <header class="bg-or-5 py-1 bg-header-img">
            <div class="container-fluid px-4 px-lg-5 my-5">
                <div class="text-center orange-theme-4">
                    <h1 class="display-4 fw-bolder">หลักสูตรระยะสั้น</h1>
                    <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
                </div>
            </div>
    </header>
    
    <div class="card text-center" style="width:100%;">
    <br>
    <img src="../images/Success.png" class="rounded mx-auto d-block" alt="..." width="450px" height="450px">
    <div class="card-body">
        <h5 class="card-title">ข้อมูลอันนี้ได้ถูกเพิ่มลงฐานข้อมูลแล้ว</h5>
        <p class="card-text">คุณได้ทำการเพิ่มข้อมูลเสร็จสิ้น ข้อมูลชุดนี้ได้อยู่ระบบแล้ว!!</p>
        <br>
        <a href="../view_course.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>
    </div>
    <br>
    <br>
    </div>

    <footer class="py-lg-5 bg-green ">
        <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy;  Nakhon Pathom
            Rajabhat University 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
<?php 

    //$cs_img=$_POST[""];
    $cs_img=$_POST["cs_img"];
    $cs_name=$_POST["cs_name"];
    $cs_date=$_POST["cs_date"];
    $cs_wallet=$_POST["cs_wallet"];
    $cs_range_date=$_POST["cs_range_date"];
    $cs_fcourse=$_POST["cs_fcourse"];
    $cs_time=$_POST["cs_time"];
    $cs_location=$_POST["cs_location"];
    $cs_group=$_POST["cs_group"];
    $cs_detail=$_POST["cs_detail"];
    $cs_perform=$_POST["cs_perform"];
    $cs_reward=$_POST["cs_reward"];
    $cs_schedule=$_POST["cs_schedule"];
    $cs_phone=$_POST["cs_phone"];
    $cs_year=$_POST["cs_year"];

    $course=array();
    $course["cs_img"]=$cs_img;
    $course["cs_name"]=$cs_name;
    $course["cs_date"]=$cs_date;
    $course["cs_wallet"]=$cs_wallet;
    $course["cs_range_date"]=$cs_range_date;
    $course["cs_fcourse"]=$cs_fcourse;
    $course["cs_time"]=$cs_time;
    $course["cs_location"]=$cs_location;
    $course["cs_group"]=$cs_group;
    $course["cs_detail"]=$cs_detail;
    $course["cs_perform"]=$cs_perform;
    $course["cs_reward"]=$cs_reward;
    $course["cs_schedule"]=$cs_schedule;
    $course["cs_phone"]=$cs_phone;
    $course["cs_year"]=$cs_year;
    
    include_once "../model/ConDB.php";
    include_once "../model/Course.php";
    $obj_name=new Course();
    $rs2= $obj_name->addCourse($course);

?>
