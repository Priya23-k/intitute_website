<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saraswati Group of Education | All Expense</title>
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
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <?php include "sge_connection.php"; ?>
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
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Fees Collection</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Expanse Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Fees Collection</h3>
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
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                 <div class="col-xl-5 col-lg-5 col-12 form-group">
                                    <input type="date" placeholder="dd/mm/yy" name="date1" class="form-control air-datepicker" data-position="bottom right">
                                </div>
                                <div class="col-xl-5 col-lg-5 col-12 form-group">
                                    <input type="date" placeholder="dd/mm/yy" name="date2" class="form-control air-datepicker" data-position="bottom right">
                                </div>
                                <div class="col-xl-2 col-lg-2 col-12 form-group">
                                    <input type="submit" class="fw-btn-fill btn-gradient-yellow" name="search" value="SEARCH" />
                                </div>
                            </div>
                        </form>
                      
                        <div class="table-responsive">
                            <table class="table data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>SCode</th>
                                        <th>Student Name</th>
                                        <th>Course Name</th>
                                        <th>Amount Paid</th>
                                        <th>Payment Date</th>
                                    </tr>
                                </thead>                                    
                                <tbody>
                                    <?php
                                    $fees_query = "select student.fname,student.sid,student.scode,course.coursename,fees.amount_paid,fees.pay_date from fees 
                                    Left Join course ON fees.courseid = course.courseid 
                                    Left Join student ON fees.sid = student.sid ";
                                    
                                    $where = "";
                          
                                    if(isset($_GET['search']))
                                    {
                                        $date1 = $_GET['date1'];
                                        $date2 = $_GET['date2'];
                                        
                                        $where =" WHERE fees.pay_date BETWEEN '$date1' AND '$date2' ";
                                    
                                     }

                                     $rs_query = mysqli_query($conn,$fees_query.$where);
                        
                                   while($rows = mysqli_fetch_array($rs_query))
                                    {
                                        $scode = $rows['scode'];
                                        $fname = $rows['fname'];
                                        $coursename = $rows['coursename'];
                                        $amount_paid = $rows['amount_paid'];
                                        $pay_date = $rows['pay_date'];
                                      ?>
                                    
                                    <tr>
                                        <td> <?php echo $scode; ?></td>
                                        <td> <?php echo $fname; ?></td>
                                        <td> <?php echo $coursename; ?></td>
                                        <td> <?php echo $amount_paid; ?></td>
                                        <td> <?php echo $pay_date; ?></td>
                                    </tr>
                                    <?php }?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
                <!-- Expanse Table Area End Here -->
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
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-expense.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
</html>