<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/glaxdu/glaxdu/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 10:51:48 GMT -->
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
            <h2>Event Details</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Event Details</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-details-area pt-130">
    <div class="container">
        <div class="row">
                    <?php
                        if(isset($_GET['detailid']))
				        {
                            $detailid = $_GET['detailid'];
                            $detail_query = "select * from events where eventid = ".$detailid;
					        $rs = mysqli_query($conn,$detail_query);
					        while($dc = mysqli_fetch_array($rs))
                            {
                    ?>
            <div class="col-xl-9 col-lg-8">
                <div class="event-left-wrap mr-40">
                    <div class="event-description">
                        <div class="description-date-social mb-45">
                            <div class="description-date-time">
                                <div class="description-date">
                                    <span class="event-date"><?php echo $dc['eventdate']; ?></span>
                                </div>
                                <div class="description-meta-wrap">
                                    <div class="description-meta">
                                        <div class="h4"><i class="fa fa-calendar" aria-hidden="true"></i>
                                         <span><?php echo $dc['eventname']; ?></span></div>
                                         <i class="fa fa-clock-o"></i>
                                        <span><?php echo $dc['eventtime']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="description-social-wrap">
                                <div class="description-social">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description-btn">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo $dc['eventimg']; ?>" alt="">
                        <h3><?php echo $dc['eventdesc']; ?></h3>
                        <p><?php echo $dc['description']; ?></p>
                        <div class="event-gallery text-center mt-40">
                            <div class="event-gallery-active nav-style-3 owl-carousel">
                                <img src="assets/img/event/event-gallery-1.jpg" alt="">
                                <img src="assets/img/event/event-gallery-2.jpg" alt="">
                            </div>
                            <h4><a href="event-gallery.php">View Our Event Gallery</a></h4>
                        </div>
                        <div class="seat-book-wrap bg-img mt-80 " style="background-image:url(assets/img/event/seat-book.jpg);">
                            <div class="seat-book-title text-center">
                                <h3>Book Your Seat Now</h3>
                                <p> natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque entore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                            <div class="seat-book-form">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input placeholder="Name" type="text">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input placeholder="Email" type="email">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input name="name" placeholder="Date" type="text">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input placeholder="Time" type="text">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea placeholder="Message"></textarea>
                                            <button class="seat-book-btn" type="submit">BOOK NOW</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
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
<div class="brand-logo-area pt-130 pb-130">
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
<?php include "footer.php"; ?>