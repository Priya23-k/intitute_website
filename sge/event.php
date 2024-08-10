<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/glaxdu/glaxdu/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 10:51:32 GMT -->
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
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-3.jpg);">
        <div class="container">
            <h2>Event Grid</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Event Grid</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
        <?php $event_query = mysqli_query($conn,"select * from events");

        while($rows = mysqli_fetch_array($event_query))
        {
            $eventid = $rows['eventid'];
            $eventname = $rows['eventname'];
            $eventdate = $rows['eventdate'];
            $eventdesc = $rows['eventdesc'];
            $eventimg = $rows['eventimg'];
            $eventtime = $rows['eventtime'];
        ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                    <a href='event-details.php?detailid=<?php echo $rows['eventid']; ?>'><img src="<?php echo $eventimg; ?>" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date"><?php echo $eventdate; ?></span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.php?detailid=<?php echo $rows['eventid']; ?>"><?php echo $eventname; ?></a></h3>
                        <p><?php echo $eventdesc; ?></p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-clock-o"></i>
                                <span><?php echo $eventtime; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="pro-pagination-style text-center mt-25">
            <ul>
                <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
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