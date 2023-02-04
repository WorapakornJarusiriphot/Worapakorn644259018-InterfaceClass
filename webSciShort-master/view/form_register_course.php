<?php 
  include_once("../model/ConDB.php");
  // include_once("../model/Course.php");
  include_once "../model/Iregister.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link href="css/cite.css" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Add jQuery library -->
<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

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
  $cs_id = htmlspecialchars($_GET["cs_id"]);
  
  // $obj_name = new Course();
  // $rs2 = $obj_name->getCourseDetail($cs_id)
  $obj_name = new Register();
  $rs2 = $obj_name->getRegisterCourse($cs_id)
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
    <!-- Header-->
    <header class="bg-or-5 py-1 bg-header-img">
        <div class="container-fluid px-4 px-lg-5 my-5">
            <div class="text-center orange-theme-4">
                <h1 class="display-4 fw-bolder">แบบฟอร์มลงทะเบียนหลักสูตรฝึกอบรมระยะสั้น <?php echo $rs2['cs_name'];?> </h1>
                <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
            </div>
        </div>
    </header>
</br>
</br>
</br>
<div class="container">
<div class="row">
<div class="col-md-2">
</div>


<div class="col-md-8">
	<form name="frmadd"  method="post" action="../controller/con_register_course.php" enctype="multipart/form-data"><!-- ../controller/con_add_course.php -->

		<input name="re_id" type="hidden" id="ID" value="<?php echo $rs2['re_id'];?>"><!-- cs_id -->

    <!-- <input type="hidden" id="cs_year" name="cs_year" value="2566"> ปีปัจจุบันเท่านั้น ต้องมาเปลี่ยนตัวเลขปีทุกปี -->
    <!-- <input type="list" id="cs_year" name="cs_year">  -->
    
    <div class="form-group row">
      <label for="staticEmail" class="col-sm col-form-label">ลงชื่อเข้าใช้ Google เพื่อบันทึกการแก้ไข ดูข้อมูลเพิ่มเติม*จำเป็น</label>
  </div>

    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">อีเมล *</label>
      <div class="col-sm-10">
        <input type="text" name="re_email" class="form-control" id="re_email" placeholder="คำตอบของคุณ">
      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm col-form-label">1. ลงทะเบียนหลักสูตรฝึกอบรมระยะสั้น <?php echo $rs2['cs_name'];?> ค่าลงทะเบียน <?php echo $rs2['cs_wallet'];?> </label>
  </div>


    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">คำนำหน้า *</label>
      <div class="col-sm-10">

    <input list="prefixs" id="re_prefix" name="re_prefix">
    <datalist id="prefixs">
    <option value="นาย">
    <option value="นาง">
    <option value="นางสาว">
    <option value="อื่น ๆ">
    </datalist>

      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ชื่อ นามสกุล *</label>
      <div class="col-sm-10">
        <input type="text" name="re_name" class="form-control" id="re_name" placeholder="คำตอบของคุณ">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">หมายเลขโทรศัพท์ *</label>
      <div class="col-sm-10">
        <input type="text" name="re_phonenumber" class="form-control" id="re_phonenumber" placeholder="คำตอบของคุณ">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">เลขประจำตัวประชาชน *</label>
      <div class="col-sm-10">
        <input type="text" name="re_IDnumber" class="form-control" id="re_IDnumber" placeholder="คำตอบของคุณ">
      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">วุฒิการศึกษาสูงสุด (ที่ได้รับ)</label>
      <div class="col-sm-10">

    <input list="educationals" id="re_educational" name="re_educational">
    <datalist id="educationals">
    <option value="มัธยมต้น">
    <option value="มัธยมปลาย">
    <option value="ปวช.">
    <option value="ปวส.">
    <option value="ปริญญาตรี">
    <option value="ปริญญาโท">
    <option value="ปริญญาเอก">
    <option value="อื่น ๆ">
    </datalist>

      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm col-form-label">2. การชำระเงินโอนผ่านธนาคาร ธนาคารไทยพาณิชย์ ประเภทกระแสรายวัน ชื่อบัญชี มหาวิทยาลัยราชภัฏนครปฐม เลขที่บัญชี 8602499555</label>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm col-form-label">3. ยืนยันการชำระเงิน
แบบฟอร์มยืนยันการชำระเงิน 
<p><a href="https://docs.google.com/forms/d/e/1FAIpQLScubDyU0NrSvlNwc-YiGaPtJkewjCdt6Rcyzi-PpxllY5gulQ/viewform" class="text-primary">https://forms.gle/1i1xJFEtwHXbESUU7</a></p>

</label>
  </div>



  <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
    <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-pencil-square" aria-hidden="true"></i>ส่งข้อมูล</button>    
  </div>
  <!-- <button type="submit" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i>ส่งข้อมูล</button>     -->

</div>


	</form>



 
</div>


<div class="col-md-2">
</div>
</div>
</div>
</br>
</br>
</br>
<footer class="py-lg-5 bg-green ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;  Nakhon Pathom
        Rajabhat University 2021</p>
    </div>
</footer>
</body>
</html>