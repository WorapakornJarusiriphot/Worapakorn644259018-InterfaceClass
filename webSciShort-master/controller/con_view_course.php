<!DOCTYPE html>
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

  <?php

  include_once("../model/ConDB.php");
  include_once("../model/Course.php");

  $cs_id = htmlspecialchars($_GET["cs_id"]);
  // echo $cs_id;
  $obj_name = new Course();
  $rs2 = $obj_name->getCourseDetail($cs_id)
  // echo $rs2['cs_id']
  ?>

  <!-- Responsive navbar-->
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

  <!-- Page content-->
  <div class="container mt-4" data-bs-spy="scroll" data-bs-target="#list-example">
    <div class="row">

      <div class="col-lg-8">
        <!-- Post content-->
        <article>
          <!-- Post header-->
          <header class="mb-4">
            <!-- <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="../index.html" class="badge bg-or-2 text-decoration-none link-light">Home</a> </li>
                                  <li class="breadcrumb-item active" aria-current="page">การอบรมเชิงปฏิบัติการการพัฒนา TPACK สำหรับครูวิทยาศาสตร์</li>
                                </ol>
                              </nav> -->
            <!-- Post title-->
            <h1 class="fw-bolder mb-1">
              <?php
              echo $rs2['cs_name'];
              ?>
            </h1>
            <!-- Post meta content-->
            <div class="text-muted fst-italic mb-2"><i class="far fa-calendar-alt"></i> วันที่รับสมัคร 
            <?php echo $rs2['cs_range_date']?>
          </div>
            <div class="sharethis-inline-share-buttons"></div>




            <!-- Post categories-->
            <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                              <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
          </header>
          <!-- Preview image figure-->
          <figure class="mb-4"><img class="img-fluid rounded" src="../<?=$rs2['cs_img'];?>" alt="..." /></figure>
          <!-- Post content-->
          <section class="mb-5 course-body">
            <!-- <h5 class="fw-bolder mb-4 mt-5 " id="list-item-1" ><i class="fas fa-book-reader"></i> คำอธิบายหลักสูตร หลักการและเหตุผล</h5>
                              <p class="fs-6 mb-4 course-content">
                                สามารถพัฒนา TPACK สำหรับครูวิทยาศาสตร์ สามารถออกแบบแผนการจัดการเรียนรู้ในการ บูรณาการ TPACK ได้
                              </p> -->

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-3"><i class="far fa-calendar-alt"></i> ช่วงวันรับสมัคร</h5>
            <p class="fs-6 mb-4 course-content"><?php echo $rs2['cs_range_date']?></p>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-31"><i class="far fa-calendar-alt"></i> ช่วงเวลาเรียน</h5>
            <p class="fs-6 mb-4 course-content"><?php echo $rs2['cs_date']?></p>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-32"><i class="far fa-clock"></i> ระยะเวลาของหลักสูตร </h5>
            <p class="fs-6 mb-4 course-content"><?php echo $rs2['cs_time']?></p>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-5"><i class="fas fa-map-marker-alt"></i> สถานที่</h5>
            <ul class="list-inline course-content fs-6">
              <!-- <li class="list-inline-item">online โปรแกรม Zoom</li> -->
              <li class="list-inline-item"><?php echo $rs2['cs_location']?></li>
            </ul>



            <!-- <h4 class="fw-bolder mb-4 mt-5">ประเภทของหลักสูตรระยะสั้น</h4> -->

            <!-- <h5 class="fw-bolder mb-4 mt-5" id="list-item-9">ประเภทของหลักสูตรระยะสั้น </h5>
                                <p class="fs-6 mb-4 course-content">เข้าระบบคลังหน่วยกิต</p> -->

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-2"><i class="fas fa-bullseye"></i> วัตถุประสงค์</h5>
            <ul class="course-content fs-6">
              <li><?php echo $rs2['cs_fcourse']?></li>
            </ul>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-4"><i class="far fa-user"></i> กลุ่มเป้าหมาย</h5>
            <ul class="list-inline course-content fs-6">

              <li class="list-inline-item"><?php echo $rs2['cs_group']?></li>

            </ul>


            <h5 class="fw-bolder mb-4 mt-5" id="list-item-6"><i class="fas fa-chalkboard"></i> ขอบข่ายเนื้อหา</h5>
            <ul class="course-content fs-6">
              <li><?php echo $rs2['cs_detail']?></li>
            </ul>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-7"><i class="fas fa-file-alt"></i> การวัดผลประเมินผล</h5>
            <li class="list-inline-item"><?php echo $rs2['cs_perform']?></li>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-8"><i class="fas fa-award"></i> ผลที่คาดว่าจะได้รับ</h5>
            <ul class="course-content fs-6">
              <li><?php echo $rs2['cs_reward']?></li>
            </ul>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-11"><i class="fas fa-clipboard-list"></i> กำหนดการ</h5>
            <ul class=" course-content fs-6 contact-course">
              <li><a href="../<?=$rs2['cs_schedule'];?>" target="_blank" class="orange-theme-2">ดาวน์โหลด PDF</a> </li>
            </ul>


            <h5 class="fw-bolder mb-4 mt-5" id="list-item-10"><i class="far fa-comments"></i> สอบถามเพิ่มเติม</h5>
            <ul class="list-inline course-content fs-6 contact-course">
              <li class="list-inline-item"><i class="fas fa-phone-square-alt"></i> <a href="#"><?php echo $rs2['cs_phone']?></a>
              </li>
            </ul>

            <h5 class="fw-bolder mb-4 mt-5" id="list-item-3"><i class="far fa-calendar-alt"></i> ปีที่เปิดสอน</h5>
            <p class="fs-6 mb-4 course-content"><?php echo $rs2['cs_year']?></p>



      </div>

      </section>

      </article>


      <!-- Side widgets-->
      <div class="col-lg-4  d-none d-lg-block">

        <div id="list-example " class="list-group sticky-top ">
          <div class="card-header bg-or-4"><a class=" list-group-item-action text-light" href="#"></a></div>
          <!-- <a class="list-group-item list-group-item-action" href="#list-item-1"><i class="fas fa-book-reader"></i> คำอธิบายหลักสูตร</a> -->
          <a class="list-group-item list-group-item-action" href="#list-item-3"><i class="far fa-calendar-alt"></i>
            วันรับสมัคร</a>
          <a class="list-group-item list-group-item-action" href="#list-item-3"><i class="far fa-calendar-alt"></i>
            ช่วงเวลาเรียน</a>
          <a class="list-group-item list-group-item-action" href="#list-item-5"><i class="fas fa-map-marker-alt"></i>
            สถานที่</a>

          <a class="list-group-item list-group-item-action" href="#list-item-2"><i class="fas fa-bullseye"></i>
            วัตถุประสงค์</a>
          <a class="list-group-item list-group-item-action" href="#list-item-4"><i class="far fa-user"></i>
            กลุ่มเป้าหมาย</a>
          <a class="list-group-item list-group-item-action" href="#list-item-6"><i class="fas fa-chalkboard"></i>
            ขอบข่ายเนื้อหา</a>
          <a class="list-group-item list-group-item-action" href="#list-item-7"><i class="fas fa-file-alt"></i>
            การวัดผลประเมินผล</a>
          <a class="list-group-item list-group-item-action" href="#list-item-8"><i class="fas fa-award"></i>
            ผลที่คาดว่าจะได้รับ</a>
          <a class="list-group-item list-group-item-action" href="#list-item-11"><i class="fas fa-clipboard-list"></i>
            กำหนดการ</a>
          <!-- <a class="list-group-item list-group-item-action" href="#list-item-9">เข้าระบบคลังหน่วยกิต <i class="fas fa-graduation-cap text-success"></i></a> -->
          <div class="card-header bg-or-2 text-light">
            <i class="fas fa-wallet "></i> ค่าลงทะเบียน <?php echo $rs2['cs_wallet']?>/คน

          </div>
          <div class="my-3 card-rela">
          <a class="btn btn-success" href="../view/form_register_course.php?cs_id=<?=$rs2['cs_id']?>">ลงทะเบียน</a>
            <a href="#list-item-10" class="btn btn-primary">สอบถามเพิ่มเติม</a>
            <a class="btn btn-outline-warning" href="../view/form_edit_course.php?cs_id=<?=$rs2['cs_id']?>">EDIT</a>
            <a class="btn btn-outline-danger" href="con_del_course.php?cs_id=<?=$rs2['cs_id']?>" onclick="return confirm('คุณต้องการจะลบข้อมูลชุดนี้หรือไม่? แน่ใจนะ!!')">DELETE</a>
          </div>
        </div>

      </div>
    </div>
  </div>



  <!-- Footer-->
  <div class="container-fluid bg-orange d-lg-none fixed-bottom text-center">
    <div class="my-2 "><i class="fas fa-wallet"></i> ค่าลงทะเบียน 1,000 บาท/คน</div>
    <div class="mb-1">
      <a href="https://forms.gle/SC6zWtHG8bFuE2Vx5" target="_blank" class="btn btn-success ">ลงทะเบียน</a>
      <a href="#list-item-10" class="btn btn-light float-sm-right">สอบถามเพิ่มเติม</a>
    </div>

    <!-- <a href="#" class="btn btn-success stretched-link" style="position: fixed; bottom: 0px; right: 0px;">ลงทะเบียน</a> -->
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
</body>

</html>