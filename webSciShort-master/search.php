<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>หลักสูตรระยะสั้น - คณะมนุษยศาสตร์และสังคมศาสตร์ มหาวิทยาลัยราชภัฏนครปฐม</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/css.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="http://sc.npru.ac.th/"><i class="fas fa-atom"></i> SC Short Courses</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://forms.gle/Gd6Yzdffsb83qpZw7"
                            target="_blank">ยืนยันการชำระเงิน</a></li>
                    <li class="nav-item"><a class="nav-link" href="./view/forn_add_course.php"
                            target="_blank">เพิ่มคอร์ส</a></li>
                </ul>

                <form action="search.php" method="get">
                <!-- <label for="browser">Choose your browser from the list:</label> -->
                <input list="keyword" name="keywords" id="keywords">
                <datalist id="keyword">
                    <option value="2565">
                    <option value="2566">
                </datalist>
                <!-- <form class="d-flex" action="search.php" method="get">      
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="keywords" autocomplete="off"> -->
                    <button class="btn btn-outline-dark" type="submit" value="Search">Search</button> 
                </form>

            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-or-5 py-1 bg-header-img">
        <div class="container-fluid px-4 px-lg-5 my-5">
            <div class="text-center orange-theme-4">
                <h1 class="display-4 fw-bolder">หลักสูตรระยะสั้น</h1>
                <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
            
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sci_course";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['keywords']))
    {
        $keywords = $conn->escape_string($_GET['keywords']);
        $query =  $conn->query("
            SELECT *
            FROM sci_cs 
            WHERE cs_name LIKE '%{$keywords}%' or cs_year LIKE '%{$keywords}%'
        ");
?>

    <?php
        if($query->num_rows){
            while($r = $query->fetch_object()){
    ?>
            <!-- Course section -->
            <div class="col mb-5">
                <div class="card h-150">
                    <a href="controller/con_view_course.php?cs_id=<?=$r->cs_id;?>" class="card-link">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?=$r->cs_img;?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-left">
                                <!-- Product name-->
                                <h5 class="fw-bolder course-name"><?=$r->cs_name;?></h5>
                                <!-- course tag line-->
                                <div class="course-note"><i class="far fa-calendar-alt"></i> ปีที่เปิดสอน <?=$r->cs_year;?></div>
                                <div class="course-note"><i class="far fa-calendar-alt"></i> วันที่อบรม <?=$r->cs_date;?></div>
                                <!-- <div class="course-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                                <div class="course-note"><i class="far fa-building"></i> มหาวิทยาลัยราชภัฏนครปฐม</div>
                                <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                                <div class="course-note"><i class="fas fa-wallet"></i> <?=$r->cs_wallet;?></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Course section -->
        <?php
            }
        }
    }
?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-green">
        <div class="container-fluid">
            <p class="m-0 text-center text-dark">
                Copyright &copy; Faculty of Faculty of Science and Technology Nakhon Pathom Rajabhat University 2021
                <br>
                <!-- <a href="#">web'dev by Kingzlab | Illustration by SaNeKi | credit </a> -->
            </p>

        </div>

    </footer>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
