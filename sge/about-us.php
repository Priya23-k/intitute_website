<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/glaxdu/glaxdu/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 10:51:28 GMT -->
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
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg.jpg);">
        <div class="container">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> About Page</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area bg-img pt-90" style="background-image:url(assets/img/bg/bg-8.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="about-chose-us pt-120">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95">
                                <div class="about-choose-img">
                                    <img src="assets/img/icon-img/service-9.png" alt="">
                                </div>
                                <div class="about-choose-content text-light-blue">
                                    <h3>Scholarship Facility</h3>
                                    <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation ullamco</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95 about-negative-mrg">
                                <div class="about-choose-img">
                                    <img src="assets/img/icon-img/service-10.png" alt="">
                                </div>
                                <div class="about-choose-content text-yellow">
                                    <h3>Best Teacher </h3>
                                    <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation ullamco</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95">
                                <div class="about-choose-img">
                                    <img src="assets/img/icon-img/service-11.png" alt="">
                                </div>
                                <div class="about-choose-content text-blue">
                                    <h3>Library</h3>
                                    <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation ullamco</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95 about-negative-mrg">
                                <div class="about-choose-img">
                                    <img src="assets/img/icon-img/service-12.png" alt="">
                                </div>
                                <div class="about-choose-content text-green">
                                    <h3>25 Years Of Experience</h3>
                                    <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation ullamco</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="about-img">
                    <img src="assets/img/banner/about.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="video-area bg-img pt-270 pb-270" style="background-image:url(assets/img/banner/video.jpg);">
    <div class="video-btn-2">
        <a class="video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
            <img class="animated" src="assets/img/icon-img/viddeo-btn.png" alt="">
        </a>
    </div>
</div>
<div class="teacher-area pt-130 pb-100">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Best <span>Teacher</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="custom-row">
		<?php $teacher_query = mysqli_query($conn,"select * from teacher Order by RAND()");

                    while($rows = mysqli_fetch_array($teacher_query))
					{
						$tid = $rows['tid'];
						$tname = $rows['tname'];
						$tdegree = $rows['tdegree'];
						$tdesignation = $rows['tdesignation'];
						$experience = $rows['experience'];
						$timg = $rows['timg'];
				?>
            <div class="custom-col-5">
                <div class="single-teacher mb-30">
                    <div class="teacher-img">
                        <img src="<?php echo $timg;?>" alt="">
                    </div>
                    <div class="teacher-content-visible">
                        <h4><?php echo $tname;?></h4>
                        <h5><?php echo $tdesignation;?></h5>
                    </div>
                    <div class="teacher-content-wrap">
                        <div class="teacher-content">
                            <h4><?php echo $tname;?></h4>
                            <h5><?php echo $tdesignation;?></h5>
                            <p><?php echo $tdegree ."<br/>". $experience;?></p>
                        </div>
                    </div>
                </div>
            </div>
			<?php } ?>
        </div>
    </div>
</div>
<div class="fun-fact-area bg-img pt-130 pb-100" style="background-image:url(assets/img/bg/bg-6.jpg);">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-2 white-text text-center mb-100">
            <h2><span>Fun</span> Fact</h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">160</h2>
                        <span>AWARD WINNING</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">200</h2>
                        <span>GRADUATE</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">160</h2>
                        <span>AWARD WINNING</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four count-white">
                    <div class="count-img">
                        <img src="assets/img/icon-img/funfact-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">200</h2>
                        <span>FACULTIES</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Achievement</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="row">
            <?php $achievement_query = mysqli_query($conn,"select * from achievement LIMIT 4");
                while($rows = mysqli_fetch_array($achievement_query))
                {   
                    $aid = $rows['aid'];
                    $aname = $rows['aname'];
                    $ano = $rows['ano'];
            ?>  
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count"><?php echo $ano ?></h2>
                        <span><?php echo $aname ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
            <?php $feedback_query = mysqli_query($conn,"select * from feedback");

                while($rows = mysqli_fetch_array($feedback_query))
                {   
                    $feedid = $rows['feedid'];
                    $sid = $rows['sid'];
                    $studentname = $rows['studentname'];
                    $feedback = $rows['feedback'];
                    $course = $rows['course'];
                    $studentimg = $rows['studentimg'];
                ?>  
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="<?php echo $studentimg; ?>">
                    </div>
                   <div class="row g-0">
                        <div class="ms-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p><?php echo $feedback; ?></p>
                                <div class="testi-info">
                                   <h5><?php echo $studentname; ?></h5>
                                   <span><? echo $course; ?></span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <?php } ?>
            </div>
            <div class="testimonial-image-slider">
            <?php $feedback_query = mysqli_query($conn,"select * from feedback");

                while($rows = mysqli_fetch_array($feedback_query))
                {   
                    $feedid = $rows['feedid'];
                    $sid = $rows['sid'];
                    $studentname = $rows['studentname'];
                    $feedback = $rows['feedback'];
                    $course = $rows['course'];
                    $studentimg = $rows['studentimg'];
                ?>
                <div class="sin-testi-image">
                    <img src="<?php echo $studentimg; ?>" alt="">
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="testimonial-text-img">
            <img alt="" src="assets/img/icon-img/testi-text.png">
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