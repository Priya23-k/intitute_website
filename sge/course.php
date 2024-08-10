<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/glaxdu/glaxdu/course.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 10:51:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Glaxdu - Education Bootstrap 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
</head>

<body>

<?php include "header.php"; 
include "sge_connection.php"; ?>

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-2.jpg);">
        <div class="container">
            <h2>Course Grid</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Course Grid</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="course-area bg-img pt-130">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2> <span>Goverment </span> Courses</h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="course-slider-active-3">
             <?php
					$course_query = mysqli_query($conn,"select * from course WHERE type='gov'");

                    while($rows = mysqli_fetch_array($course_query))
					{
						$courseid = $rows['courseid'];
						$coursename = $rows['coursename'];
						$courseimg = $rows['courseimg'];
						$coursedesc = $rows['coursedesc'];
						$duration = $rows['duration'];
				?>
            <div class="single-course">
                <div class="course-img">
                <a href='course-details.php?detailid=<?php echo $rows['courseid']; ?>'><img class="animated" src="<?php echo $courseimg; ?>" alt=""></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4><a href='course-details.php?detailid=<?php echo $rows['courseid']; ?>'><?php echo $coursename; ?></a></h4>
                    <p><?php echo $coursedesc; ?></p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : <?php echo $duration; ?></span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="inquiry.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="course-area bg-img">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2>Skill Development <span>Courses</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="course-slider-active-5">
        <?php
					$course_query = mysqli_query($conn,"select * from course WHERE type='skill'");

                    while($rows = mysqli_fetch_array($course_query))
					{
						$courseid = $rows['courseid'];
						$coursename = $rows['coursename'];
						$courseimg = $rows['courseimg'];
						$coursedesc = $rows['coursedesc'];
						$duration = $rows['duration'];
				?>
            <div class="single-course">
                <div class="course-img">
                <a href='course-details.php?detailid=<?php echo $rows['courseid']; ?>'><img class="animated" src="<?php echo $courseimg; ?>" alt=""></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4><a href='course-details.php?detailid=<?php echo $rows['courseid']; ?>'><?php echo $coursename; ?></a></h4>
                    <p><?php echo $coursedesc; ?></p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : <?php echo $duration; ?></span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="inquiry.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="course-area bg-img">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2> <span>All </span>Courses</h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="course-slider-active-5">
        <?php
					$course_query = mysqli_query($conn,"select * from course Order by RAND()");

                    while($rows = mysqli_fetch_array($course_query))
					{
						$courseid = $rows['courseid'];
						$coursename = $rows['coursename'];
						$courseimg = $rows['courseimg'];
						$coursedesc = $rows['coursedesc'];
						$duration = $rows['duration'];
				?>
            <div class="single-course">
                <div class="course-img">
                    <a href='course-details.php?detailid=<?php echo $rows['courseid']; ?>'><img class="animated" src="<?php echo $courseimg; ?>" alt=""></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4><a href='course-details.php?detailid=<?php echo $rows['courseid']; ?>'><?php echo $coursename; ?></a></h4>
                    <p><?php echo $coursedesc; ?></p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : <?php echo $duration; ?></span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="inquiry.php">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; 
mysqli_close($conn); ?>