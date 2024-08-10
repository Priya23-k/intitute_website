<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saraswati Group of Education | Add Expense</title>
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
                    <h3>Accounts</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Add Fees Collection</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add Expense Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add Fees Collection</h3>
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
                        <form class="new-added-form" action="insert_fees.php" method="POST">
                            <div class="row">

                                <div class="col-6-xxxl col-xl-6 col-lg-6 col-12 form-group">                         
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
                                        echo'<label>Course Name</label>';
                                        echo '<select id="sel1" class="select2" name="courseid" aria-label="Default select example"> ';
                                        echo "<option value='-1'>Select Course </option>";
                                        while($v=mysqli_fetch_array($rs))
                                        {
                                            echo '<option value='.$v["courseid"].'>'.$v["coursename"].'</option>';
                                        }
                                        echo "</select>";
                                    ?>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Student name</label>
                                    <select class="select2" id="sel2" name="sid">
                                        <option value="">Select Student Name</option>    
                                    </select>     
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Fees</label>
                                    <input type="text" placeholder="" class="form-control"name="amount_paid">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Pay Mode</label>
                                    <select class="select2"name="paid_mode">
                                        <option selected >Pay Mode </option>
                                        <option>Cash</option>
                                        <option>Cheque</option>
                                        <option>UPI</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Date</label>
                                    <input type="text"name="pay_date" placeholder="dd/mm/yy" class="form-control air-datepicker" data-position="bottom right">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-group">
                                    <label>Remark</label>
                                    <input type="text" name="remark" class="form-control">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add Expense Area End Here -->
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
<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/add-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
</html>