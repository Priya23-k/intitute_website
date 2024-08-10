<?php 
ob_start();
?>
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
    <?php include "sge_connection.php"; ?>
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
                                    <div class="col-xl-3 col-sm-3 col-lg-3 col-12 form-group">                         
                                            <?php
                                                /*display code*/
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
                                        <div class="col-xl-4 col-sm-3 col-lg-3 col-12 form-group">
                                          <input type="date" placeholder="dd/mm/yy" name="date" class="form-control air-datepicker" data-position="bottom right">
                                        </div>
                                
                                        <div class="col-xl-5 col-sm-3 col-lg-3 col-12 form-group">
                                            <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="VIEW" name="view">
                                            <input type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow" value="RESET">
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
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Attendence Sheet Of Class </h3>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
                                     <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                        <form method="post">
                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Students Name</th>
                                                <th class="text-left">Select</th>
                                                <th class="text-left">Note</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                                if(isset($_GET['view']))
                                                {
                                                    $cname = $_GET['cname'];
                                                    $atten_query = mysqli_query($conn,"select * from student where courseid=".$cname);
                                                   
                                                        echo '<input type="hidden" name="txtdate" value="'.$_GET['date'].'" />';
                                                        echo '<input type="hidden" name="txtcid" value="'.$cname.'" />';
                                                      
                                                    while($rows = mysqli_fetch_array($atten_query))
                                                    {
                                                ?>
                                                    <tr>
                                                        <td>
                                                        <input type="hidden" name="txtsid[]" value="<?php echo $rows['sid']; ?>" />
                                                        <?php echo $rows['fname']; ?>
                                                        </td>
                                                        <td><input type="checkbox" name="chkattnd[]" value="<?php echo $rows['sid']; ?>"></td>
                                                        <td><input type="text" name="txtnote[]"></td>
                                                    </tr>
                                            <?php }  
                                                 }
                                             ?>
                                        </tbody>
                                    </table>
                                    <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
                                            <input type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow" value="SUBMIT" name="submit">
                                    </div>
                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php /*}*/ ?>
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
    <?php
        if(isset($_POST['submit']))
        {
            $dt = $_POST['txtdate'];
            $date = str_replace('/', '-', $dt);
            $att_date = date("Y-m-d", strtotime($date));
           
            foreach($_POST['txtsid'] AS $key => $sid)
            {
                $chk = 0;
                if (in_array($sid, $_POST['chkattnd']))
                {
                    $chk = 1;
                }
                $qrysel="select * from attendence where courseid =".$_POST['txtcid']." AND sid =".$sid." AND att_date='".$att_date."'";
                $rs = mysqli_query($conn, $qrysel);
                
                if(mysqli_num_rows($rs)>0)
                {
                    $qry = "DELETE FROM `attendence` where courseid =".$_POST['txtcid']." AND sid =".$sid." AND att_date='".$att_date."'";
                    mysqli_query($conn,$qry);  
                }
                $qry = "INSERT INTO `attendence` (`attid`, `courseid`, `sid`, `attnd_status`, `att_date`,`note`) 
                VALUES (NULL, '".$_POST['txtcid']."', '".$sid."', '".$chk."', '".$att_date."', '".$_POST['txtnote'][$key]."');";
                echo $qry;
                mysqli_query($conn,$qry);      
               
            }
        }
        mysqli_close($conn);
    ?>
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