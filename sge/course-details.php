<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/glaxdu/glaxdu/course-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 10:51:45 GMT -->
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

<?php include "header.php"; +
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
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Course Grid</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="course-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="course-left-wrap mr-40">
                    <div class="apply-area">
                        <img src="assets/img/banner/course-details.jpg" alt="">
                        <div class="course-apply-btn">
                            <a href="inquiry.php" class="default-btn">APPLY NOW</a>
                        </div>
                    </div>
                    <div class="course-tab-list nav pt-40 pb-25 mb-35">
                        <a class="active" href="#course-details-1" data-bs-toggle="tab" >
                            <h4>Over View  </h4>
                        </a>
                        <a href="#course-details-3" data-bs-toggle="tab">
                            <h4> Reviews </h4>
                        </a>
                    </div>
                    <div class="tab-content jump">
                    <?php
                        if(isset($_GET['detailid']))
				        {
                            $detailid = $_GET['detailid'];
                            $detail_query = "select * from course where courseid = ".$detailid;
					        $rs = mysqli_query($conn,$detail_query);
					        while($dc = mysqli_fetch_array($rs))
                            {
                    ?>
                        <div class="tab-pane active" id="course-details-1">
                            <div class="over-view-content">
                                <h4>COURSE  DETAILS</h4>
                                <h5>Course Name : <?php echo $dc['coursename']; ?></h5>
                                <p> <?php echo $dc['description']; ?></p>
                                <div class="course-details-img">
                                    <img src="assets/img/banner/course-details-1.jpg" alt="">
                                </div>
                                <div class="course-summary-wrap">
                                    <div class="single-course-summary">
                                        <h4>Total Students</h4>
                                        <span><i class="fa fa-user"></i> <?php echo $dc['totalstudent']; ?></span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Course Duration</h4>
                                        <span><i class="fa fa-clock-o"></i> <?php echo $dc['duration']; ?></span>
                                    </div>
                                </div>
                                <p><?php echo $dc['coursedesc']; ?></p>
                            </div>
                        </div>
                        <?php } } ?>
                        <div class="tab-pane" id="course-details-3">
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="assets/img/blog/recent-post-1.jpg" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-btn">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla nec, convallis conval lis leo. Maecenas bibendum bibendum larius.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-review child-review">
                                    <div class="review-img">
                                        <img src="assets/img/blog/recent-post-2.jpg" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-btn">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla nec, convallis conval lis leo. Maecenas bibendum bibendum larius.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <h3>Add a Review</h3>
                                <div class="ratting-form">
                                    <form>
                                        <div class="star-box">
                                            <span>Your rating:</span>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <input placeholder="Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <input placeholder="Email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-course pt-70">
                        <div class="related-title mb-45 mrg-bottom-small">
                            <h3>Related Course</h3>
                            <p>Hempor incididunt ut labore et dolore mm, itation ullamco laboris <br>nisi ut aliquip. </p>
                        </div>
                        <div class="related-slider-active">
                            <?php
					            $course_query = mysqli_query($conn,"select * from course Order by RAND() LIMIT 4");

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
                                    <a href="#"><img class="animated" src="<?php echo $courseimg; ?>" alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="#"><?php echo $coursename; ?></a></h4>
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
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style sidebar-res-mrg-none">
                    <div class="sidebar-search mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Search</h4>
                        </div>
                        <form>
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-15">
                            <h4>About Us</h4>
                        </div>
                        <p>quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolors eos qui ratione voluptatem sad.</p>
                        <a href="#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                        <div class="sidebar-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Recent Events</h4>
                        </div>
                        <div class="recent-post-wrap">
                        <?php $event_query = mysqli_query($conn,"select * from events LIMIT 2");
                            while($rows = mysqli_fetch_array($event_query))
                            {
                            $eventid = $rows['eventid'];
                            $eventname = $rows['eventname'];
                            $eventdate = $rows['eventdate'];
                            $eventdesc = $rows['eventdesc'];
                            $eventimg = $rows['eventimg'];
                            $eventtime = $rows['eventtime'];
                        ?>
                            <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="#"><img src="<?php echo $eventimg; ?>" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="#"><?php echo $eventname; ?></a></h5>
                                    <span><?php echo $eventdate; ?></span>
                                    <p><?php echo $eventdesc; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Course Category</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li><a href="#">MBA <span>04</span></a></li>
                                <li><a href="#">Graduate <span>08</span></a></li>
                                <li><a href="#">Under Graduate <span>04</span></a></li>
                                <li><a href="#">BBA <span>06</span></a></li>
                                <li><a href="#">Engineering <span>04</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-recent-course-wrap mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Recommended Courses</h4>
                        </div>
                        <div class="sidebar-recent-course">
                        <?php
					        $course_query = mysqli_query($conn,"select * from course Order by RAND() LIMIT 2");
                             while($rows = mysqli_fetch_array($course_query))
                            {
                                $courseid = $rows['courseid'];
                                $coursename = $rows['coursename'];
                                $courseimg = $rows['courseimg'];
                                $coursedesc = $rows['coursedesc'];
                                $duration = $rows['duration'];
				        ?>
                            <div class="sin-sidebar-recent-course">
                                <div class="sidebar-recent-course-img">
                                    <a href='course-details.php?detailid=<?php echo $rows['courseid']; ?>'><img src="<?php echo $courseimg; ?>" alt=""></a>
                                </div>
                                <div class="sidebar-recent-course-content">
                                    <h4><a href='course-details.php?detailid=<?php echo $rows['courseid']; ?>'><?php echo $coursename; ?></a></h4>
                                    <ul>
                                        <li class="duration-color">Duration : <?php echo $duration; ?></li>
                                    </ul>
                                    <p><?php echo $coursedesc; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area pt-45 pb-130">
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