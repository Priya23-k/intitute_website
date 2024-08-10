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
                    <h3>Student Attendence</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Student Attendence</li>
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
                                   <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="new-added-form">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-3 col-lg-3 col-12 form-group">                         
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
                                        <div class="col-xl-3 col-sm-3 col-lg-3 col-12 form-group">
                                            <select class="select2" id="sel2" name="sname">
                                                <option value="">Select Student Name</option>
                                            </select>
                                        </div>
                                         <div class="col-xl-4 col-sm-3 col-lg-3 col-12 form-group">
                                              <input type="month" class="form-control air-datepicker" name="month">
                                        </div>
                                        
                                        <div class="col-xl-2 col-sm-3 col-lg-3 col-12">
                                    <input type="submit" class="fw-btn-fill btn-gradient-yellow" value="VIEW" name="view">
                                </div>
                                    </div>
                                </form>
                               <?php
                                if(isset($_GET['view']))
                                {
                                    $cname = $_GET['cname'];
                                    $sname = $_GET['sname'];
                                    $monthyear = "".$_GET['month'];
                                    $iparr = explode ("-", $monthyear); 
                                    $d=cal_days_in_month(CAL_GREGORIAN,$iparr[1],$iparr[0]);//at oth possition month and at 1st possition year

                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Student Attendence Search Area End Here -->
                    <!-- Student Attendence Area Start Here -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <div class="row"> 
                                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                                    <div class="table-responsive">
                                        <table class="table bs-table table-striped table-bordered text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">Date</th>
                                                    <th class="text-left">Attendence status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php
                                                    date_default_timezone_set('UTC');
                                                    if(isset($_GET['view']))
                                                    {
                                                    // Start date
                                                    $date =  $monthyear.'-01';
                                                    // End date
                                                    $end_date = $monthyear.'-'.$d;

                                                    $present_days = 0;
                                                    $absent_days = 0;
                                                    $holidays = 0;
                                                    
                                                    
                                                        while (strtotime($date) <= strtotime($end_date)) 
                                                        {
                                                            echo "<tr><td>$date\n";

                                                            $atten_query1 = mysqli_query($conn,"select attnd_status from attendence where sid=".$sname." AND att_date='".$date."'" );
                                                            //echo "select attnd_status from attendence where sid=".$sname." AND att_date='".$date."'";
                                                            
                                                            $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
                                                            if(mysqli_num_rows($atten_query1)>0)
                                                            {
                                                                while($row_att = mysqli_fetch_array($atten_query1))
                                                                {
                                                                    if($row_att['attnd_status']==0)
                                                                    {
                                                                        $absent_days++;
                                                                        echo '<td><i class="fas fa-times text-danger"></i></td>';
                                                                    }
                                                                    else
                                                                    {
                                                                        $present_days++;
                                                                        echo '<td><i class="fas fa-check text-success"></i></td>';
                                                                    }
                                                                }
                                                            }
                                                            else
                                                            {
                                                                $holidays++;
                                                                echo '<td>-</td>';
                                                            }

                                                            echo "</tr>";
                                                        } 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                    <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                            <table class="table table-bordered table-striped mb-3">
                                            <?php 
                                                    $atten_query = mysqli_query($conn,"select student.fname,course.coursename from student Left Join course ON student.courseid= course.courseid where student.sid=". $sname." AND student.courseid=".$cname);
                                                if(isset($_GET['view']))
                                                {
                                                   // echo "select student.fname,course.coursename from student Left Join course ON student.courseid= course.courseid where sid=". $sname." AND courseid=".$cname;
                                                   // $atten_query = mysqli_query($conn,"select student.fname,course.coursename from student Left Join course ON student.courseid= course.courseid where student.sid=". $sname." AND student.courseid=".$cname);

                                                    $cname = $_GET['cname'];
                                                    $sname = $_GET['sname'];

                                                    while($rows = mysqli_fetch_array($atten_query))
                                                    {
                                                ?>
                                                    <tr>
                                                        <th>Student Name</th>
                                                        <td><?php  echo $rows['fname']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Course Name</th>
                                                        <td><?php  echo $rows['coursename']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Month-Year</th>
                                                        <?php  
                                                            $orgDate = $_GET['month'];
                                                            $newDate = date("m-Y", strtotime($orgDate));  
                                                             
                                                        ?>  
                                                        <td><?php echo $newDate;?></td>
                                                    </tr>
                                                   <?php $totaldays = $d - $holidays; ?>
                                                    <tr>

                                                        <th>Total Days</th>
                                                        <td><?php echo $totaldays; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Present Days</th>
                                                        <td><?php echo $present_days;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Absent Days</th>
                                                        <td><?php echo $absent_days; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Holidays</th>
                                                        <td><?php echo $holidays; ?></td>
                                                    </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }  
                          } }
                        ?>
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
    
    <script>  
			$(document).ready(function(){  
				$("#sel1").change(function(){  
					if($("#sel1 option:selected").val()<=0)
					{
						$("#sel2").hide();
					}
					else
					{
						var response;
						$.ajax({ type: "GET",  
								 data: {selcat1:$("#sel1 option:selected").val()},
								 url: "fees_search.php",   
								 async: false,
								 success : function(text)
								 {
									 response= text;
								 }
							});
					$("#sel2").empty();
					$('#sel2').append(response);
						$("#sel2").show();
					}
				});  
            });
            </script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-attendence.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
</html>