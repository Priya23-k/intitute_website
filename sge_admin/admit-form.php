<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Admission Form</title>
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
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
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
        <?php include "a_header.php" ?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include "a_sidebar.php" ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Student Admit Form</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Students</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="insert_student.php" method="post">
                            <div class="row">
                                <div class="col-xl-12 col-lg-6 col-12 form-group">
                                    <label>Student Code *</label>
                                    <input type="text" name="scode" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" name="fname" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Middle Name *</label>
                                    <input type="text" name="midname" class="form-control">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" name="lname" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Father/Husband Name *</label>
                                    <input type="text" name="fathername" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Mother Name *</label>
                                    <input type="text" name="mothername" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="text" name="dob" placeholder="dd/mm/yyyy" class="form-control air-datepicker">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <!-- <select class="select2" name="gender">
                                        <option value="">Please Select Gender *</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select> -->
                                   
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                    value="female" />
                                    <label class="form-check-label" for="female">Female</label>
                               
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                    value="male" />
                                    <label class="form-check-label" for="male">Male</label>
                               
                                    <input class="form-check-input" type="radio" name="gender" id="other"
                                    value="other" />
                                    <label class="form-check-label" for="other">Other</label>
                              
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Course *</label>
                                    <?php
                                    //display code
                                    include "sge_connection.php";

                                    $qrysel="select * from course";
                                    $rs = mysqli_query($conn, $qrysel);

                                    if(!$rs)
                                    {
                                        echo"<font color='red' size='4'>Incorrect my sql query</font>";
                                        echo"<br>".$qrysel;
                                        die();
                                    } 
                                        echo '<select id="sel1" class="select2" name="courseid"> ';
                                        echo "<option value='-1'>Select Course </option>";
                                        while($v=mysqli_fetch_array($rs))
                                        {
                                            echo '<option value='.$v["courseid"].' '. ((isset($_GET['coursename']) && $_GET['coursename']==$v["courseid"])?'Selected':'') .' >'.$v["coursename"].'</option>';
                                        }
                                        echo "</select>";
                                    ?>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Marital Status *</label>
                                    <select class="select2" name="marstatus">
                                        <option value="">Please Select Gender *</option>
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact no.</label>
                                    <input type="text" name="contact" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Parent's Contact no.</label>
                                    <input type="text" name="pcontact" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Aadhaar-Card no.</label>
                                    <input type="text" name="aadharcardno" class="form-control">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Correspondence Address</label>
                                    <input type="text" name="coreaddress" class="form-control">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Permmanent Address</label>
                                    <input type="text" name="peraddress" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>10th Board</label>
                                    <input type="text" name="xboard" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>10th Grade/percentage</label>
                                    <input type="text" name="xmarks" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>12th Board</label>
                                    <input type="text" name="xiiboard" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>12th Grade/percentage</label>
                                    <input type="text" name="xiimarks" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Total Fees</label>
                                    <input type="text" name="total_fees" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Paid Fees</label>
                                    <input type="text" name="paid_fees" class="form-control">
                                </div>
                                <!--<div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Emi Amount</label>
                                    <input type="text" name="emi_Amount" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Emi Date</label>
                                    <input type="text" name="emi_date" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Total Emi</label>
                                    <input type="text" name="total_Emis" class="form-control">
                                </div>-->
                                <div class="col-xl-3 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file" name="profile">
                                </div>
                                <div class="col-xl-3 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Upload Student's Adhaar Card Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file" name="aadharcard">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Save">
                                    <input type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow" value="Reset">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
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
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>
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


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/admit-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:18 GMT -->
</html>