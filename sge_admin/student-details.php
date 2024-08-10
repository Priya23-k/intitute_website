<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saraswati Group of Education | Students Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <?php include"sge_connection.php"; ?>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         <?php include "a_header.php"; ?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include "a_sidebar.php"; ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Student Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <?php
                        if(isset($_GET['detailid']))
				        {
                            $detailid = $_GET['detailid'];
                            $detail_query = "select student.*,course.coursename from student Left Join course ON student.courseid= course.courseid where sid = ".$detailid;
					        $rs = mysqli_query($conn,$detail_query);
					        while($ds = mysqli_fetch_array($rs))
                            {
                    ?>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Me</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="update-student-profile.php?detailid=<?php echo $ds['sid']; ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="img/figure/student1.jpg" alt="student">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><?php echo $ds['fname'].' '.$ds['lname']; ?></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="update-student-profile.php?detailid=<?php echo $ds['sid']; ?>"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                        <tr>
                                                <td>Student-Code:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['scode'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['fname'].' '.$ds['midname'].' '.$ds['lname']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['gender']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Father Name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['fathername']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Mother Name:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['mothername']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['dob']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Course:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['coursename']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Marital Status:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['marstatus']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Contact:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['contact']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Parent's Contact:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['pcontact']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Correspondes Address:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['coreaddress']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Permanant Address:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['peraddress']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Aadhaar-Card Number</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['aadharcardno']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>10th Board:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['10board']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>10th Grade/Percentage:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['10marks']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>12th Board:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['12board']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>12th Grade/Percentage:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['12marks']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Password:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $ds['password']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } ?>
                <!-- Student Details Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Saraswati Group of Education</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:10 GMT -->
</html>