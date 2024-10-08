<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-attendence.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saraswati Group of Education | Student Attendence</title>
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
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
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
                    <h3>All Student Attendence</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Student Attendence</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Student Attendence Search Area Start Here -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Student Attendence</h3>
                                    </div>
                                </div>
                                <form class="new-added-form">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">                        
                                            <?php
                                            /*display code*/
                                            include "sge_connection.php";

                                            $qrysel="select * from course";
                                            $rs = mysqli_query($conn, $qrysel);

                                            if(!$rs)
                                            {
                                                echo"<font color='red' size='4'>Incorrect my sql query</font>";
                                                echo"<br>".$qrysel;
                                                die();
                                            } 
                                                echo '<select id="sel1" class="select2" name="cname"> ';
                                                echo "<option value='-1'>Select Course </option>";
                                                while($v=mysqli_fetch_array($rs))
                                                {
                                                    echo '<option value='.$v["courseid"].' '. ((isset($_GET['cname']) && $_GET['cname']==$v["courseid"])?'Selected':'') .' >'.$v["coursename"].'</option>';
                                                }
                                                echo "</select>";
                                            ?>
                                        </div>
                                        <div class="col-xl-3 col-lg-5 col-12 form-group">
                                            <input type="date" placeholder="dd/mm/yy" name="attdate1" class="form-control air-datepicker" data-position="bottom right">
                                        </div>
                                        <div class="col-xl-3 col-lg-5 col-12 form-group">
                                            <input type="date" placeholder="dd/mm/yy" name="attdate2" class="form-control air-datepicker" data-position="bottom right">
                                        </div>
                                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                                            <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="VIEW" name="view">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Student Attendence Search Area End Here -->
                    <!-- Student Attendence Area Start Here -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table bs-table table-striped table-bordered text-nowrap">
                                        <thead >
                                            <tr>
                                                <th class="text-left">Students Name</th>
                                                <?php
                                                date_default_timezone_set('UTC');
                                                 if(isset($_GET['view']))
                                                 {
                                                    // Start date
                                                    $date = $_GET['attdate1'];
                                                    // End date
                                                    $end_date = $_GET['attdate2'];
                                                    while (strtotime($date) <= strtotime($end_date))
                                                    {
                                                        echo '<th class="text-left" style ="font-size: 13px; transform: rotate(-25deg);">'.$date.'</th>';
                                                        $d = new DateTime( $date );
                                                        $d->modify( '+1 day' );
                                                        $date = $d->format( 'Y-m-d' );
                                                    }
                                                 }
                                                ?>
                                            </tr>
                                        
                                        </thead>
                                        <tbody>
                                        <?php 
                                                if(isset($_GET['view']))
                                                {
                                                    $cname = $_GET['cname'];
                                                    $atten_query = mysqli_query($conn,"select * from student where courseid=".$cname);
                                                
                                                    while($rows = mysqli_fetch_array($atten_query))
                                                    {
                                                ?>
                                                    <tr>
                                                        <td>
                                                        <input type="hidden"  value="<?php echo $rows['sid']; ?>" />
                                                        <?php echo $rows['fname']; ?>
                                                        </td>
                                                        <?php
                                                            date_default_timezone_set('UTC');
                                                             // Start date
                                                            $date1 = $_GET['attdate1'];
                                                            // End date
                                                            $end_date1 = $_GET['attdate2'];
                                                            while (strtotime($date1) <= strtotime($end_date1))
                                                            {
                                                                $atten_query1 = mysqli_query($conn,"select attnd_status from attendence where sid=".$rows['sid']." AND att_date='".$date1."'" );
                                                                if(mysqli_num_rows($atten_query1)>0)
                                                                {
                                                                    while($row_att = mysqli_fetch_array($atten_query1))
                                                                    {
                                                                        if($row_att['attnd_status']==0)
                                                                        {
                                                                            echo '<td><i class="fas fa-times text-danger"></i></td>';
                                                                        }
                                                                        else
                                                                        {
                                                                            echo '<td><i class="fas fa-check text-success"></i></td>';
                                                                        }
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    echo '<td>-</td>';
                                                                }

                                                                $d = new DateTime( $date1 );
                                                                $d->modify( '+1 day' );
                                                                $date1 = $d->format( 'Y-m-d' );
                                                            }
                                                        ?>
                                                       
                                                    </tr>
                                            <?php } 
                                                }
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Attendence Area End Here -->
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
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-attendence.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
</html>