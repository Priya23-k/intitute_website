    <!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | All Teachers</title>
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
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>All Teachers</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Teachers Data</h3>
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
                                <div class="col-4-xxxl col-xl-5 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control" name="tname">
                                </div>
                                <div class="col-4-xxxl col-xl-5 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by course ..." class="form-control" name="tcourse">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <input type="submit" class="fw-btn-fill btn-gradient-yellow" value="SEARCH" name="search">
                                </div>
                            </div>
                        </form>
                         <!-- PHP SEARCH CODE STARTS HERE -->
                         <?php 
                          $teacher_query ="select teacher.*,course.coursename from teacher Left Join course ON teacher.tcourseid= course.courseid ";
                            $where = "";

                            if(isset($_GET['search']))
                            {
                                $tname = $_GET['tname'];
                                $tcourse = $_GET['tcourse'];
                              
                                if($tname != "")
                                {
                                    $where .= ($where == "" ? " where " : " OR ").("tname like '%".$tname."%'");
                                   
                                }
                                if($tcourse != "")
                                {
                                    $where .= ($where == "" ? " where " : " OR ").("coursename like '%".$tcourse."%'");
                                }
                            }
                            
                            $rs = mysqli_query($conn,$teacher_query.$where);
                            echo $teacher_query.$where;
                            ?>
                        <!-- PHP SEARCH CODE ENDS HERE -->
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th> 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Degree</th>
                                        <th>Course</th>
                                        <th>Experience</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    while($arr=mysqli_fetch_array($rs,MYSQLI_ASSOC))
                                      {
                                      ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"><?php echo $arr['tid']; ?></label>
                                            </div>
                                        </td>
                                        <td class="text-center"><?php  echo $arr['timg'];?></td>
                                        <td><?php echo $arr['tname']; ?></td>
                                        <td><?php echo $arr['tdegree']; ?></td>
                                        <td><?php echo $arr['coursename']; ?></td>
                                        <td><?php echo $arr['experience']; ?></td>
                                        <td>
                                            <?php echo"<a href='javascript:void(0);' data-teacherid='".$arr['tid']."' class='del'> " ?>
                                            <i class="fa fa-trash text-orange-red" aria-hidden="true" ></i></a>
                                            </td>
                                         <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="teacher-details.php?detailid=<?php echo $arr['tid']; ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Teacher Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
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
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

<script>
                  $(".del").click(function(){  
                        if(confirm("Are you sure?"))
                        {
                            var response;
                            $.ajax({ type: "GET",  
                                    data: {delid:$(this).attr("data-teacherid")},
                                    url: "teacherdelete.php",   
                                    async: false,
                                    success : function(text)
                                    {
                                        response= text;
                                    }
                                });

                                if(response!=0)
                                {
                                    $(this).parent().parent().remove();
                                }
                        }
                    });  
                
                </script>
<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:29 GMT -->
</html>