<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/glaxdu/glaxdu/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 10:50:56 GMT -->
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
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>Login/ Inquiry</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>login/Inquiry</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ms-auto me-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a href="login.php"><h4> login </h4></a>
                        <a class="active" data-bs-toggle="tab" href="">
                            <h4> Inquire Now </h4>
                        </a>
                    </div>
                    
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                <form method="post" action="insert_inquiry.php">
                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="name" placeholder="Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="address" placeholder="Address" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="phone" placeholder="Phone" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="email" placeholder="Email" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="qualification" placeholder="qualification" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="course_intrested" placeholder="Course Intrested" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="why" placeholder="Why do you want to do this Course?" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="inquiry_date" placeholder="Date of Inquiry" type="date">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-form-style">
                                                    <textarea name="comment" placeholder="Comment"></textarea>
                                                    <button class="submit default-btn" type="submit">SUBMIT NOW</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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