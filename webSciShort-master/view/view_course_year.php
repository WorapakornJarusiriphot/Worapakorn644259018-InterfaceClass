 <?php 
    //เชื่อมต่อข้อมูล
    include_once "model/ConDB.php";
    include_once "model/Course.php";
    //สร้างตัวแปร
    $obj_name=new Course();
    //$rs2= $obj_name->getCourse();
    $rs2= $obj_name->getCourse($year);
    //เรียกใช้ที่
    foreach ($rs2 as $result2){
    ?>
    <!-- Course section -->
    <div class="col mb-5">
                            
                    <div class="card h-150">
                            <a href="controller/con_view_course.php?cs_id=<?=$result2['cs_id']?>" class="card-link">
                                <!-- Product image-->
                                <img class="card-img-top" src="<?=$result2['cs_img'];?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-left">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder course-name"><?=$result2['cs_name'];?></h5>
                                        <!-- course tag line-->
                                        <div class="course-note"><i class="far fa-calendar-alt"></i> วันที่อบรม <?=$result2['cs_date'];?></div>
                                        <!-- <div class="course-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                                        <div class="course-note"><i class="far fa-building"></i> มหาวิทยาลัยราชภัฏนครปฐม</div>
                                        <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                                        <div class="course-note"><i class="fas fa-wallet"></i> <?=$result2['cs_wallet'];?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
    <!-- End Course section -->
<?php }?>